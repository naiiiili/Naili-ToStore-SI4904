
@extends('admin.layouts.app')

@section('title', 'Tambah Ekspedisi')

@section('content')

    <div class="page-header">
        <div>
            <h1>Tambah Ekspedisi</h1>
            <p>Tambahkan layanan ekspedisi baru ke ToStore.</p>
        </div>
    </div>

    <div class="form-container">
        <form action="{{ route('ekspedisi.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nama_ekspedisi">Nama Ekspedisi</label>
                <input type="text" id="nama_ekspedisi" name="nama_ekspedisi"
                    value="{{ old('nama_ekspedisi') }}"
                    placeholder="Contoh: JNE, J&T, SiCepat" required>
                @error('nama_ekspedisi')
                    <small class="error-message">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="layanan">Jenis Layanan</label>
                <select id="layanan" name="layanan" required>
                    <option value="">Pilih Layanan</option>
                    <option value="Reguler" {{ old('layanan') == 'Reguler' ? 'selected' : '' }}>Reguler</option>
                    <option value="Express" {{ old('layanan') == 'Express' ? 'selected' : '' }}>Express</option>
                </select>
                @error('layanan')
                    <small class="error-message">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="zona">Zona Pengiriman</label>
                <select id="zona" name="zona" required>
                    <option value="">Pilih Zona</option>
                    <option value="Jawa" {{ old('zona') == 'Jawa' ? 'selected' : '' }}>Jawa</option>
                    <option value="Bali" {{ old('zona') == 'Bali' ? 'selected' : '' }}>Bali</option>
                    <option value="Luar Jawa" {{ old('zona') == 'Luar Jawa' ? 'selected' : '' }}>Luar Jawa</option>
                </select>
                @error('zona')
                    <small class="error-message">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="tarif">Tarif Pengiriman (Rp)</label>
                <input type="number" id="tarif" name="tarif"
                    value="{{ old('tarif') }}"
                    placeholder="Contoh: 15000" min="0" required>
                @error('tarif')
                    <small class="error-message">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="estimasi">Estimasi Pengiriman</label>
                <input type="text" id="estimasi" name="estimasi"
                    value="{{ old('estimasi') }}"
                    placeholder="Contoh: 2-3 Hari" required>
                @error('estimasi')
                    <small class="error-message">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-actions">
                <a href="{{ route('ekspedisi.index') }}" class="btn-secondary">Kembali</a>
                <button type="submit" class="btn-primary">Simpan Data</button>
            </div>
        </form>
    </div>

@endsection
