
@extends('admin.layouts.app')

@section('title', 'Data Ekspedisi')

@section('content')

    <div class="page-header">
        <div>
            <h1>Data Ekspedisi</h1>
            <p>Kelola data layanan ekspedisi ToStore.</p>
        </div>

        <a href="{{ route('ekspedisi.create') }}" class="btn-primary">
            + Tambah Ekspedisi
        </a>
    </div>

    @if ($errors->any())
        <div class="alert-error">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Ekspedisi</th>
                    <th>Layanan</th>
                    <th>Zona</th>
                    <th>Tarif</th>
                    <th>Estimasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($data as $item)
                    <tr>
                        <td>{{ $data->firstItem() + $loop->index }}</td>
                        <td>{{ $item->nama_ekspedisi }}</td>
                        <td>{{ $item->layanan }}</td>
                        <td>{{ $item->zona }}</td>
                        <td>Rp{{ number_format($item->tarif, 0, ',', '.') }}</td>
                        <td>{{ $item->estimasi }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('ekspedisi.show', $item->id) }}" class="btn-detail">Detail</a>

                                <a href="{{ route('ekspedisi.edit', $item->id) }}" class="btn-edit">Edit</a>

                                <form action="{{ route('ekspedisi.destroy', $item->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus data ekspedisi ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="empty-data">
                            Belum ada data ekspedisi.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="pagination">
        {{ $data->links() }}
    </div>

@endsection
