@extends('layouts.app')

@section('title', 'SMK IT Baitul Aziz')

@section('content')

    <main class="main">

        <section id="courses-hero" class="courses-hero section light-background">

            <div class="hero-content">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="hero-text">
                                <h1>SMK IT Baitul Aziz</h1>
                                <p>Membentuk Generasi Unggul yang Berakhlak Mulia dan Terampil di Bidang Teknologi
                                    Informasi.</p>

                                <!-- <div class="hero-stats">
                                                                                                    <div class="stat-item">
                                                                                                        <span class="number purecounter" data-purecounter-start="0"
                                                                                                            data-purecounter-end="100" data-purecounter-duration="2"></span>
                                                                                                        <span class="label">Siswa/i</span>
                                                                                                    </div>
                                                                                                    <div class="stat-item">
                                                                                                        <span class="number purecounter" data-purecounter-start="0"
                                                                                                            data-purecounter-end="1000" data-purecounter-duration="2"></span>
                                                                                                        <span class="label">Lebih Alumni</span>
                                                                                                    </div>
                                                                                                    <div class="stat-item">
                                                                                                        <span class="number purecounter" data-purecounter-start="0"
                                                                                                            data-purecounter-end="12" data-purecounter-duration="2"></span>
                                                                                                        <span class="label">Tahun Berdiri</span>
                                                                                                    </div>
                                                                                                </div> -->

                                <div class="hero-buttons">
                                    <a href="#courses" class="btn btn-primary">Tentang Kami</a>
                                    <a href="#about" class="btn btn-outline">Kontak Kami</a>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="hero-image">
                                <div class="main-image">
                                    <img src="{{ asset('assets/img/bg/paskibra.jpg') }}" alt="Online Learning"
                                        class="img-fluid">
                                </div>

                                <!-- <div class="floating-cards">
                                                                                        <div class="course-card" data-aos="fade-up" data-aos-delay="300">
                                                                                            <div class="card-icon">
                                                                                                <i class="bi bi-code-slash"></i>
                                                                                            </div>
                                                                                            <div class="card-content">
                                                                                                <h6>Rekayasa Perangkat Lunak</h6>
                                                                                                <span>Jurusan</span>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="course-card" data-aos="fade-up" data-aos-delay="400">
                                                                                            <div class="card-icon">
                                                                                                <i class="bi bi-palette"></i>
                                                                                            </div>
                                                                                            <div class="card-content">
                                                                                                <h6>UI/UX Design</h6>
                                                                                                <span>1,890 Students</span>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="course-card" data-aos="fade-up" data-aos-delay="500">
                                                                                            <div class="card-icon">
                                                                                                <i class="bi bi-joystick"></i>
                                                                                            </div>
                                                                                            <div class="card-content">
                                                                                                <h6>PPLG</h6>
                                                                                                <span>Jurusan</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="hero-background">
                <div class="bg-shapes">
                    <div class="shape shape-1"></div>
                    <div class="shape shape-2"></div>
                    <div class="shape shape-3"></div>
                </div>
            </div>

        </section><!-- /Courses Hero Section -->

        <!-- Principal Welcome Section -->
        <section id="principal-welcome" class="principal-welcome section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-center g-5">

                    <!-- Gambar Kepala Sekolah -->
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                        <div class="welcome-image text-center text-lg-start">
                            <img src="{{ asset('assets/img/kepala-sekolah.jpg') }}" alt="Kepala Sekolah"
                                class="img-fluid rounded-4" style="max-height: 600px; object-fit: cover; width: 100%;">
                        </div>
                    </div>

                    <!-- Teks Sambutan -->
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                        <div class="welcome-text">
                            <h2 class="mb-3 fw-bold">Sambutan Kepala Sekolah</h2>
                            <p>Assalamu'alaikum Warahmatullahi Wabarakatuh,</p>
                            <p style="text-align: justify;">
                                Berbagai penelitian menjelaskan bahwa
                                pendidikan sangat berpengaruh besar dalam mengubah
                                sikap mental dan perilaku manusia. Dengan pendidikan perilaku-perilaku negatif yang terjadi
                                di masyarakat dapat diminimalisir, baik pendidikan dengan jalur formal, seperti sekolah
                                ataupun nonformal seperti pesantren atau memadukan keduanya.</p>
                            <p style="text-align: justify;">
                                Surveipun membuktikan bahwa hal yang paling efektif untuk memajukan sebuah bangsa adalah
                                pendidikan yang menghasilkan SDM berkualitas, begitupun dunia industri yang begitu
                                kompetitif hanya memberi kesempatan berkarya bagi manusia yang unggul.

                            </p>
                            <p style="text-align: justify;">
                                Oleh karena itu SMK IT Baitul Aziz hadir dengan kurikulum Nasional yang dipadukan dengan
                                paradigma peradaban Robbaniyah untuk mencetak peserta didik yang siap menghadapi
                                perkembangan zaman dengan kompetisi kejuruan yang profesional dan akhlak yang Qur'ani.</p>
                            </p>
                            <div class="principal-signature mt-4 d-flex align-items-center">
                                <div class="signature-text">
                                    <h5 class="mb-0 fw-semibold">H.Feny Irfany Muhammad, ST., M.AP.</h5>
                                    <span>Kepala Sekolah SMK IT Baitul Aziz</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section><!-- /Principal Welcome Section -->


        <!-- Featured Instructors Section -->
        <section id="featured-instructors" class="featured-instructors section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Para Pengajar Kami</h2>
                <p>Yuk, kenalan dengan para Pengajar di SMK IT Baitul Aziz.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="instructor-card">
                            <div class="instructor-image">
                                <img src="assets/img/education/teacher-2.webp" class="img-fluid" alt="">
                                <div class="overlay-content">
                                    <div class="course-count">
                                        <i class="bi bi-play-circle"></i>
                                        <span>18 Courses</span>
                                    </div>
                                </div>
                            </div>
                            <div class="instructor-info">
                                <h5>Sarah Johnson</h5>
                                <p class="specialty">Web Development</p>
                                <p class="description">Nulla facilisi morbi tempus iaculis urna id volutpat lacus
                                    laoreet non curabitur gravida.</p>
                                <div class="action-buttons">
                                    <a href="#" class="btn-view">View Profile</a>
                                    <div class="social-links">
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
                        <div class="instructor-card">
                            <div class="instructor-image">
                                <img src="assets/img/education/teacher-7.webp" class="img-fluid" alt="">
                                <div class="overlay-content">
                                    <div class="course-count">
                                        <i class="bi bi-play-circle"></i>
                                        <span>24 Courses</span>
                                    </div>
                                </div>
                            </div>
                            <div class="instructor-info">
                                <h5>Michael Chen</h5>
                                <p class="specialty">Data Science</p>
                                <p class="description">Suspendisse potenti nullam ac tortor vitae purus faucibus ornare
                                    suspendisse sed nisi.</p>
                                <div class="action-buttons">
                                    <a href="#" class="btn-view">View Profile</a>
                                    <div class="social-links">
                                        <a href="#"><i class="bi bi-github"></i></a>
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            
        </section><!-- /Featured Instructors Section -->

        <!-- Course Categories Section -->
        <section id="course-categories" class="course-categories section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Ekstrakulikuler</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-4">

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="100">
                        <a href="courses.html" class="category-card category-tech">
                            <div class="category-icon">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h5>Computer Science</h5>
                            <span class="course-count">24 Courses</span>
                        </a>
                    </div><!-- End Category Item -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="150">
                        <a href="courses.html" class="category-card category-business">
                            <div class="category-icon">
                                <i class="bi bi-briefcase"></i>
                            </div>
                            <h5>Business</h5>
                            <span class="course-count">18 Courses</span>
                        </a>
                    </div><!-- End Category Item -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="200">
                        <a href="courses.html" class="category-card category-design">
                            <div class="category-icon">
                                <i class="bi bi-palette"></i>
                            </div>
                            <h5>Design</h5>
                            <span class="course-count">15 Courses</span>
                        </a>
                    </div><!-- End Category Item -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="250">
                        <a href="courses.html" class="category-card category-health">
                            <div class="category-icon">
                                <i class="bi bi-heart-pulse"></i>
                            </div>
                            <h5>Health &amp; Medical</h5>
                            <span class="course-count">12 Courses</span>
                        </a>
                    </div><!-- End Category Item -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="300">
                        <a href="courses.html" class="category-card category-language">
                            <div class="category-icon">
                                <i class="bi bi-globe"></i>
                            </div>
                            <h5>Languages</h5>
                            <span class="course-count">21 Courses</span>
                        </a>
                    </div><!-- End Category Item -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="350">
                        <a href="courses.html" class="category-card category-science">
                            <div class="category-icon">
                                <i class="bi bi-diagram-3"></i>
                            </div>
                            <h5>Science</h5>
                            <span class="course-count">16 Courses</span>
                        </a>
                    </div><!-- End Category Item -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="100">
                        <a href="courses.html" class="category-card category-marketing">
                            <div class="category-icon">
                                <i class="bi bi-megaphone"></i>
                            </div>
                            <h5>Marketing</h5>
                            <span class="course-count">19 Courses</span>
                        </a>
                    </div><!-- End Category Item -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="150">
                        <a href="courses.html" class="category-card category-finance">
                            <div class="category-icon">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <h5>Finance</h5>
                            <span class="course-count">14 Courses</span>
                        </a>
                    </div><!-- End Category Item -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="200">
                        <a href="courses.html" class="category-card category-photography">
                            <div class="category-icon">
                                <i class="bi bi-camera"></i>
                            </div>
                            <h5>Photography</h5>
                            <span class="course-count">11 Courses</span>
                        </a>
                    </div><!-- End Category Item -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="250">
                        <a href="courses.html" class="category-card category-music">
                            <div class="category-icon">
                                <i class="bi bi-music-note-beamed"></i>
                            </div>
                            <h5>Music</h5>
                            <span class="course-count">13 Courses</span>
                        </a>
                    </div><!-- End Category Item -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="300">
                        <a href="courses.html" class="category-card category-engineering">
                            <div class="category-icon">
                                <i class="bi bi-gear"></i>
                            </div>
                            <h5>Engineering</h5>
                            <span class="course-count">22 Courses</span>
                        </a>
                    </div><!-- End Category Item -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="350">
                        <a href="courses.html" class="category-card category-law">
                            <div class="category-icon">
                                <i class="bi bi-journal-text"></i>
                            </div>
                            <h5>Law &amp; Legal</h5>
                            <span class="course-count">9 Courses</span>
                        </a>
                    </div><!-- End Category Item -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="100">
                        <a href="courses.html" class="category-card category-culinary">
                            <div class="category-icon">
                                <i class="bi bi-cup-hot"></i>
                            </div>
                            <h5>Culinary Arts</h5>
                            <span class="course-count">8 Courses</span>
                        </a>
                    </div><!-- End Category Item -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="150">
                        <a href="courses.html" class="category-card category-sports">
                            <div class="category-icon">
                                <i class="bi bi-trophy"></i>
                            </div>
                            <h5>Sports &amp; Fitness</h5>
                            <span class="course-count">17 Courses</span>
                        </a>
                    </div><!-- End Category Item -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="200">
                        <a href="courses.html" class="category-card category-writing">
                            <div class="category-icon">
                                <i class="bi bi-pen"></i>
                            </div>
                            <h5>Writing</h5>
                            <span class="course-count">10 Courses</span>
                        </a>
                    </div><!-- End Category Item -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="250">
                        <a href="courses.html" class="category-card category-psychology">
                            <div class="category-icon">
                                <i class="bi bi-body-text"></i>
                            </div>
                            <h5>Psychology</h5>
                            <span class="course-count">12 Courses</span>
                        </a>
                    </div><!-- End Category Item -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="300">
                        <a href="courses.html" class="category-card category-environment">
                            <div class="category-icon">
                                <i class="bi bi-tree"></i>
                            </div>
                            <h5>Environment</h5>
                            <span class="course-count">7 Courses</span>
                        </a>
                    </div><!-- End Category Item -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="zoom-in" data-aos-delay="350">
                        <a href="courses.html" class="category-card category-communication">
                            <div class="category-icon">
                                <i class="bi bi-chat-dots"></i>
                            </div>
                            <h5>Communication</h5>
                            <span class="course-count">15 Courses</span>
                        </a>
                    </div><!-- End Category Item -->

                </div>

            </div>

        </section><!-- /Course Categories Section -->


        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Testimonials</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row">
                    <div class="col-12">
                        <div class="critic-reviews" data-aos="fade-up" data-aos-delay="300">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="critic-review">
                                        <div class="review-quote">"</div>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <p>Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia
                                            eget consectetur sed, convallis at tellus.</p>
                                        <div class="critic-info">
                                            <div class="critic-name">The New York Times</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="critic-review">
                                        <div class="review-quote">"</div>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-half"></i>
                                        </div>
                                        <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla quis
                                            lorem ut libero malesuada feugiat.</p>
                                        <div class="critic-info">
                                            <div class="critic-name">Washington Post</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="critic-review">
                                        <div class="review-quote">"</div>
                                        <div class="stars">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>
                                        <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit
                                            tortor eget felis porttitor volutpat.</p>
                                        <div class="critic-info">
                                            <div class="critic-name">The Guardian</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonials-container">
                            <div class="swiper testimonials-slider init-swiper" data-aos="fade-up" data-aos-delay="400">
                                <script type="application/json" class="swiper-config">
                                                                                          {
                                                                                            "loop": true,
                                                                                            "speed": 600,
                                                                                            "autoplay": {
                                                                                              "delay": 5000
                                                                                            },
                                                                                            "slidesPerView": 1,
                                                                                            "spaceBetween": 30,
                                                                                            "pagination": {
                                                                                              "el": ".swiper-pagination",
                                                                                              "type": "bullets",
                                                                                              "clickable": true
                                                                                            },
                                                                                            "breakpoints": {
                                                                                              "768": {
                                                                                                "slidesPerView": 2
                                                                                              },
                                                                                              "992": {
                                                                                                "slidesPerView": 3
                                                                                              }
                                                                                            }
                                                                                          }
                                                                                        </script>

                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <p>
                                                Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula
                                                elementum sed sit amet dui. Nulla quis lorem ut libero malesuada
                                                feugiat.
                                            </p>
                                            <div class="testimonial-profile">
                                                <img src="assets/img/person/person-f-1.webp" alt="Reviewer"
                                                    class="img-fluid rounded-circle">
                                                <div>
                                                    <h3>Jane Smith</h3>
                                                    <h4>Book Enthusiast</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End testimonial item -->

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <p>
                                                Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Cras
                                                ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in
                                                faucibus orci luctus.
                                            </p>
                                            <div class="testimonial-profile">
                                                <img src="assets/img/person/person-m-2.webp" alt="Reviewer"
                                                    class="img-fluid rounded-circle">
                                                <div>
                                                    <h3>Michael Johnson</h3>
                                                    <h4>Sci-Fi Blogger</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End testimonial item -->

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-half"></i>
                                            </div>
                                            <p>
                                                Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras
                                                ultricies ligula sed magna dictum porta. Donec sollicitudin molestie
                                                malesuada.
                                            </p>
                                            <div class="testimonial-profile">
                                                <img src="assets/img/person/person-f-3.webp" alt="Reviewer"
                                                    class="img-fluid rounded-circle">
                                                <div>
                                                    <h3>Emily Davis</h3>
                                                    <h4>Book Club President</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End testimonial item -->

                                    <div class="swiper-slide">
                                        <div class="testimonial-item">
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <p>
                                                Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur
                                                aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet,
                                                consectetur.
                                            </p>
                                            <div class="testimonial-profile">
                                                <img src="assets/img/person/person-m-4.webp" alt="Reviewer"
                                                    class="img-fluid rounded-circle">
                                                <div>
                                                    <h3>Robert Wilson</h3>
                                                    <h4>Literary Reviewer</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End testimonial item -->

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center" data-aos="fade-up">
                        <div class="overall-rating">
                            <div class="rating-number">4.8</div>
                            <div class="rating-stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <p>Based on 230+ reviews</p>
                            <div class="rating-platforms">
                                <span>Goodreads</span>
                                <span>Amazon</span>
                                <span>Barnes &amp; Noble</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Testimonials Section -->

        <!-- Recent Blog Posts Section -->
        <section id="recent-blog-posts" class="recent-blog-posts section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Berita & Kegiatan Terbaru</h2>
                <p>Ikuti perkembangan terkini dan informasi seputar kegiatan di SMK IT Baitul Aziz.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    @forelse($recentBlog as $post)
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="card">
                                <div class="card-top d-flex align-items-center">
                                    <img src="assets/img/person/person-f-12.webp" alt="Author" class="rounded-circle me-2">
                                    <span class="author-name">Oleh {{ $post->author->name }}</span>
                                    <span class="ms-auto likes">{{ $post->category == 'news' ? 'Berita' : 'Kegiatan' }}</span>
                                </div>
                                <div class="card-img-wrapper">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><a
                                            href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h5>
                                    <p class="card-text">
                                    <p class="card-text">
                                        {{ Str::limit(strip_tags($post->content), 100) }}
                                    </p>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End Post Item Card -->
                    @empty
                        <p>No recent blog posts available.</p>
                    @endforelse

                </div>

            </div>

        </section><!-- /Recent Blog Posts Section -->

        <!-- Cta Section -->
        <section id="cta" class="cta section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center">

                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                        <div class="cta-content">
                            <h2>Transform Your Future with Expert-Led Online Courses</h2>
                            <p>Join thousands of successful learners who have advanced their careers through our
                                comprehensive online education platform.</p>

                            <div class="features-list">
                                <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>20+ Expert instructors with industry experience</span>
                                </div>
                                <div class="feature-item" data-aos="fade-up" data-aos-delay="350">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Certificate of completion for every course</span>
                                </div>
                                <div class="feature-item" data-aos="fade-up" data-aos-delay="400">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>24/7 access to course materials and resources</span>
                                </div>
                                <div class="feature-item" data-aos="fade-up" data-aos-delay="450">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Interactive assignments and real-world projects</span>
                                </div>
                            </div>

                            <div class="cta-actions" data-aos="fade-up" data-aos-delay="500">
                                <a href="courses.html" class="btn btn-primary">Browse Courses</a>
                                <a href="enroll.html" class="btn btn-outline">Enroll Now</a>
                            </div>

                            <div class="stats-row" data-aos="fade-up" data-aos-delay="400">
                                <div class="stat-item">
                                    <h3><span data-purecounter-start="0" data-purecounter-end="15000"
                                            data-purecounter-duration="2" class="purecounter"></span>+</h3>
                                    <p>Students Enrolled</p>
                                </div>
                                <div class="stat-item">
                                    <h3><span data-purecounter-start="0" data-purecounter-end="150"
                                            data-purecounter-duration="2" class="purecounter"></span>+</h3>
                                    <p>Courses Available</p>
                                </div>
                                <div class="stat-item">
                                    <h3><span data-purecounter-start="0" data-purecounter-end="98"
                                            data-purecounter-duration="2" class="purecounter"></span>%</h3>
                                    <p>Success Rate</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                        <div class="cta-image">
                            <img src="assets/img/education/courses-4.webp" alt="Online Learning Platform" class="img-fluid">
                            <div class="floating-element student-card" data-aos="zoom-in" data-aos-delay="600">
                                <div class="card-content">
                                    <i class="bi bi-person-check-fill"></i>
                                    <div class="text">
                                        <span class="number">2,450</span>
                                        <span class="label">New Students This Month</span>
                                    </div>
                                </div>
                            </div>
                            <div class="floating-element course-card" data-aos="zoom-in" data-aos-delay="700">
                                <div class="card-content">
                                    <i class="bi bi-play-circle-fill"></i>
                                    <div class="text">
                                        <span class="number">50+</span>
                                        <span class="label">Hours of Content</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Cta Section -->

    </main>
@endsection