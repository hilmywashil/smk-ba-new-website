@extends('dashboard.admin.layouts.main')

@section('title', 'Kelola Halaman Beranda - SMK IT Baitul Aziz')

@section('content')
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Widgets</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Tables</li>
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
                            <a href="javascript:void(0);" class="btn btn-md btn-primary">
                                <i class="feather-plus me-2"></i>
                                <span>Add widget</span>
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
                    <div class="col-6">
                        <div class="card stretch stretch-full shadow-sm">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Bagian Hero</h5>
                            </div>

                            <div class="card-body d-flex justify-content-center align-items-center py-4">
                                @if($hero)
                                    <div class="text-center">
                                        <div class="mb-3 position-relative" style="max-width: 300px; margin:0 auto;">
                                            <img src="{{ asset('storage/' . $hero->image) }}"
                                                class="img-fluid rounded shadow-sm"
                                                style="max-height: 250px; object-fit: cover; width:100%;">
                                            <span class="badge bg-primary position-absolute top-0 start-0 m-2">Gambar
                                                Utama</span>
                                        </div>
                                        <h5 class="fw-bold">{{ $hero->title }}</h5>
                                        <p class="text-muted" data-bs-toggle="tooltip" title="{{ $hero->subtitle }}">{{ Str::limit($hero->subtitle, 50) }}</p>


                                        <div class="d-flex justify-content-center gap-2 mt-2">
                                            <a href="{{ route('admin.hero.edit', $hero->id) }}" class="btn btn-primary btn-sm">
                                                <i class="feather-edit me-1"></i> Edit Hero
                                            </a>

                                            <form action="{{ route('admin.hero.destroy', $hero->id) }}" method="POST"
                                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus hero ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="feather-trash-2 me-1"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                @else
                                    <div class="text-center py-4">
                                        <p class="mb-3 text-muted">Data tidak tersedia</p>
                                        <a href="{{ route('admin.hero.create') }}" class="btn btn-primary">
                                            <i class="feather-plus me-1"></i> Tambah Hero
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>
                    <!-- [Leads] end -->

                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </main>
@endsection