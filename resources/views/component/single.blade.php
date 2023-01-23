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
                    <a href="{{url('pricing')}}" class="nav-item nav-link">Pricing</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Pages</a>
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
<!-- Page Header Start -->
<div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="mb-4 mb-md-0 text-white">Detail Page</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="btn text-white" href="">Home</a>
                    <i class="fas fa-angle-right text-white"></i>
                    <a class="btn text-white disabled" href="">Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Start -->


<!-- Detail Start -->
<div class="container py-5">
    <div class="row">
        <!-- Blog Detail Start -->
        <div class="col-lg-8">
            <div class="d-flex flex-column text-left mb-4">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Blog Detail Page</h6>
                <h1 class="mb-4 section-title">Diam dolor est ipsum clita lorem</h1>
                <div class="d-index-flex mb-2">
                    <span class="mr-3"><i class="fa fa-user text-primary"></i> Admin</span>
                    <span class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</span>
                    <span class="mr-3"><i class="fa fa-comments text-primary"></i> 15</span>
                </div>
            </div>

            <div class="mb-5">
                <img class="img-fluid w-100 mb-4" src="{{asset('/assets/')}}/img/carousel-1.jpg" alt="Image">
                <p>Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem. Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit gubergren dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea sea no sed dolores diam nonumy, gubergren sit stet no diam kasd vero.</p>
                <p>Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.</p>
                <h2 class="mb-4">Est dolor lorem et ea</h2>
                <img class="img-fluid w-50 float-left mr-4 mb-3" src="{{asset('/assets/')}}/img/blog-1.jpg" alt="Image">
                <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et duo tempor sea kasd clita ipsum et. Takimata kasd diam justo est eos erat aliquyam et ut. Ea sed sadipscing no justo et eos labore, gubergren ipsum magna dolor lorem dolore, elitr aliquyam takimata sea kasd dolores diam, amet et est accusam labore eirmod vero et voluptua. Amet labore clita duo et no. Rebum voluptua magna eos magna, justo gubergren labore sit voluptua eos.</p>
                <h3 class="mb-4">Est dolor lorem et ea</h3>
                <img class="img-fluid w-50 float-right ml-4 mb-3" src="{{asset('/assets/')}}/img/blog-2.jpg" alt="Image">
                <p>Diam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos. Invidunt sed diam dolores takimata dolor dolore dolore sit. Sit ipsum erat amet lorem et, magna sea at sed et eos. Accusam eirmod kasd lorem clita sanctus ut consetetur et. Et duo tempor sea kasd clita ipsum et. Takimata kasd diam justo est eos erat aliquyam et ut. Ea sed sadipscing no justo et eos labore, gubergren ipsum magna dolor lorem dolore, elitr aliquyam takimata sea kasd dolores diam, amet et est accusam labore eirmod vero et voluptua. Amet labore clita duo et no.</p>
            </div>

            <!-- Related Post Start -->
            <div class="mb-5">
                <h3 class="font-weight-bold mb-4">Related Post</h3>
                <div class="owl-carousel related-carousel position-relative">
                    <div class="bg-light">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{asset('/assets/')}}/img/blog-1.jpg" alt="">
                            <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                <h4 class="text-center text-white font-weight-medium mb-3">Dolor site amet clita kasd sanct ipsum</h4>
                                <div class="d-flex text-light">
                                    <small class="mr-2"><i class="fa fa-user text-secondary"></i> Admin</small>
                                    <small class="mr-2"><i class="fa fa-folder text-secondary"></i> Web Design</small>
                                    <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                                </div>
                            </a>
                        </div>
                        <p class="m-0 p-4">Amet dolores labore magna et amet tempor dolor et dolor. Et sit ipsum et eos rebum labore ea labore sea. Et sed elitr labore sed labore. Lorem et lorem amet sed sed kasd ipsum rebum</p>
                    </div>
                    <div class="bg-light">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{asset('/assets/')}}/img/blog-2.jpg" alt="">
                            <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                <h4 class="text-center text-white font-weight-medium mb-3">Dolor site amet clita kasd sanct ipsum</h4>
                                <div class="d-flex text-light">
                                    <small class="mr-2"><i class="fa fa-user text-secondary"></i> Admin</small>
                                    <small class="mr-2"><i class="fa fa-folder text-secondary"></i> Web Design</small>
                                    <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                                </div>
                            </a>
                        </div>
                        <p class="m-0 p-4">Amet dolores labore magna et amet tempor dolor et dolor. Et sit ipsum et eos rebum labore ea labore sea. Et sed elitr labore sed labore. Lorem et lorem amet sed sed kasd ipsum rebum</p>
                    </div>
                    <div class="bg-light">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{asset('/assets/')}}/img/blog-3.jpg" alt="">
                            <a href="" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                <h4 class="text-center text-white font-weight-medium mb-3">Dolor site amet clita kasd sanct ipsum</h4>
                                <div class="d-flex text-light">
                                    <small class="mr-2"><i class="fa fa-user text-secondary"></i> Admin</small>
                                    <small class="mr-2"><i class="fa fa-folder text-secondary"></i> Web Design</small>
                                    <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                                </div>
                            </a>
                        </div>
                        <p class="m-0 p-4">Amet dolores labore magna et amet tempor dolor et dolor. Et sit ipsum et eos rebum labore ea labore sea. Et sed elitr labore sed labore. Lorem et lorem amet sed sed kasd ipsum rebum</p>
                    </div>
                </div>
            </div>
            <!-- Related Post End -->

            <!-- Comment List Start -->
            <div class="mb-5">
                <h3 class="font-weight-bold mb-4">3 Comments</h3>
                <div class="media mb-4">
                    <img src="{{asset('/assets/')}}/img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                    <div class="media-body">
                        <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                        <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                        <button class="btn btn-sm btn-light">Reply</button>
                    </div>
                </div>
                <div class="media mb-4">
                    <img src="{{asset('/assets/')}}/img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                    <div class="media-body">
                        <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                        <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                        <button class="btn btn-sm btn-light">Reply</button>
                        <div class="media mt-4">
                            <img src="{{asset('/assets/')}}/img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                                <button class="btn btn-sm btn-light">Reply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Comment List End -->

            <!-- Comment Form Start -->
            <div class="bg-light p-5">
                <h3 class="font-weight-bold mb-4">Leave a comment</h3>
                <form>
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="url" class="form-control" id="website">
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-0">
                        <input type="submit" value="Leave Comment" class="btn btn-primary px-3">
                    </div>
                </form>
            </div>
            <!-- Comment Form End -->
        </div>
        <!-- Blog Detail End -->

        <!-- Sidebar Start -->
        <div class="col-lg-4 mt-5 mt-lg-0">
            <!-- Author Start -->
            <div class="d-flex flex-column text-center bg-secondary mb-5 py-5 px-4">
                <img class="rounded-circle bg-white shadow mx-auto mb-4" src="{{asset('/assets/')}}/img/user.jpg" style="width: 100px; height: 100px; padding: 12px;" alt="">
                <h3 class="text-primary mb-3">John Doe</h3>
                <p class="text-white m-0">Conset elitr erat vero dolor ipsum et diam, eos dolor lorem ipsum, ipsum ipsum sit no ut est. Guber ea ipsum erat kasd amet est elitr ea sit.</p>
            </div>
            <!-- Author End -->

            <!-- Search Form Start -->
            <div class="mb-5">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-lg" placeholder="Keyword">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary"><i
                                    class="fa fa-search"></i></span>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Search Form End -->

            <!-- Category Start -->
            <div class="mb-5">
                <h3 class="font-weight-bold mb-4">Categories</h3>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Web Design
                        <span class="badge badge-primary badge-pill">150</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Web Development
                        <span class="badge badge-primary badge-pill">131</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Online Marketing
                        <span class="badge badge-primary badge-pill">78</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Keyword Research
                        <span class="badge badge-primary badge-pill">56</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Email Marketing
                        <span class="badge badge-primary badge-pill">98</span>
                    </li>
                </ul>
            </div>
            <!-- Category End -->

            <!-- Image Start -->
            <div class="mb-5">
                <img src="{{asset('/assets/')}}/img/blog-1.jpg" alt="" class="img-fluid">
            </div>
            <!-- Image End -->

            <!-- Recent Post Start -->
            <div class="mb-5">
                <h3 class="font-weight-bold mb-4">Recent Post</h3>
                <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                    <img class="img-fluid" src="{{asset('/assets/')}}/img/blog-1.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="d-flex flex-column pl-3">
                        <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        <div class="d-flex">
                            <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                    <img class="img-fluid" src="{{asset('/assets/')}}/img/blog-2.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="d-flex flex-column pl-3">
                        <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        <div class="d-flex">
                            <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                    <img class="img-fluid" src="{{asset('/assets/')}}/img/blog-3.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="d-flex flex-column pl-3">
                        <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        <div class="d-flex">
                            <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                    <img class="img-fluid" src="{{asset('/assets/')}}/img/blog-1.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="d-flex flex-column pl-3">
                        <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        <div class="d-flex">
                            <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                    <img class="img-fluid" src="{{asset('/assets/')}}/img/blog-2.jpg" style="width: 80px; height: 80px;" alt="">
                    <div class="d-flex flex-column pl-3">
                        <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                        <div class="d-flex">
                            <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Post End -->

            <!-- Image Start -->
            <div class="mb-5">
                <img src="{{asset('/assets/')}}/img/blog-2.jpg" alt="" class="img-fluid">
            </div>
            <!-- Image End -->

            <!-- Tags Start -->
            <div class="mb-5">
                <h3 class="font-weight-bold mb-4">Tag Cloud</h3>
                <div class="d-flex flex-wrap m-n1">
                    <a href="" class="btn btn-outline-primary m-1">Design</a>
                    <a href="" class="btn btn-outline-primary m-1">Development</a>
                    <a href="" class="btn btn-outline-primary m-1">Marketing</a>
                    <a href="" class="btn btn-outline-primary m-1">SEO</a>
                    <a href="" class="btn btn-outline-primary m-1">Writing</a>
                    <a href="" class="btn btn-outline-primary m-1">Consulting</a>
                </div>
            </div>
            <!-- Tags End -->

            <!-- Image Start -->
            <div class="mb-5">
                <img src="{{asset('/assets/')}}/img/blog-3.jpg" alt="" class="img-fluid">
            </div>
            <!-- Image End -->

            <!-- Plain Text Start -->
            <div>
                <h3 class="font-weight-bold mb-4">Plain Text</h3>
                Aliquyam sed lorem stet diam dolor sed ut sit. Ut sanctus erat ea est aliquyam dolor et. Et no consetetur eos labore ea erat voluptua et. Et aliquyam dolore sed erat. Magna sanctus sed eos tempor rebum dolor, tempor takimata clita sit et elitr ut eirmod.
            </div>
            <!-- Plain Text End -->
        </div>
        <!-- Sidebar End -->
    </div>
</div>
<!-- Detail End -->
@endsection