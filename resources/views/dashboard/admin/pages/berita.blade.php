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
                        <li class="breadcrumb-item">Postingan</li>
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
                            <div class="dropdown filter-dropdown">
                                <a class="btn btn-md btn-light-brand" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside">
                                    <i class="feather-filter me-2"></i>
                                    <span>Filter</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end p-3" style="min-width: 220px;">
                                    <form action="{{ route('admin.berita') }}" method="GET"
                                        class="d-flex flex-column gap-2">
                                        <div class="mb-2">
                                            <label for="category" class="form-label fs-12 mb-1">Kategori</label>
                                            <select name="category" id="category" class="form-select form-select-sm">
                                                <option value="">Semua Kategori</option>
                                                <option value="news" {{ request('category') == 'news' ? 'selected' : '' }}>
                                                    Berita</option>
                                                <option value="activities" {{ request('category') == 'activities' ? 'selected' : '' }}>Kegiatan</option>
                                            </select>
                                        </div>

                                        <div class="mb-2">
                                            <label for="status" class="form-label fs-12 mb-1">Status</label>
                                            <select name="status" id="status" class="form-select form-select-sm">
                                                <option value="">Semua Status</option>
                                                <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>
                                                    Draf</option>
                                                <option value="published" {{ request('status') == 'published' ? 'selected' : '' }}>Publikasi</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-md btn-primary mt-2">
                                            <i class="feather-filter me-1"></i>Filter
                                        </button>
                                        <a href="{{ route('admin.berita') }}"
                                            class="btn btn-md btn-secondary mt-1 text-center">
                                            <i class="feather-rotate-ccw me-1"></i> Reset
                                        </a>
                                    </form>
                                </div>
                            </div>

                            <a href="{{ route('admin.berita.create') }}" class="btn btn-md btn-primary">
                                <i class="feather-plus me-2"></i>
                                <span>Tambah Postingan</span>
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
                    <div class="col-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Postingan</h5>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr class="border-b">
                                                <th scope="row">Judul</th>
                                                <th>Kategori</th>
                                                <th>Tanggal Dibuat</th>
                                                <th>Terakhir Di Update</th>
                                                <th>Status</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($posts as $post)
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div class="avatar-image" style="width:80px; height:80px;">
                                                                <img src="{{ asset('storage/' . $post->image) }}"
                                                                    class="w-100 h-100 object-fit-cover rounded" alt="">
                                                            </div>
                                                            <a href="{{ route('posts.show', $post->slug) }}" target="_blank"
                                                                data-bs-toggle="tooltip" title="Lihat Postingan">
                                                                <span
                                                                    class="d-block">{{ Str::limit(strip_tags($post->title), 30) }}</span>
                                                                <span
                                                                    class="fs-12 d-block fw-normal text-muted">{{ Str::limit(strip_tags($post->content), 20) }}
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        {{ $post->category === 'news' ? 'Berita' : 'Kegiatan' }}
                                                    </td>

                                                    <td>{{ $post->created_at->format('d M Y') }}</td>
                                                    <td>{{ $post->updated_at->format('d M Y') }}</td>

                                                    <td>
                                                        <span
                                                            class="badge 
                                                                                    {{ $post->status === 'published' ? 'bg-soft-success text-success' : 'bg-gray-200 text-dark' }}">
                                                            {{ $post->status === 'published' ? 'PUBLIKASI' : 'DRAF' }}
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="d-inline-flex gap-2">
                                                            <a href="{{ route('admin.berita.edit', $post->id) }}"
                                                                class="btn btn-sm btn-warning" data-bs-toggle="tooltip"
                                                                title="Edit Postingan">
                                                                <i class="bi bi-pencil"></i>
                                                            </a>

                                                            <form action="{{ route('admin.berita.destroy', $post->id) }}"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger"
                                                                    data-bs-toggle="tooltip" title="Hapus Postingan"
                                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus postingan ini?')">
                                                                    <i class="bi bi-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>

                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center">
                                                        Tidak ada postingan ditemukan.
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @if ($posts->hasPages())
                                <div class="card-footer">
                                    <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">

                                        <li class="{{ $posts->onFirstPage() ? 'disabled' : '' }}">
                                            <a href="{{ $posts->previousPageUrl() ?? 'javascript:void(0);' }}">
                                                <i class="bi bi-arrow-left"></i>
                                            </a>
                                        </li>

                                        @foreach ($posts->links()->elements[0] as $page => $url)
                                            <li>
                                                <a href="{{ $url }}" class="{{ $page == $posts->currentPage() ? 'active' : '' }}">
                                                    {{ $page }}
                                                </a>
                                            </li>
                                        @endforeach

                                        <li class="{{ $posts->hasMorePages() ? '' : 'disabled' }}">
                                            <a href="{{ $posts->nextPageUrl() ?? 'javascript:void(0);' }}">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                    <!-- [Leads] end -->
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
@endsection