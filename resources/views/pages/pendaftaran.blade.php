@extends('layouts.app')

@section('title', 'Form Pendaftaran - SMK IT Baitul Aziz')

@section('content')
    <main class="main">

        <!-- Enroll Section -->
        <section id="enroll" class="enroll section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="enrollment-form-wrapper">

                            <div class="enrollment-header text-center mb-5" data-aos="fade-up" data-aos-delay="200">
                                <h2>Formulir Pendaftaran PPDB</h2>
                                <p>Silahkan isi formulir pendaftaran dengan data yang sesuai dan benar. Data yang Anda
                                    berikan akan digunakan untuk proses seleksi.</p>
                            </div>

                            <form class="enrollment-form" data-aos="fade-up" data-aos-delay="300">

                                <hr class="my-4">

                                <h4 class="fw-bold">
                                    <i class="bi bi-person me-2 fs-4"></i>Data Diri Siswa
                                </h4>
                                <p class="mb-4">Masukkan data diri calon siswa sesuai dengan dokumen resmi.</p>
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nama_lengkap" class="form-label">Nama Lengkap *</label>
                                            <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control"
                                                required="" autocomplete="name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tempat_lahir" class="form-label">Tempat Lahir *</label>
                                            <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control"
                                                required="" autocomplete="tempat_lahir">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir *</label>
                                            <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control"
                                                required="" autocomplete="bday">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin *</label>
                                            <select id="jenis_kelamin" name="jenis_kelamin" class="form-select" required="">
                                                <option value="">Pilih</option>
                                                <option value="laki-laki">Laki-laki</option>
                                                <option value="perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="agama" class="form-label">Agama</label>
                                            <select id="agama" name="agama" class="form-select">
                                                <option value="">Pilih</option>
                                                <option value="islam">Islam</option>
                                                <option value="kristen">Kristen</option>
                                                <option value="katolik">Katolik</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="buddha">Buddha</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nik" class="form-label">NIK *</label>
                                            <input type="text" id="nik" name="nik" class="form-control" required
                                                inputmode="numeric" pattern="[0-9]*"
                                                oninput="this.value = this.value.replace(/[^0-9]/g, '')" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nisn" class="form-label">NISN *</label>
                                            <input type="text" id="nisn" name="nisn" class="form-control" required
                                                inputmode="numeric" pattern="[0-9]*"
                                                oninput="this.value = this.value.replace(/[^0-9]/g, '')" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label">Pesantren / Tidak</label>
                                            <div class="schedule-options">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="schedule"
                                                        id="weekdays" value="weekdays">
                                                    <label class="form-check-label" for="weekdays">
                                                        Ya
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="schedule"
                                                        id="weekends" value="weekends">
                                                    <label class="form-check-label" for="weekends">
                                                        Tidak
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="form-label">Email *</label>
                                            <input type="email" id="email" name="email" class="form-control" required=""
                                                autocomplete="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nomor_hp" class="form-label">Nomor HP *</label>
                                            <input type="text" id="nomor_hp" name="nomor_hp" class="form-control" required
                                                inputmode="numeric" pattern="[0-9]*"
                                                oninput="this.value = this.value.replace(/[^0-9]/g, '')" autocomplete="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="alamat_lengkap" class="form-label">Alamat Lengkap *</label>
                                            <textarea id="alamat_lengkap" name="alamat_lengkap" class="form-control"
                                                rows="3" required=""></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="rt" class="form-label">RT *</label>
                                            <input type="text" id="rt" name="rt" class="form-control" required
                                                inputmode="numeric" pattern="[0-9]*"
                                                oninput="this.value = this.value.replace(/[^0-9]/g, '')" autocomplete="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="rw" class="form-label">RW *</label>
                                            <input type="text" id="rw" name="rw" class="form-control" required
                                                inputmode="numeric" pattern="[0-9]*"
                                                oninput="this.value = this.value.replace(/[^0-9]/g, '')" autocomplete="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="kode_pos" class="form-label">Kode Pos *</label>
                                            <input type="text" id="kode_pos" name="kode_pos" class="form-control" required
                                                inputmode="numeric" pattern="[0-9]*"
                                                oninput="this.value = this.value.replace(/[^0-9]/g, '')" autocomplete="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="desa" class="form-label">Desa/Kelurahan *</label>
                                            <input type="text" id="desa" name="desa" class="form-control" required
                                                autocomplete="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="kecamatan" class="form-label">Kecamatan *</label>
                                            <input type="text" id="kecamatan" name="kecamatan" class="form-control" required
                                                autocomplete="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="kota" class="form-label">Kota *</label>
                                            <input type="text" id="kota" name="kota" class="form-control" required
                                                autocomplete="">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="provinsi" class="form-label">Provinsi *</label>
                                            <input type="text" id="provinsi" name="provinsi" class="form-control" required
                                                autocomplete="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="agreement-section">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="terms" name="terms"
                                                        required="">
                                                    <label class="form-check-label" for="terms">
                                                        Saya yakin formulir sudah terisi dengan baik dan benar *
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-enroll">
                                            <i class="bi bi-check-circle me-2"></i>
                                            Kirim Formulir Pendaftaran
                                        </button>
                                        <p class="enrollment-note mt-3">
                                            <i class="bi bi-shield-check"></i>
                                            Informasi Anda aman dan tidak akan pernah dibagikan kepada siapapun.
                                        </p>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div><!-- End Form Column -->

                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="enrollment-benefits" data-aos="fade-left" data-aos-delay="400">
                            <h3>Why Choose Our Courses?</h3>
                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <i class="bi bi-trophy"></i>
                                </div>
                                <div class="benefit-content">
                                    <h4>Expert Instructors</h4>
                                    <p>Learn from industry professionals with years of real-world experience</p>
                                </div>
                            </div><!-- End Benefit Item -->

                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <div class="benefit-content">
                                    <h4>Flexible Learning</h4>
                                    <p>Study at your own pace with 24/7 access to course materials</p>
                                </div>
                            </div><!-- End Benefit Item -->

                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <i class="bi bi-award"></i>
                                </div>
                                <div class="benefit-content">
                                    <h4>Certification</h4>
                                    <p>Earn industry-recognized certificates upon course completion</p>
                                </div>
                            </div><!-- End Benefit Item -->

                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="benefit-content">
                                    <h4>Community Support</h4>
                                    <p>Connect with fellow students and get help when you need it</p>
                                </div>
                            </div><!-- End Benefit Item -->

                            <div class="enrollment-stats mt-4">
                                <div class="stat-item">
                                    <span class="stat-number">15,000+</span>
                                    <span class="stat-label">Students Enrolled</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-number">98%</span>
                                    <span class="stat-label">Completion Rate</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-number">4.9/5</span>
                                    <span class="stat-label">Average Rating</span>
                                </div>
                            </div><!-- End Stats -->

                        </div>
                    </div><!-- End Benefits Column -->

                </div>

            </div>

        </section><!-- /Enroll Section -->

    </main>

@endsection