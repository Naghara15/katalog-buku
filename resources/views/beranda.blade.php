@extends('layouts.app')

@section('title', 'Beranda - Katalog Buku')

@section('content')
<div class="p-5 mb-4 bg-white rounded-3 shadow-sm border">
    <div class="container-fluid py-3">
        <h1 class="display-5 fw-bold text-primary">Selamat Datang di Katalog Buku</h1>
        <p class="col-md-8 fs-5 text-secondary mt-3">
            Sistem informasi katalog buku berbasis Laravel MVC. Jelajahi koleksi buku pilihan lengkap dengan informasi penulis, kategori, dan sinopsis.
        </p>
        <p class="text-muted">Saat ini tersedia <strong>{{ $totalBuku }} koleksi buku</strong> di dalam katalog.</p>
        <a href="{{ route('buku.index') }}" class="btn btn-primary btn-lg mt-2">Lihat Daftar Buku</a>
    </div>
</div>
@endsection