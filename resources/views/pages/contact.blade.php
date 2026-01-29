@extends('layouts.app')

@section('title', 'Kontak - SMK IT Baitul Aziz')

@section('content')

    <main class="main">

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-main-wrapper">
                    <div class="map-wrapper">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.382395260919!2d107.72494379999999!3d-7.0815902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c13516fe177f%3A0x3d23725c0d0c5d6c!2sSMK%20IT%20Baitul%20Aziz!5e0!3m2!1sid!2sid!4v1769591519017!5m2!1sid!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="contact-content">
                        <div class="contact-cards-container" data-aos="fade-up" data-aos-delay="300">
                            <div class="contact-card">
                                <div class="icon-box">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Lokasi</h4>
                                    <p>Neglasari, Kec. Majalaya, Kabupaten Bandung, Jawa Barat</p>
                                </div>
                            </div>

                            <div class="contact-card">
                                <div class="icon-box">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Email</h4>
                                    <p>info@smkitbaitulaziz.sch.id</p>
                                    <p>admin@smkitbaitulaziz.sch.id</p>
                                </div>
                            </div>

                            <div class="contact-card">
                                <div class="icon-box">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Telepon</h4>
                                    <p>+62 857 2149 3526 (Qony)</p>
                                    <p>+62 812 2502 7615 (Nuri)</p>
                                </div>
                            </div>

                            <div class="contact-card">
                                <div class="icon-box">
                                    <i class="bi bi-clock"></i>
                                </div>
                                <div class="contact-text">
                                    <h4>Buka</h4>
                                    <p>Senin - Jum'at: 07:00 - 17:00</p>
                                    <p>Sabtu & Minggu: Tutup</p>
                                </div>
                            </div>
                        </div>

                        <div class="contact-form-container" data-aos="fade-up" data-aos-delay="400">
                            <h3>Kontak Kami</h3>
                            <p>Ada pertanyaan atau ingin mengetahui informasi lebih lanjut? Jangan ragu untuk menghubungi
                                kami.</p>

                            <form action="{{ route('messages.store') }}" method="POST" class="php-email-form"
                                id="contactForm">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Nama" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" placeholder="Subjek" required>
                                </div>

                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Pesan"
                                        required></textarea>
                                </div>

                                <div class="my-3">
                                    <div class="loading" style="display:none;">Loading...</div>
                                    <div class="error-message" style="color:red;">
                                        @if($errors->any())
                                            {{ $errors->first() }}
                                        @endif
                                    </div>
                                    <div class="sent-message" style="color:green;">
                                        @if(session('success'))
                                            {{ session('success') }}
                                        @endif
                                    </div>
                                </div>

                                <div class="form-submit">
                                    <button type="submit">Send Message</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Contact Section -->

    </main>
@endsection