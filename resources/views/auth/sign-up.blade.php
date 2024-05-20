@extends('layouts.auth.main')
@section('container')
    <section class="auth overflow-x-hidden">
        <div class="row">
            <div class="col-lg-5 banner-auth-container">
                <img src="{{ asset('img/banner_login.png') }}" alt="" class="banner-auth" loading="lazy">
            </div>
            <div class="col-lg-7">
                <div class="container auth-form">
                    <div>
                        <img src="{{ asset('img/logo_semuabeli.png') }}" alt="" height="50px" class="mb-4">
                        <h2 class="fw-bold text-darkgray mb-3">Register</h2>
                        <p class="text-gray mb-4">Masukkan data yang valid untuk proses pendaftaran.</p>
                    </div>
                    <div>
                        <form class="card border-0 bg-white card-auth rounded-4" method="post" action="/register">
                            @csrf
                            <div class="card-body">
                                <div class="mb-4">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control rounded-pill bg-gray border-0"
                                        id="name" name="name" required>
                                </div>
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control rounded-pill bg-gray border-0"
                                        id="email" name="email" required>
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control rounded-pill bg-gray border-0"
                                        id="password" name="password" required>
                                </div>
                                <button type="submit" class="button-auth fw-bold border-0 mt-2">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
