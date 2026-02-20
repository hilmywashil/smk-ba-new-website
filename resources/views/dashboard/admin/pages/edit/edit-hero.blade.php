@extends('dashboard.admin.layouts.main')

@section('title', isset($hero) ? 'Edit Hero - Admin SMK IT Baitul Aziz' : 'Tambah Hero - Admin SMK IT Baitul Aziz')

@section('content')

    <main class="nxl-container">
        <div class="nxl-content">

            <!-- Page Header -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Kelola Konten</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Hero Section</a></li>
                        <li class="breadcrumb-item">{{ isset($hero) ? 'Edit' : 'Tambah' }}</li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <div class="row">
                    <div class="col-12">
                        <div class="card stretch stretch-full">

                            <div class="card-header">
                                <h5 class="card-title">{{ isset($hero) ? 'Edit Hero Section' : 'Tambah Hero Section' }}</h5>
                            </div>

                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">

                                    <form
                                        action="{{ isset($hero) ? route('admin.hero.update', $hero->id) : route('admin.hero.store') }}"
                                        method="POST" enctype="multipart/form-data" class="p-4">
                                        @csrf
                                        @if(isset($hero))
                                            @method('PUT')
                                        @endif

                                        {{-- Gambar --}}
                                        <div class="mb-3">
                                            <label class="form-label">Gambar</label>

                                            <div class="d-flex align-items-center gap-2 mb-2">
                                                <button type="button" class="btn btn-primary" id="btnUpload">
                                                    <i class="bi bi-upload me-2"></i> Upload Gambar
                                                </button>
                                                <span id="fileName" class="text-muted fs-12">
                                                    {{ isset($hero) && $hero->image ? basename($hero->image) : 'Belum ada file dipilih' }}
                                                </span>
                                            </div>

                                            <input type="file" name="image" id="image" class="d-none" accept="image/*">

                                            <img id="preview"
                                                src="{{ isset($hero) && $hero->image ? asset('storage/' . $hero->image) : '' }}"
                                                class="img-fluid rounded mt-3 {{ isset($hero) && $hero->image ? '' : 'd-none' }}"
                                                style="max-height: 250px;">
                                        </div>

                                        {{-- Title --}}
                                        <div class="mb-3">
                                            <label class="form-label">Judul</label>
                                            <input type="text" name="title" id="title" class="form-control"
                                                value="{{ old('title', $hero->title ?? '') }}"
                                                placeholder="Masukkan judul hero">
                                        </div>

                                        {{-- Subtitle --}}
                                        <div class="mb-3">
                                            <label class="form-label">Subtitle</label>
                                            <input type="text" name="subtitle" id="subtitle" class="form-control"
                                                value="{{ old('subtitle', $hero->subtitle ?? '') }}"
                                                placeholder="Masukkan subtitle hero">
                                        </div>

                                        {{-- Action --}}
                                        <div class="d-flex justify-content-end gap-2">
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal"
                                                data-bs-target="#cancelFormModal">
                                                Batal
                                            </button>

                                            <button type="submit" class="btn btn-primary">
                                                <i class="feather-save me-1"></i> {{ isset($hero) ? 'Update' : 'Simpan' }}
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    {{-- Modal Batal --}}
    <div class="modal fade" id="cancelFormModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-warning">
                        <i class="bi bi-exclamation-triangle me-2"></i> KONFIRMASI BATAL
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-2">Anda yakin ingin membatalkan?</p>
                    <small class="text-muted">Perubahan yang Anda lakukan tidak akan tersimpan.</small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <a href="{{ route('admin.home') }}" class="btn btn-warning">Ya, Batalkan</a>
                </div>
            </div>
        </div>
    </div>
@endsection