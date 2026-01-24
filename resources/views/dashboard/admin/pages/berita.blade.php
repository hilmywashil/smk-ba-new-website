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
                        <li class="breadcrumb-item">Berita & Kegiatan</li>
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
                                <a class="btn btn-md btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10"
                                    data-bs-auto-close="outside">
                                    <i class="feather-filter me-2"></i>
                                    <span>Filter</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Role" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Role">Role</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Team" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Team">Team</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Email"
                                                checked="checked">
                                            <label class="custom-control-label c-pointer" for="Email">Email</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Member"
                                                checked="checked">
                                            <label class="custom-control-label c-pointer" for="Member">Member</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Recommendation"
                                                checked="checked">
                                            <label class="custom-control-label c-pointer"
                                                for="Recommendation">Recommendation</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-plus me-3"></i>
                                        <span>Create New</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-filter me-3"></i>
                                        <span>Manage Filter</span>
                                    </a>
                                </div>
                            </div>
                            <a href="{{ route('admin.berita.create') }}" class="btn btn-md btn-primary">
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
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr class="border-b">
                                                <th scope="row">Judul</th>
                                                <th>Kategori</th>
                                                <th>Tanggal Dibuat</th>
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
                                                            <a href="javascript:void(0);">
                                                                <span class="d-block">{{ Str::limit($post->title, 30) }}</span>
                                                                <span
                                                                    class="fs-12 d-block fw-normal text-muted">{{ Str::limit($post->content, 20) }}
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-gray-200 text-dark">
                                                            {{ $post->category === 'news' ? 'Berita' : 'Kegiatan' }}
                                                        </span>
                                                    </td>

                                                    <td>{{ $post->created_at->format('d M Y') }}</td>
                                                    <td>
                                                        <span
                                                            class="badge bg-soft-success text-success">{{ Str::upper($post->status) }}</span>
                                                    </td>
                                                    <td class="text-end dropdown">
                                                        <a href="javascript:void(0);" data-bs-toggle="dropdown"
                                                            title="Option"><i class="feather-more-vertical"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="javascript:void(0);" class="dropdown-item"><i
                                                                    class="bi bi-pencil"></i>Edit</a>
                                                            <form action="{{ route('admin.berita.destroy', $post->id) }}"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item"
                                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                                                                    <i class="bi bi-trash"></i> Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center">
                                                        Belum ada berita atau kegiatan.
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);" class="active">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);">8</a></li>
                                    <li><a href="javascript:void(0);">9</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- [Leads] end -->
                    <!-- [Top Selling] start
                        <div class="col-xxl-4">
                            <div class="card stretch stretch-full">
                                <div class="card-header">
                                    <h5 class="card-title">Top Selling</h5>
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
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="hstack gap-3">
                                                            <div class="avatar-image avatar-lg rounded">
                                                                <img class="img-fluid" src="assets/images/gallery/1.png" alt="">
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0);" class="d-block">Headphones JBL</a>
                                                                <span class="fs-12 text-muted">Electronics </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$205</td>
                                                    <td class="text-end">5 sold</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="hstack gap-3">
                                                            <div class="avatar-image avatar-lg rounded">
                                                                <img class="img-fluid" src="assets/images/gallery/2.png" alt="">
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0);" class="d-block">Smart watch</a>
                                                                <span class="fs-12 text-muted">Electronics </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$550</td>
                                                    <td class="text-end">7 sold</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="hstack gap-3">
                                                            <div class="avatar-image avatar-lg rounded">
                                                                <img class="img-fluid" src="assets/images/gallery/3.png" alt="">
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0);" class="d-block">Hear Bud 202</a>
                                                                <span class="fs-12 text-muted">Electronics </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$350</td>
                                                    <td class="text-end">6 sold</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="hstack gap-3">
                                                            <div class="avatar-image avatar-lg rounded">
                                                                <img class="img-fluid" src="assets/images/gallery/4.png" alt="">
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0);" class="d-block">iPhone 14 Pro
                                                                    Max</a>
                                                                <span class="fs-12 text-muted">Electronics </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$600</td>
                                                    <td class="text-end">4 sold</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="hstack gap-3">
                                                            <div class="avatar-image avatar-lg rounded">
                                                                <img class="img-fluid" src="assets/images/gallery/5.png" alt="">
                                                            </div>
                                                            <div>
                                                                <a href="javascript:void(0);" class="d-block">Canon DSLR
                                                                    1230</a>
                                                                <span class="fs-12 text-muted">Electronics </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$920</td>
                                                    <td class="text-end">5 sold</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center">More
                                    Products</a>
                            </div>
                        </div> -->
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
@endsection