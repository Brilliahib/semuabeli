@extends('layouts.main')
@section('container')
    <section class="project" style="margin-top: 6rem;">
        <div class="container">
            <div class="heading-section text-center" style="margin-bottom: 6rem">
                <h2 class="fw-bold text-darkgray lh-base">{{$category->name}}</h2>
                <p class="font-base text-darkgray">Pilih template yang Anda inginkan dengan <br>referensi yang sangat menarik</p>
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
