@extends('layouts.app')

@section('title', 'Berita dan Kegiatan - SMK IT Baitul Aziz')

@section('content')
    <main class="main">

        <!-- Blog Hero Section -->
        <section id="blog-hero" class="blog-hero section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="blog-grid">

                    @if ($latestPost)
                        <article class="blog-item featured" data-aos="fade-up">
                            <img src="{{ asset('storage/' . $latestPost->image) }}" class="img-fluid">

                            <div class="blog-content">
                                <div class="post-meta">
                                    <span class="date">{{ $latestPost->created_at->format('M. dS, Y') }}</span>
                                    <span class="category">{{ $latestPost->category === 'news' ? 'Berita' : 'Kegiatan' }}</span>
                                </div>

                                <h2 class="post-title">
                                    <a href="{{ route('posts.show', $latestPost->slug) }}">
                                        {{ $latestPost->title }}
                                    </a>
                                </h2>
                            </div>
                        </article>
                    @else
                        <p>No posts available.</p>
                    @endif

                    @forelse ($lastPost as $post)
                        <article class="blog-item" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="Blog Image" class="img-fluid">
                            <div class="blog-content">
                                <div class="post-meta">
                                    <span class="date">{{ $post->created_at->format('M. dS, Y') }}</span>
                                    <span class="category">{{ $post->category === 'news' ? 'Berita' : 'Kegiatan' }}</span>
                                </div>
                                <h3 class="post-title">
                                    <a href="{{ route('posts.show', $post->slug) }}"
                                        title="{{ $post->title }}">{{ $post->title }}</a>
                                </h3>
                            </div>
                        </article><!-- End Blog Item -->
                    @empty
                        <p>No additional posts available.</p>
                    @endforelse

                </div>

            </div>

        </section><!-- /Blog Hero Section -->

        <!-- Blog Posts Section -->
        <section id="blog-posts" class="blog-posts section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    @forelse ($otherPosts as $post)

                        <div class="col-lg-4">
                            <article class="position-relative h-100">

                                <div style="width: 100%; aspect-ratio: 16/9; overflow: hidden; position: relative;">
                                    <img src="{{ asset('storage/' . $post->image) }}"
                                        style="width: 100%; height: 100%; object-fit: cover; display: block;" alt="">
                                </div>


                                <div class="meta d-flex align-items-end">
                                    <span class="post-date"><span>{{ $post->created_at->format('d') }}</span>{{ $post->created_at->format('F') }}</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i> <span class="ps-2">{{ $post->author->name }}</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <span class="ps-2">{{ $post->category === 'news' ? 'Berita' : 'Kegiatan' }}</span>
                                    </div>
                                </div>

                                <div class="post-content d-flex flex-column">

                                    <h3 class="post-title">{{ $post->title }}</h3>
                                    <a href="{{ route('posts.show', $post->slug) }}" class="readmore stretched-link"><span>Selengkapnya</span><i
                                            class="bi bi-arrow-right"></i></a>

                                </div>

                            </article>
                        </div><!-- End post list item -->
                    @empty
                        <p>No more posts available.</p>
                    @endforelse

                </div>
            </div>

        </section><!-- /Blog Posts Section -->

        <!-- Pagination 2 Section -->
        @if($otherPosts->hasPages())
            <section id="pagination-2" class="pagination-2 section">
                <div class="container">
                    <nav class="d-flex justify-content-center" aria-label="Page navigation">
                        <ul class="pagination-list d-flex gap-1">

                            {{-- Previous --}}
                            <li class="{{ $otherPosts->onFirstPage() ? 'disabled' : '' }}">
                                <a href="{{ $otherPosts->previousPageUrl() ?? '#' }}" aria-label="Previous page">
                                    <i class="bi bi-arrow-left"></i>
                                    <span class="d-none d-sm-inline">Previous</span>
                                </a>
                            </li>

                            {{-- Loop halaman --}}
                            @foreach ($otherPosts->getUrlRange(1, $otherPosts->lastPage()) as $page => $url)
                                <li>
                                    <a href="{{ $url }}" class="{{ $page == $otherPosts->currentPage() ? 'active' : '' }}">
                                        {{ $page }}
                                    </a>
                                </li>
                            @endforeach

                            {{-- Next --}}
                            <li class="{{ $otherPosts->hasMorePages() ? '' : 'disabled' }}">
                                <a href="{{ $otherPosts->nextPageUrl() ?? '#' }}" aria-label="Next page">
                                    <span class="d-none d-sm-inline">Next</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </section>
        @endif

    </main>
@endsection