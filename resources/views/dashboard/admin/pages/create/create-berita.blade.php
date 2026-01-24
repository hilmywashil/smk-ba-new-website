@extends('dashboard.admin.layouts.main')

@section('title', 'Berita & Kegiatan - Admin SMK IT Baitul Aziz')

@section('content')

    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Konten</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.berita') }}">Berita & Kegiatan</a></li>
                        <li class="breadcrumb-item">Tambah</li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                            <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <a href="javascript:void(0);" class="btn btn-md btn-primary">
                                <i class="feather-plus me-2"></i>
                                <span>Tambah Berita / Kegiatan</span>
                            </a>
                        </div>
                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <!-- [Leads] start -->
                    <div class="col-xxl-8">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Berita & Kegiatan</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger"
                                                data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning"
                                                data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success"
                                                data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm"
                                            data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i
                                                    class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i
                                                    class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i
                                                    class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i
                                                    class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i
                                                    class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i
                                                    class="feather-life-buoy"></i>Tips & Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data" class="p-4">
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
                                                <option value="">-- Pilih Kategori --</option>
                                                <option value="news">Berita</option>
                                                <option value="activities">Kegiatan</option>
                                            </select>
                                        </div>

                                        {{-- Content --}}
                                        <div class="mb-3">
                                            <label class="form-label">Konten</label>
                                            <textarea name="content" rows="6" class="form-control"
                                                placeholder="Isi berita atau kegiatan"></textarea>
                                        </div>

                                        {{-- Status --}}
                                        <div class="mb-4">
                                            <label class="form-label">Status</label>
                                            <select name="status" class="form-select form-select-sm">
                                                <option value="draft">Draft</option>
                                                <option value="published">Publish</option>
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
        document.getElementById('image').addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (!file) return;

            const preview = document.getElementById('preview');
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