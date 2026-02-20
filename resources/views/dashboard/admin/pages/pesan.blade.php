@extends('dashboard.admin.layouts.main')

@section('title', 'Berita & Kegiatan - Admin SMK IT Baitul Aziz')

@section('content')

    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Inbox</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Beranda</a></li>
                        <li class="breadcrumb-item">Pesan Masuk</li>
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
                                    <form action="{{ route('admin.messages') }}" method="GET"
                                        class="d-flex flex-column gap-2">

                                        <div class="mb-2">
                                            <label for="status" class="form-label fs-12 mb-1">Status</label>
                                            <select name="status" id="status" class="form-select form-select-sm">
                                                <option value="">Semua Status</option>
                                                <option value="unread" {{ request('status') == 'unread' ? 'selected' : '' }}>
                                                    Belum Dibaca</option>
                                                <option value="read" {{ request('status') == 'read' ? 'selected' : '' }}>Sudah
                                                    Dibaca</option>
                                            </select>
                                        </div>

                                        <div class="mb-2">
                                            <label for="sender" class="form-label fs-12 mb-1">Pengirim</label>
                                            <input type="text" name="sender" id="sender"
                                                class="form-control form-control-sm" value="{{ request('sender') }}"
                                                placeholder="Nama pengirim">
                                        </div>

                                        <div class="mb-2">
                                            <label for="from" class="form-label fs-12 mb-1">Dari Tanggal</label>
                                            <input type="date" name="from" id="from" class="form-control form-control-sm"
                                                value="{{ request('from') }}">
                                        </div>

                                        <div class="mb-2">
                                            <label for="to" class="form-label fs-12 mb-1">Sampai Tanggal</label>
                                            <input type="date" name="to" id="to" class="form-control form-control-sm"
                                                value="{{ request('to') }}">
                                        </div>

                                        <button type="submit" class="btn btn-md btn-primary mt-2">
                                            <i class="feather-filter me-1"></i>Filter
                                        </button>
                                        <a href="{{ route('admin.messages') }}"
                                            class="btn btn-md btn-secondary mt-1 text-center">
                                            <i class="feather-rotate-ccw me-1"></i> Reset
                                        </a>

                                    </form>
                                </div>

                            </div>

                            <!-- <a href="{{ route('admin.berita.create') }}" class="btn btn-md btn-primary">
                                <i class="feather-plus me-2"></i>
                                <span>Tambah Postingan</span>
                            </a> -->
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
                    <!-- [Support Inbox] start -->
                    <div class="col-12">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Pesan Masuk</h5>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama & Email Pengirim</th>
                                                <th scope="col">Subjek</th>
                                                <th scope="col">Pesan Singkat</th>
                                                <th scope="col">Dikirim</th>
                                                <th scope="col">Status</th>
                                                <th scope="col" class="text-end">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($messages as $msg)
                                                <tr>
                                                    <td>
                                                        <div class="hstack gap-3">
                                                            <div>
                                                                <a href="javascript:void(0);"
                                                                    class="d-block">{{ $msg->name }}</a>
                                                                <span class="fs-12 text-muted">{{ $msg->email }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span data-bs-toggle="tooltip" title="{{ $msg->subject }}">{{ Str::limit(strip_tags($msg->subject), 30) }}</span>
                                                    </td>
                                                    <td>
                                                        {{ Str::limit(strip_tags($msg->message), 30) }}
                                                    </td>
                                                    <td>
                                                        {{ $msg->created_at->diffForHumans() }}
                                                    </td>
                                                    <td>
                                                        <span
                                                            class="badge {{ $msg->status === 'read' ? 'bg-soft-success text-success' : 'bg-gray-200 text-dark' }}">
                                                            {{ $msg->status === 'read' ? 'DIBACA' : 'BELUM DIBACA' }}
                                                        </span>
                                                    </td>
                                                    <td  class="text-end">
                                                        <div class="d-inline-flex gap-2">
                                                            <a href="javascript:void(0);"
                                                                class="btn btn-sm btn-warning btn-view-message"
                                                                data-bs-toggle="modal" data-bs-target="#viewMessageModal"
                                                                data-id="{{ $msg->id }}" data-name="{{ $msg->name }}"
                                                                data-email="{{ $msg->email }}"
                                                                data-created="{{ $msg->created_at->format('d M Y H:i') }} - {{ $msg->created_at->diffForHumans() }}"
                                                                data-status="{{ $msg->status }}"
                                                                data-message="{{ $msg->message }}">
                                                                <i class="bi bi-eye"></i>
                                                            </a>

                                                            <button type="button" class="btn btn-sm btn-danger btn-delete"
                                                                data-bs-toggle="modal" data-bs-target="#deleteMessageModal"
                                                                data-url="{{ route('admin.messages.destroy', $msg->id) }}"
                                                                data-sender="{{ $msg->name }}">
                                                                <i class="bi bi-trash"></i>
                                                            </button>
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
                            @if ($messages->hasPages())
                                <div class="card-footer">
                                    <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">

                                        <li class="{{ $messages->onFirstPage() ? 'disabled' : '' }}">
                                            <a href="{{ $messages->previousPageUrl() ?? 'javascript:void(0);' }}">
                                                <i class="bi bi-arrow-left"></i>
                                            </a>
                                        </li>

                                        @foreach ($messages->links()->elements[0] as $page => $url)
                                            <li>
                                                <a href="{{ $url }}" class="{{ $page == $messages->currentPage() ? 'active' : '' }}">
                                                    {{ $page }}
                                                </a>
                                            </li>
                                        @endforeach

                                        <li class="{{ $messages->hasMorePages() ? '' : 'disabled' }}">
                                            <a href="{{ $messages->nextPageUrl() ?? 'javascript:void(0);' }}">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                    <!-- [Support Inbox] end -->
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
    <div class="modal fade" id="deleteMessageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger">
                        <i class="bi bi-exclamation-triangle me-2"></i>
                        KONFIRMASI HAPUS PESAN
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <p class="mb-0">
                        Pesan dari: "<strong id="deleteMessageSender"></strong>"
                    </p>
                    <p>akan dihapus. Anda yakin?</p>
                    <small class="text-muted">Tindakan ini tidak bisa dibatalkan.</small>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Batal
                    </button>

                    <form id="deleteMessageForm" method="POST">
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
    <div class="modal fade" id="viewMessageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Pesan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-unstyled mb-0">
                        <li><strong>Nama:</strong> <span id="msgName"></span></li>
                        <li><strong>Email:</strong> <span id="msgEmail"></span></li>
                        <li><strong>Dikirim:</strong> <span id="msgCreatedAt"></span></li>
                        <li><strong>Status:</strong> <span id="msgStatus"></span></li>
                        <li class="mt-2"><strong>Pesan:</strong>
                            <p id="msgContent"></p>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnCloseModal">Tutup &
                        Refresh</button>

                    <button type="button" class="btn btn-success" id="btnMarkRead" data-id="">
                        Baca Pesan
                    </button>

                    <button type="button" class="btn btn-warning" id="btnMarkUnread" data-id="" style="display: none;">
                        Tandai Belum Dibaca
                    </button>
                </div>


            </div>
        </div>
    </div>
@endsection