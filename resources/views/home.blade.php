@extends('layouts.main')
@section('container')
    <section class="hero h-full d-flex align-items-center mb-4">
        <div class="container">
            <div class="row h-full align-items-center d-flex">
                <div class="col-lg-5">
                    <div class="title" style="margin-bottom: 2.5rem;">
                        <h5 class="text-green">#UntilYouFind</h5>
                        <h1 class="mb-3 fw-bolder text-darkgray lh-base">Design & Code Your Future Career
                        </h1>
                        <p class="text-gray font-semibig">Discover and pitch your projects with us to unlock new
                            opportunities
                            and excel in your creative journey.</p>
                    </div>
                    <div class="button-title d-flex gap-3">
                        <a href="" class="button fw-bold">See Project</a>
                        <a href="" class="button-secondary fw-bold">Panduan Kerja</a>
                    </div>
                </div>
                <div class="col-lg-7 d-flex justify-content-center">
                    <img src="{{ asset('img/banner_home.png') }}" loading="lazy" alt="" width="600px"
                        style="margin-bottom: 1rem;">
                </div>
            </div>
        </div>
    </section>

    <section class="category" style="margin-bottom: 6rem;">
        <div class="container">
            <div class="heading-section mb-4">
                <h5 class="text-green">Mau cari project apa?</h5>
                <h3 class="fw-bold text-darkgray lh-base">Cari Project <br>Berdasarkan Kategori</h3>
            </div>
            <div class="row">
                @foreach ($category as $category)
                    <div class="col-lg-3">
                        <div class="card border-0" style="border-radius: 24px;">
                            <a href="/{{ $category->slug }}" class="text-decoration-none">
                                <div class="category-details p-3">
                                    <div class="mb-4">
                                        <img src="{{ asset('storage/' . $category->icons) }}" loading="lazy" alt=""
                                            width="75px">
                                    </div>
                                    <div>
                                        <h5 class="fw-bold text-darkgray">{{ $category->name }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="project" style="margin-bottom: 6rem;">
        <div class="container">
            <div class="heading-section mb-4">
                <h5 class="text-green">Pilihan Template Favorit</h5>
                <h3 class="fw-bold text-darkgray lh-base">Cari Template <br>Project Favorit Anda</h3>
            </div>
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-lg-3 col-md-4">
                        <a href="/project/{{ $project->slug }}" class="text-decoration-none">
                            <div class="card border-0 card-project">
                                <img src="{{ asset('storage/' . $project->cover) }}" loading="lazy" alt=""
                                    class="img-fluid project-img" style="height: 200px; object-fit: cover">
                                <div class="project-details p-3">
                                    <h3 class="project-name line-clamp-mobile line-clamp fw-bold text-darkgray"
                                        style="display: -webkit-box;
                             -webkit-line-clamp: 1; 
                            -webkit-box-orient: vertical;
                            overflow: hidden; text-align:left">
                                        {{ $project->name }}</h3>
                                    <p class="text-darkgray">Rp {{ number_format($project->budget, 0, ',', '.') }}</p>
                                </div>
                                <div class="project-footer mb-3 d-flex gap-1 h-full align-items-center">
                                    <div class="star d-flex gap-1">
                                        @for ($i = 0; $i < 5; $i++)
                                            <img src="{{ asset('img/star.svg') }}" alt="" loading="lazy"
                                                width="20px">
                                        @endfor
                                    </div>
                                    <div>(5)</div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
