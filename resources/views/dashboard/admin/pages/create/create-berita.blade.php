@extends('dashboard.admin.layouts.main')

@section('title', 'Tambah Postingan - Admin SMK IT Baitul Aziz')

@section('content')

    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Kelola Konten</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.berita') }}">Postingan</a></li>
                        <li class="breadcrumb-item">Tambah</li>
                    </ul>
                </div>
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <!-- [Leads] start -->
                    <div class="col-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Tambah Postingan</h5>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <form action="{{ route('admin.berita.store') }}" method="POST"
                                        enctype="multipart/form-data" class="p-4">
                                        @csrf

                                        {{-- Image --}}
                                        <div class="mb-3">
                                            <label class="form-label">Gambar</label>

                                            <div class="d-flex align-items-center gap-2">
                                                <button type="button" class="btn btn-primary" id="btnUpload">
                                                    <i class="bi bi-upload me-2"></i> Upload Gambar
                                                </button>

                                                <span id="fileName" class="text-muted fs-12">
                                                    Belum ada file dipilih
                                                </span>
                                            </div>

                                            <input type="file" name="image" id="image" class="d-none" accept="image/*">

                                            <img id="preview" class="img-fluid rounded d-none mt-3"
                                                style="max-height: 250px;">
                                        </div>


                                        {{-- Title --}}
                                        <div class="mb-3">
                                            <label class="form-label">Judul</label>
                                            <input type="text" name="title" id="title" class="form-control"
                                                placeholder="Masukkan judul berita / kegiatan">
                                        </div>

                                        {{-- Slug --}}
                                        <div class="mb-3">
                                            <label class="form-label">Slug</label>
                                            <input type="text" name="slug" id="slug" class="form-control"
                                                placeholder="judul-berita" readonly>
                                            <small class="text-muted">Slug di-Generate Otomatis</small>
                                        </div>

                                        {{-- Category --}}
                                        <div class="mb-3">
                                            <label class="form-label">Kategori</label>
                                            <select name="category" class="form-select form-select-sm">
                                                <option value="">Pilih Kategori</option>
                                                <option value="news">Berita</option>
                                                <option value="activities">Kegiatan</option>
                                            </select>
                                        </div>

                                        {{-- Content --}}
                                        <div class="mb-3">
                                            <label class="form-label">Konten</label>
                                            <textarea name="content" id="editor" rows="6" class="form-control"
                                                placeholder="Isi berita atau kegiatan"></textarea>
                                        </div>

                                        {{-- Status --}}
                                        <div class="mb-4">
                                            <label class="form-label">Status</label>
                                            <select name="status" class="form-select form-select-sm">
                                                <option value="draft">Draf</option>
                                                <option value="published">Publikasi</option>
                                            </select>
                                        </div>

                                        {{-- Action --}}
                                        <div class="d-flex justify-content-end gap-2">
                                            <a href="{{ route('admin.berita') }}" class="btn btn-light">
                                                Batal
                                            </a>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="feather-save me-1"></i> Simpan
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- [Leads] end -->
                </div>
            </div>
        </div>
    </main>

@endsection