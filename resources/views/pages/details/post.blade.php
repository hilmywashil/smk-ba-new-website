@extends('layouts.app')

@section('title', $post->title . ' - SMK IT Baitul Aziz')

@section('content')
    <main class="main">

        <!-- Page Title -->
        <div class="page-title light-background">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">{{ $post->category == 'news' ? 'Berita' : 'Kegiatan' }}</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('posts') }}">Berita & Kegiatan</a></li>
                        <li class="current">Detail Berita</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Blog Details Section -->
        <section id="blog-details" class="blog-details section">
            <div class="container" data-aos="fade-up">

                <article class="article">
                    <div class="article-header">
                        <div class="meta-categories" data-aos="fade-up">
                            <a href="#" class="category">{{ $post->category == 'news' ? 'Berita' : 'Kegiatan' }}</a>
                        </div>

                        <h1 class="title" data-aos="fade-up" data-aos-delay="100">{{ $post->title }}</h1>

                        <div class="article-meta" data-aos="fade-up" data-aos-delay="200">
                            <div class="author">
                                <img src="{{ asset('assets/img/person/person-m-6.webp') }}" alt="Author" class="author-img">
                                <div class="author-info">
                                    <h4>{{ $post->author->name }}</h4>
                                    <span>{{ Str::ucfirst($post->author->role) }}</span>
                                </div>
                            </div>
                            <div class="post-info">
                                <span><i class="bi bi-calendar4-week"></i> {{ $post->created_at->format('j F Y') }}</span>
                                <span><i class="bi bi-tags"></i>Kategori:
                                    {{ $post->category == 'news' ? 'Berita' : 'Kegiatan' }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="article-featured-image" data-aos="zoom-in">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="UI Design Evolution" class="img-fluid">
                    </div>

                    <div class="article-wrapper">
                        <aside class="table-of-contents" data-aos="fade-left">
                            <h3>Berita & Kegiatan Terbaru</h3>
                            <nav>
                                <ul style="list-style:none; padding:0; margin:0;">
                                    @foreach ($recentPosts as $recentPost)
                                        <li style="display:flex; align-items:flex-start; margin-bottom:8px;">

                                            <a href="{{ route('posts.show', $recentPost->slug) }}"
                                                style="text-decoration:none; line-height:1.4; display:block; margin-bottom: 8px;"
                                                class="active">
                                                {{ Str::limit($recentPost->title, 50) }}
                                            </a>

                                        </li>
                                    @endforeach
                                </ul>
                            </nav>

                        </aside>

                        <div class="article-content">
                            <div class="content-section" id="introduction" data-aos="fade-up">
                                {!! $post->content !!}
                            </div>


                        </div>
                    </div>

                    <div class="article-footer" data-aos="fade-up">
                        <div class="share-article">
                            <h4>Bagikan Postingan Ini</h4>
                            <div class="share-buttons">
                                @php
                                    $url = urlencode(request()->fullUrl()); // URL post sekarang
                                    $title = urlencode($post->title);       // Judul post
                                @endphp

                                <!-- WhatsApp -->
                                <a href="https://api.whatsapp.com/send?text={{ $title }}%20{{ $url }}"
                                    class="share-button whatsapp" target="_blank">
                                    <i class="bi bi-whatsapp"></i>
                                    <span>Bagikan di WhatsApp</span>
                                </a>

                                <!-- Facebook -->
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}"
                                    class="share-button facebook" target="_blank">
                                    <i class="bi bi-facebook"></i>
                                    <span>Bagikan di Facebook</span>
                                </a>

                                <!-- X/Twitter -->
                                <a href="https://twitter.com/intent/tweet?url={{ $url }}&text={{ $title }}"
                                    class="share-button twitter" target="_blank">
                                    <i class="bi bi-twitter-x"></i>
                                    <span>Bagikan di X</span>
                                </a>

                                <!-- LinkedIn -->
                                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ $url }}"
                                    class="share-button linkedin" target="_blank">
                                    <i class="bi bi-linkedin"></i>
                                    <span>Bagikan di LinkedIn</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </article>

            </div>
        </section><!-- /Blog Details Section -->

    </main>
@endsection