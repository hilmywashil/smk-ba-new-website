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
                                            <label for="search" class="form-label fs-12 mb-1">Judul</label>
                                            <input type="text" name="search" id="search"
                                                class="form-control form-control-sm" placeholder="Cari postingan..."
                                                value="{{ request('search') }}">
                                        </div>

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
                                                <th>Gambar</th>
                                                <th scope="row">Judul</th>
                                                <th>Kategori</th>
                                                <th>Tanggal Dibuat</th>
                                                <th>Terakhir Di Update</th>
                                                <th>Status</th>
                                                <th class="text-end">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($posts as $post)
                                                <tr>
                                                    <td class="align-middle">
                                                        <img src="{{ asset('storage/' . $post->image) }}"
                                                            alt="{{ $post->title }}" class="rounded object-fit-cover" width="48"
                                                            height="48" role="button" data-bs-toggle="modal"
                                                            data-bs-target="#imagePreviewModal"
                                                            data-image="{{ asset('storage/' . $post->image) }}">
                                                    </td>

                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <a href="{{ route('posts.show', $post->slug) }}" target="_blank"
                                                                data-bs-toggle="tooltip" title="{{ $post->title }}">
                                                                <span
                                                                    class="d-block">{{ Str::limit(strip_tags($post->title), 40) }}</span>
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
                                                            class="badge                                                                                                                                                                                            {{ $post->status === 'published' ? 'bg-soft-success text-success' : 'bg-gray-200 text-dark' }}">
                                                            {{ $post->status === 'published' ? 'PUBLIKASI' : 'DRAF' }}
                                                        </span>
                                                    </td>
                                                    <td class="text-end">
                                                        <div class="d-inline-flex gap-2">
                                                            <a href="{{ route('admin.berita.edit', $post->id) }}"
                                                                class="btn btn-sm btn-warning">
                                                                <i class="bi bi-pencil"></i>
                                                            </a>

                                                            <button type="button" class="btn btn-sm btn-danger btn-delete"
                                                                data-bs-toggle="modal" data-bs-target="#deleteModal"
                                                                data-url="{{ route('admin.berita.destroy', $post->id) }}"
                                                                data-title="{{ $post->title }}">

                                                                <i class="bi bi-trash"></i>
                                                            </button>

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
    <div class="modal fade" id="imagePreviewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <img id="previewImage" src="" alt="Preview" class="w-100 object-fit-contain">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger">
                        <i class="bi bi-exclamation-triangle me-2"></i>
                        KONFIRMASI HAPUS
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <p class="mb-0">
                        "<strong id="deletePostTitle"></strong>"
                    <p>akan dihapus. Anda yakin?</p>
                    </p>
                    <small class="text-muted">Tindakan ini tidak bisa dibatalkan.</small>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Batal
                    </button>

                    <form id="deleteForm" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            Ya, Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection