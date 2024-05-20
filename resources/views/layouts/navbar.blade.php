<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex gap-3 h-full align-items-center" href="/">
            <img src="{{ asset('img/logo.png') }}" alt="" height="50px">
        </a>
        <button class="navbar-toggler m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <!-- Ganti dengan SVG icon -->
            <div class="p-1 rounded" style="background-color: #efefef;">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#000"
                    class="bi bi-list fw-extrabold" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg>
            </div>
            <!-- /Ganti dengan SVG icon -->
        </button>
        <div class="collapse navbar-collapse list-navbar" id="navbarNav" style="margin-left: -6rem;">
            <ul class="navbar-nav ms-auto gap-4 text-darkgray">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('template') ? 'active' : '' }}" href="/template">Template</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('how-we-work') ? 'active' : '' }}" href="/how-we-work">Panduan Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('blog') ? 'active' : '' }}" href="/blog">Blog</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto contact">
                <div class="navbar-contact d-flex gap-3">
                    <a href="/login" class="button-secondary fw-bold">SignIn</a>
                    <a href="/register" class="button-secondary fw-bold">SignUp</a>
                </div>
            </ul>
        </div>
    </div>
</nav>

<script>
    let lastScrollTop = 0;
    let isScrolling;
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            navbar.classList.add('navbar-hidden');
        } else {
            navbar.classList.remove('navbar-hidden');
        }
        if (scrollTop === 0) {
            navbar.classList.add('navbar-top');
        } else {
            navbar.classList.remove('navbar-top');
        }

        lastScrollTop = scrollTop;
        window.clearTimeout(isScrolling);
        isScrolling = setTimeout(function() {
            navbar.classList.remove('navbar-hidden');
        }, 200);
    });

    if (window.pageYOffset === 0) {
        navbar.classList.add('navbar-top');
    }
</script>
