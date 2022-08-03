<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SMK INDONESIA YOGYAKARTA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- My CSS -->
        {{-- <link rel="stylesheet" href="style.css"> --}}
        <!-- End CSS -->
       
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    <header class="header">
        <div class="header-inner">

        <!-- Navbar --> 
        <nav class="navbar navbar-expand-lg navbar-dark shadow- fixed-top" style="background-color:#1D509F;">
            <div class="container">
                <a class="navbar-brand-lg" href="{{'/'}}">
                    <img src="{{asset('img/logo/logo.svg')}}">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto fw-bold">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{'/'}}">Home</a>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Tentang SMF</a></li>
                        <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
                        <li><a class="dropdown-item" href="#">Daftar Guru</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Akademik
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                        <li><a class="dropdown-item" href="#">Agenda</a></li>
                        <li><a class="dropdown-item" href="#">Gallery</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Jurusan
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Farmasi</a></li>
                        <li><a class="dropdown-item" href="#">Kimia Industri</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Pendaftaran</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle bg-primary text-white rounded-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="">Login</span> 
                        </a>
                        @if (Route::has('login'))
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @auth
                            <a href="{{ url('/') }}" class="active ">Home</a>
                                @else
                                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                @if (Route::has('register'))
                                    <li><a class="dropdown-item" href="{{ route('register') }}">Registrasi</a></li>
                                @endif
                            @endauth
                        </ul>
                        @endif
                    </li>
                </ul>
              </div>
            </div>
        </nav>
        </div>
    </header>
        <!-- End Navbar -->

    <main>
         <!--- Carousel -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/slide-image/slide1.png" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block dark ">
                    <h1>Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/slide-image/slide2.png" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/slide-image/slide3.png" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <!--- End Carausel -->

        <!--- News -->
        <section id="berita">
            <div class="container">
                <div class="row text-center mt-5" style="font-family:'Abril Fatface';font-size:40px;">
                    <div class="col">
                        <p>Berita Sekolah</p>
                    </div>   
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-md-4 mb-4 text-center">
                        <div class="card">
                            <img src="img/news-image/news1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Study Group</h5>
                                <p class="card-text">Kerja kelompok adalah suatu metode mengajar dengan membagi siswa menjadi beberapa kelompok dan mereka bekerja sama dalam memecahkan masalah atau melaksanakan tugas tertentu dan berusaha mencapai tujuan pengajaran yang telah ditentukan oleh guru.</p>
                                <p class="card-text"><small><cite class="text-muted">Last updated 3 mins ago</cite></small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 text-center">
                        <div class="card">
                            <img src="img/news-image/news2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Vaksin</h5>
                                <p class="card-text">Vaksin merupakan antigen (mikroorganisma) yang diinaktivasi atau dilemahkan yang bila diberikan kepada orang yang sehat untuk menimbulkan antibodi spesifik terhadap mikroorganisma tersebut, sehingga bila kemudian terpapar, akan kebal dan tidak terserang penyakit.</p>
                                <p class="card-text"><small><cite class="text-muted">Last updated 3 mins ago</cite></small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 text-center">
                        <div class="card">
                            <img src="img/news-image/news1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Study Group</h5>
                                <p class="card-text">Kerja kelompok adalah suatu metode mengajar dengan membagi siswa menjadi beberapa kelompok dan mereka bekerja sama dalam memecahkan masalah atau melaksanakan tugas tertentu dan berusaha mencapai tujuan pengajaran yang telah ditentukan oleh guru.</p>
                                <p class="card-text"><small><cite class="text-muted">Last updated 3 mins ago</cite></small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-md-4 mb-4 text-center">
                        <div class="card">
                            <img src="img/news-image/news2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Vaksin</h5>
                                <p class="card-text">Vaksin merupakan antigen (mikroorganisma) yang diinaktivasi atau dilemahkan yang bila diberikan kepada orang yang sehat untuk menimbulkan antibodi spesifik terhadap mikroorganisma tersebut, sehingga bila kemudian terpapar, akan kebal dan tidak terserang penyakit.</p>
                                <p class="card-text"><small><cite class="text-muted">Last updated 3 mins ago</cite></small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 text-center">
                        <div class="card">
                            <img src="img/news-image/news1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Study Group</h5>
                                <p class="card-text">Kerja kelompok adalah suatu metode mengajar dengan membagi siswa menjadi beberapa kelompok dan mereka bekerja sama dalam memecahkan masalah atau melaksanakan tugas tertentu dan berusaha mencapai tujuan pengajaran yang telah ditentukan oleh guru.</p>
                                <p class="card-text"><small><cite class="text-muted">Last updated 3 mins ago</cite></small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 text-center">
                        <div class="card">
                            <img src="img/news-image/news2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Vaksin</h5>
                                <p class="card-text">Vaksin merupakan antigen (mikroorganisma) yang diinaktivasi atau dilemahkan yang bila diberikan kepada orang yang sehat untuk menimbulkan antibodi spesifik terhadap mikroorganisma tersebut, sehingga bila kemudian terpapar, akan kebal dan tidak terserang penyakit.</p>
                                <p class="card-text"><small><cite class="text-muted">Last updated 3 mins ago</cite></small></p>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
        </section>
        <!--- End News -->
        <section id="pengumuman">
            <div class="container">
                <div class="row text-center mt-5" style="font-family:'Abril Fatface';font-size:40px;">
                    <div class="col">
                        <p>Pengumuman Sekolah</p>
                    </div>   
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-md-4 mb-4 text-center" >
                        <div class="card" style="background-color: #F8FAFE">
                            <div class="card-body text-center">
                                <div class="card-header">
                                    <h5 class="card-title">PELAKSAAN PTS KELAS 10-FARMASI</h5>
                                  </div>
                              <p class="card-text">UTS adalah singkatan dari Ujian Tengah Semester, yang diselenggarakan pada pertengahan semester di tiap perguruan tinggi ataupun di tiap sekolah.</p>
                              <p class="card-text"><small><cite class="text-muted">Last updated 3 mins ago</cite></small></p>
                              <a href="#" class="btn btn-primary">Selengkapnya &raquo; </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4 text-center">
                        <div class="card" style="background-color: #F8FAFE">
                            <div class="card-body text-center">
                                <div class="card-header">
                                    <h5 class="card-title">PELAKSAAN PTS KELAS 11-FARMASI </h5>
                                  </div>
                              <p class="card-text">UTS adalah singkatan dari Ujian Tengah Semester, yang diselenggarakan pada pertengahan semester di tiap perguruan tinggi ataupun di tiap sekolah.</p>
                              <p class="card-text"><small><cite class="text-muted">Last updated 3 mins ago</cite></small></p>
                              <a href="#" class="btn btn-primary">Selengkapnya &raquo;</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4 text-center">
                        <div class="card" style="background-color: #F8FAFE">
                            <div class="card-body text-center">
                                <div class="card-header">
                                    <h5 class="card-title">PELAKSAAN PTS KELAS 10-KIMIA INDUSTRI </h5>
                                  </div>
                              <p class="card-text">UTS adalah singkatan dari Ujian Tengah Semester, yang diselenggarakan pada pertengahan semester di tiap perguruan tinggi ataupun di tiap sekolah.</p>
                              <p class="card-text"><small><cite class="text-muted">Last updated 3 mins ago</cite></small></p>
                              <a href="#" class="btn btn-primary">Selengkapnya &raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-3">
                    <div class="col-md-4 mb-4 text-center">
                        <div class="card" style="background-color: #F8FAFE">
                            <div class="card-body text-center">
                                <div class="card-header">
                                    <h5 class="card-title">PELAKSAAN PTS KELAS 10-FARMASI </h5>
                                  </div>
                              <p class="card-text">UTS adalah singkatan dari Ujian Tengah Semester, yang diselenggarakan pada pertengahan semester di tiap perguruan tinggi ataupun di tiap sekolah.</p>
                              <p class="card-text"><small><cite class="text-muted">Last updated 3 mins ago</cite></small></p>
                              <a href="#" class="btn btn-primary">Selengkapnya &raquo;</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4 text-center">
                        <div class="card" style="background-color: #F8FAFE">
                            <div class="card-body text-center">
                                <div class="card-header">
                                    <h5 class="card-title">PELAKSAAN PTS KELAS 11-FARMASI</h5>
                                  </div>
                              <p class="card-text">UTS adalah singkatan dari Ujian Tengah Semester, yang diselenggarakan pada pertengahan semester di tiap perguruan tinggi ataupun di tiap sekolah.</p>
                              <p class="card-text"><small><cite class="text-muted">Last updated 3 mins ago</cite></small></p>
                              <a href="#" class="btn btn-primary">Selengkapnya &raquo;</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4 text-center">
                        <div class="card" style="background-color: #F8FAFE">
                            <div class="card-body text-center">
                                <div class="card-header">
                                    <h5 class="card-title">PELAKSAAN PTS KELAS 10-KIMIA INDUSTRI </h5>
                                  </div>
                              <p class="card-text">UTS adalah singkatan dari Ujian Tengah Semester, yang diselenggarakan pada pertengahan semester di tiap perguruan tinggi ataupun di tiap sekolah.</p>
                              <p class="card-text"><small><cite class="text-muted">Last updated 3 mins ago</cite></small></p>
                              <a href="#" class="btn btn-primary">Selengkapnya &raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </main>
       
    </body>
</html>
