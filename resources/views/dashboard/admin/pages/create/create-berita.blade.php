@extends('dashboard.admin.layouts.main')

@section('title', 'Berita & Kegiatan - Admin SMK IT Baitul Aziz')

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
                                <h5 class="card-title">Tambah Berita & Kegiatan</h5>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <form action="{{ route('admin.berita.store') }}" method="POST"
                                        enctype="multipart/form-data" class="p-4">
                                        @csrf

                                        {{-- Image --}}
                                        <div class="mb-3">
                                            <label class="form-label">Gambar</label>
                                            <input type="file" name="image" id="image" class="form-control mb-2"
                                                accept="image/*">

                                            <img id="preview" class="img-fluid rounded d-none" style="max-height: 250px;">
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
    <script>
        const MAX_SIZE = 5 * 1024 * 1024;

        const imageInput = document.getElementById('image');
        const preview = document.getElementById('preview');
        const submitBtn = document.querySelector('button[type="submit"]');

        imageInput.addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (!file) return;

            if (file.size > MAX_SIZE) {
                notyf.error('Ukuran gambar maksimal 5 MB');

                imageInput.value = '';
                preview.classList.add('d-none');
                submitBtn.disabled = true;
                return;
            }

            submitBtn.disabled = false;
            preview.src = URL.createObjectURL(file);
            preview.classList.remove('d-none');
        });

        document.getElementById('title').addEventListener('input', function () {
            const title = this.value;

            const slug = title
                .toLowerCase()
                .trim()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-');

            document.getElementById('slug').value = slug;
        });
    </script>

@endsection