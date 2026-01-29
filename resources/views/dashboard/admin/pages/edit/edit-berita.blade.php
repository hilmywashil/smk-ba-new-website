@extends('dashboard.admin.layouts.main')

@section('title', 'Edit Postingan - Admin SMK IT Baitul Aziz')

@section('content')

    <main class="nxl-container">
        <div class="nxl-content">

            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Kelola Konten</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.berita') }}">Postingan</a></li>
                        <li class="breadcrumb-item">Edit</li>
                    </ul>
                </div>
            </div>

            <div class="main-content">
                <div class="row">
                    <div class="col-12">
                        <div class="card stretch stretch-full">

                            <div class="card-header">
                                <h5 class="card-title">Edit Postingan</h5>
                            </div>

                            <div class="card-body p-0">
                                <div class="table-responsive">

                                    <form action="{{ route('admin.berita.update', $post->id) }}" method="POST"
                                        enctype="multipart/form-data" class="p-4">
                                        @csrf
                                        @method('PUT')

                                        {{-- Image --}}
                                        <div class="mb-3">
                                            <label class="form-label">Gambar</label>

                                            <input type="file" name="image" id="image" class="d-none" accept="image/*">

                                            <button type="button" class="btn btn-primary" id="btnUpload">
                                                    <i class="bi bi-upload me-2"></i> Upload Gambar Baru
                                                </button>

                                            @if($post->image)
                                                <img id="preview" src="{{ asset('storage/' . $post->image) }}"
                                                    class="img-fluid rounded mt-2" style="max-height:250px;">
                                            @else
                                                <img id="preview" class="img-fluid rounded mt-2 d-none"
                                                    style="max-height:250px;">
                                            @endif
                                        </div>


                                        {{-- Title --}}
                                        <div class="mb-3">
                                            <label class="form-label">Judul</label>
                                            <input type="text" name="title" id="title" class="form-control"
                                                value="{{ old('title', $post->title) }}">
                                        </div>

                                        {{-- Slug --}}
                                        <div class="mb-3">
                                            <label class="form-label">Slug</label>
                                            <input type="text" name="slug" id="slug" class="form-control"
                                                value="{{ old('slug', $post->slug) }}" readonly>
                                            <small class="text-muted">Slug di-generate otomatis</small>
                                        </div>

                                        {{-- Category --}}
                                        <div class="mb-3">
                                            <label class="form-label">Kategori</label>
                                            <select name="category" class="form-select form-select-sm">
                                                <option value="news" {{ $post->category == 'news' ? 'selected' : '' }}>
                                                    Berita
                                                </option>
                                                <option value="activities" {{ $post->category == 'activities' ? 'selected' : '' }}>
                                                    Kegiatan
                                                </option>
                                            </select>
                                        </div>

                                        {{-- Content --}}
                                        <div class="mb-3">
                                            <label class="form-label">Konten</label>
                                            <textarea name="content" id="editor" rows="6"
                                                class="form-control">{!! old('content', $post->content) !!}</textarea>
                                        </div>

                                        {{-- Status --}}
                                        <div class="mb-4">
                                            <label class="form-label">Status</label>
                                            <select name="status" class="form-select form-select-sm">
                                                <option value="draft" {{ $post->status == 'draft' ? 'selected' : '' }}>
                                                    Draf
                                                </option>
                                                <option value="published" {{ $post->status == 'published' ? 'selected' : '' }}>
                                                    Publikasi
                                                </option>
                                            </select>
                                        </div>

                                        {{-- Action --}}
                                        <div class="d-flex justify-content-end gap-2">
                                            <a href="{{ route('admin.berita') }}" class="btn btn-light">
                                                Batal
                                            </a>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="feather-save me-1"></i> Update
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

    {{-- Preview Image --}}
    <script>
        document.getElementById('image').addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (!file) return;

            const preview = document.getElementById('preview');
            preview.src = URL.createObjectURL(file);
            preview.classList.remove('d-none');
        });
    </script>

    {{-- Slug Generator --}}
    <script>
        document.getElementById('title').addEventListener('input', function () {
            const slug = this.value
                .toLowerCase()
                .trim()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-');

            document.getElementById('slug').value = slug;
        });
    </script>

@endsection