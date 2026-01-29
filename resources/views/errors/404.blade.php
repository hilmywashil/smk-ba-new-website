@extends('layouts.app')

@section('title', 'Halaman Tidak Ditemukan - SMK IT Baitul Aziz')

@section('content')

    <main class="main">

        <!-- Error 404 Section -->
        <section id="error-404" class="error-404 section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="error-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                            <div class="error-illustration">
                                <i class="bi bi-exclamation-triangle-fill"></i>
                                <div class="circle circle-1"></div>
                                <div class="circle circle-2"></div>
                                <div class="circle circle-3"></div>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                            <div class="error-content">
                                <span class="error-badge" data-aos="zoom-in" data-aos-delay="400">Error</span>
                                <h1 class="error-code" data-aos="fade-up" data-aos-delay="500">404</h1>
                                <h2 class="error-title" data-aos="fade-up" data-aos-delay="600">Halaman Tidak Ditemukan</h2>
                                <p class="error-description" data-aos="fade-up" data-aos-delay="700">
                                    Maaf, halaman yang Anda cari tidak dapat ditemukan. Mungkin telah dihapus, namanya
                                    diubah, atau sedang tidak tersedia.
                                </p>

                                <div class="error-actions" data-aos="fade-up" data-aos-delay="800">
                                    <a href="/" class="btn-home">
                                        <i class="bi bi-house-door"></i> Kembali ke Beranda
                                    </a>
                                    <a href="#" class="btn-help">
                                        <i class="bi bi-question-circle"></i> Bantuan
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Error 404 Section -->

    </main>
@endsection