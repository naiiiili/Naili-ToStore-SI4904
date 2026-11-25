
@extends('admin.layouts.app')

@section('title', 'Detail Ekspedisi')

@section('content')

    <div class="page-header">
        <div>
            <h1>Detail Ekspedisi</h1>
            <p>Informasi lengkap layanan ekspedisi.</p>
        </div>
    </div>

    <div class="detail-container">
        <div class="detail-item">
            <span>ID Ekspedisi</span>
            <strong>{{ $ekspedisi->id }}</strong>
        </div>

        <div class="detail-item">
            <span>Nama Ekspedisi</span>
            <strong>{{ $ekspedisi->nama_ekspedisi }}</strong>
        </div>

        <div class="detail-item">
            <span>Jenis Layanan</span>
            <strong>{{ $ekspedisi->layanan }}</strong>
        </div>

        <div class="detail-item">
            <span>Zona Pengiriman</span>
            <strong>{{ $ekspedisi->zona }}</strong>
        </div>

        <div class="detail-item">
            <span>Tarif Pengiriman</span>
            <strong>Rp{{ number_format($ekspedisi->tarif, 0, ',', '.') }}</strong>
        </div>

        <div class="detail-item">
            <span>Estimasi Pengiriman</span>
            <strong>{{ $ekspedisi->estimasi }}</strong>
        </div>

        <div class="detail-item">
            <span>Dibuat Pada</span>
            <strong>{{ $ekspedisi->created_at->format('d-m-Y H:i') }}</strong>
        </div>

        <div class="detail-item">
            <span>Terakhir Diperbarui</span>
            <strong>{{ $ekspedisi->updated_at->format('d-m-Y H:i') }}</strong>
        </div>

        <div class="form-actions">
            <a href="{{ route('ekspedisi.index') }}" class="btn-secondary">Kembali</a>
            <a href="{{ route('ekspedisi.edit', $ekspedisi->id) }}" class="btn-edit">Edit Data</a>
        </div>
    </div>

@endsection
