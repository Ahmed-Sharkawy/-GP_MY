@extends('frontend.layout.main')

@section('main')
    <!-- start fon -->
    <div class="fon" id="fon">
        <h2 class="main-title">الفنادق</h2>
        <div class="container">
            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ asset('frontend/img/fon1.jpg') }}" class="d-block w-100" alt="..." />
                        <div class="carousel-caption d-md-block">
                            <p>
                                نبذه مختصرة نبذه مختصرةنبذه مختصرةنبذه مختصرةنبذهنبذه مختصرة
                                نبذه مختصرةنبذه مختصرةنبذه مختصرةنبذهنبذه مختصرة نبذه
                                مختصرةنبذه مختصرةنبذه مختصرةنبذه
                            </p>
                            <a href="info.html">
                                <button type="button" class="btn btn-primary mb-4 c-btn">
                                    تفاصيل
                                </button></a>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('frontend/img/fon2.jpg') }}" class="d-block w-100" alt="..." />
                        <div class="carousel-caption d-md-block">
                            <p>
                                نبذه مختصرة نبذه مختصرةنبذه مختصرةنبذه مختصرةنبذهنبذه مختصرة
                                نبذه مختصرةنبذه مختصرةنبذه مختصرةنبذهنبذه مختصرة نبذه
                                مختصرةنبذه مختصرةنبذه مختصرةنبذه
                            </p>
                            <a href="info-2.html">
                                <button type="button" class="btn btn-primary mb-4 c-btn">
                                    تفاصيل
                                </button></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('frontend/img/fon3.jpg') }}" class="d-block w-100" alt="..." />
                        <div class="carousel-caption d-md-block">
                            <p>
                                نبذه مختصرةنبذه مختصرةنبذه مختصرةنبذهنبذه مختصرة نبذه
                                مختصرةنبذه مختصرةنبذه مختصرةنبذهنبذه مختصرة نبذه مختصرةنبذه
                                مختصرةنبذه مختصرةنبذه
                            </p>
                            <a href="info-3.html">
                                <button type="button" id="hotel-btn" class="btn btn-primary mb-4 c-btn">
                                    تفاصيل
                                </button></a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- end fon -->
    <div class="hotel">
        <h2 class="main-title">الفنادق المتاحه</h2>
        <div class="container">
            <div class="cards-wrapper">
                <div class="hotel-card">
                    <img src="{{ asset('frontend/img/fon1.jpg') }}" alt="" />
                    <h2>اسم الفندق</h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas
                        consectetur odit fugit rem maxime facere, modi ut nam doloribus!
                        At adipisci velit possimus asperiores illum odio, deleniti saepe
                        sapiente optio.
                    </p>
                    <div class="constrant">
                        <div class="icon">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <div class="show">
                            <button>Show More</button>
                        </div>
                    </div>
                </div>
                <div class="hotel-card">
                    <img src="{{ asset('frontend/img/fon1.jpg') }}" alt="" />
                    <h2>اسم الفندق</h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas
                        consectetur odit fugit rem maxime facere, modi ut nam doloribus!
                        At adipisci velit possimus asperiores illum odio, deleniti saepe
                        sapiente optio.
                    </p>
                    <div class="constrant">
                        <div class="icon">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <div class="show">
                            <button>Show More</button>
                        </div>
                    </div>
                </div>
                <div class="hotel-card">
                    <img src="{{ asset('frontend/img/fon1.jpg') }}" alt="" />
                    <h2>اسم الفندق</h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas
                        consectetur odit fugit rem maxime facere, modi ut nam doloribus!
                        At adipisci velit possimus asperiores illum odio, deleniti saepe
                        sapiente optio.
                    </p>
                    <div class="constrant">
                        <div class="icon">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <div class="show">
                            <button>Show More</button>
                        </div>
                    </div>
                </div>
                <div class="hotel-card">
                    <img src="{{ asset('frontend/img/fon1.jpg') }}" alt="" />
                    <h2>اسم الفندق</h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas
                        consectetur odit fugit rem maxime facere, modi ut nam doloribus!
                        At adipisci velit possimus asperiores illum odio, deleniti saepe
                        sapiente optio.
                    </p>
                    <div class="constrant">
                        <div class="icon">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <div class="show">
                            <button>Show More</button>
                        </div>
                    </div>
                </div>
                <div class="hotel-card">
                    <img src="{{ asset('frontend/img/fon1.jpg') }}" alt="" />
                    <h2>اسم الفندق</h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas
                        consectetur odit fugit rem maxime facere, modi ut nam doloribus!
                        At adipisci velit possimus asperiores illum odio, deleniti saepe
                        sapiente optio.
                    </p>
                    <div class="constrant">
                        <div class="icon">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <div class="show">
                            <button>Show More</button>
                        </div>
                    </div>
                </div>
                <div class="hotel-card">
                    <img src="{{ asset('frontend/img/fon1.jpg') }}" alt="" />
                    <h2>اسم الفندق</h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas
                        consectetur odit fugit rem maxime facere, modi ut nam doloribus!
                        At adipisci velit possimus asperiores illum odio, deleniti saepe
                        sapiente optio.
                    </p>
                    <div class="constrant">
                        <div class="icon">
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <div class="show">
                            <button>Show More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
