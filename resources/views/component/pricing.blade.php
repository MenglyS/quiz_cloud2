@extends('layouts.master')

@section('content')
<div class="container-fluid bg-primary py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white pr-3" href="{{url('/')}}">FAQs</a>
                    <span class="text-white">|</span>
                    <a class="text-white px-3" href="{{url('/')}}">Help</a>
                    <span class="text-white">|</span>
                    <a class="text-white pl-3" href="{{url('/')}}">Support</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-3" href="{{url('/')}}">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-3" href="{{url('/')}}">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-3" href="{{url('/')}}">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-3" href="{{url('/')}}">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-3" href="{{url('/')}}">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="{{url('/')}}" class="navbar-brand">
                <h1 class="m-0 text-secondary"><span class="text-primary">DRY</span>ME</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="{{url('/')}}" class="nav-item nav-link">Home</a>
                    <a href="{{url('about')}}" class="nav-item nav-link">About</a>
                    <a href="{{url('service')}}" class="nav-item nav-link">Services</a>
                    <a href="{{url('pricing')}}" class="nav-item nav-link active">Pricing</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            <a href="{{url('blog')}}" class="dropdown-item">Blog Grid</a>
                            <a href="{{url('details')}}" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <a href="{{url('contact')}}" class="nav-item nav-link">Contact</a>
                    <a href="{{url('display')}}" class="nav-item nav-link">Contact_Lists</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="mb-4 mb-md-0 text-white">Pricing Plan</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="btn text-white" href="">Home</a>
                    <i class="fas fa-angle-right text-white"></i>
                    <a class="btn text-white disabled" href="">Pricing</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Start -->


<!-- Pricing Plan Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="container">
        <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Our Pricing Plan</h6>
        <h1 class="display-4 text-center mb-5">The Best Price</h1>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="bg-light text-center mb-2 pt-4">
                    <div class="d-inline-flex flex-column align-items-center justify-content-center bg-secondary rounded-circle shadow mt-2 mb-4" style="width: 200px; height: 200px; border: 15px solid #ffffff;">
                        <h3 class="text-white">Basic</h3>
                        <h1 class="display-4 text-white mb-0">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>49<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Mo</small>
                        </h1>
                    </div>
                    <div class="d-flex flex-column align-items-center py-3">
                        <p>HTML5 & CSS3</p>
                        <p>Bootstrap 4</p>
                        <p>Responsive Layout</p>
                        <p>Compatible With All Browsers</p>
                    </div>
                    <a href="" class="btn btn-secondary py-2 px-4">Signup Now</a>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="bg-light text-center mb-2 pt-4">
                    <div class="d-inline-flex flex-column align-items-center justify-content-center bg-primary rounded-circle shadow mt-2 mb-4" style="width: 200px; height: 200px; border: 15px solid #ffffff;">
                        <h3 class="text-white">Standard</h3>
                        <h1 class="display-4 text-white mb-0">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>99<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Mo</small>
                        </h1>
                    </div>
                    <div class="d-flex flex-column align-items-center py-3">
                        <p>HTML5 & CSS3</p>
                        <p>Bootstrap 4</p>
                        <p>Responsive Layout</p>
                        <p>Compatible With All Browsers</p>
                    </div>
                    <a href="" class="btn btn-primary py-2 px-4">Signup Now</a>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="bg-light text-center mb-2 pt-4">
                    <div class="d-inline-flex flex-column align-items-center justify-content-center bg-secondary rounded-circle shadow mt-2 mb-4" style="width: 200px; height: 200px; border: 15px solid #ffffff;">
                        <h3 class="text-white">Premium</h3>
                        <h1 class="display-4 text-white mb-0">
                            <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>149<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Mo</small>
                        </h1>
                    </div>
                    <div class="d-flex flex-column align-items-center py-3">
                        <p>HTML5 & CSS3</p>
                        <p>Bootstrap 4</p>
                        <p>Responsive Layout</p>
                        <p>Compatible With All Browsers</p>
                    </div>
                    <a href="" class="btn btn-secondary py-2 px-4">Signup Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing Plan End -->
@endsection