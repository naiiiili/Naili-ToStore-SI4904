<?php
namespace App\Http\Controllers;

use App\Models\Ekspedisi;
use Illuminate\Http\Request;

class EkspedisiController extends Controller
{
    public function index()
    {
        $data = Ekspedisi::latest()->paginate(10);

        return view('admin.ekspedisi.index', compact('data'));
    }

    public function create()
    {
        return view('admin.ekspedisi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ekspedisi' => 'required|string|max:100',
            'layanan' => 'required|in:Reguler,Express',
            'zona' => 'required|in:Jawa,Bali,Luar Jawa',
            'tarif' => 'required|integer|min:0',
            'estimasi' => 'required|string|max:50',
        ]);

        Ekspedisi::create($request->all());

        return redirect()->route('ekspedisi.index')
            ->with('success', 'Data ekspedisi berhasil ditambahkan.');
    }

    public function show(Ekspedisi $ekspedisi)
    {
        return view('admin.ekspedisi.show', compact('ekspedisi'));
    }

    public function edit(Ekspedisi $ekspedisi)
    {
        return view('admin.ekspedisi.edit', compact('ekspedisi'));
    }

    public function update(Request $request, Ekspedisi $ekspedisi)
    {
        $request->validate([
            'nama_ekspedisi' => 'required|string|max:100',
            'layanan' => 'required|in:Reguler,Express',
            'zona' => 'required|in:Jawa,Bali,Luar Jawa',
            'tarif' => 'required|integer|min:0',
            'estimasi' => 'required|string|max:50',
        ]);

        $ekspedisi->update($request->all());

        return redirect()->route('ekspedisi.index')
            ->with('success', 'Data ekspedisi berhasil diperbarui.');
    }

    public function destroy(Ekspedisi $ekspedisi)
    {
        $ekspedisi->delete();

        return redirect()->route('ekspedisi.index')
            ->with('success', 'Data ekspedisi berhasil dihapus.');
    }
}
