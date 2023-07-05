<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('vendor') }}/img/logokos2.jpg">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('vendor') }}/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{ asset('vendor') }}/css/style copy.css" />
    <link rel="stylesheet" href="{{ asset('vendor') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('vendor') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('vendor') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('vendor') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('vendor') }}/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('vendor') }}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('vendor') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('vendor') }}/css/gijgo.css">
    <link rel="stylesheet" href="{{ asset('vendor') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('vendor') }}/css/slicknav.css">
    <link rel="stylesheet" href="{{ asset('vendor') }}/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Kos Achmad</title>

    <style>
        #navigation li a {
            color: black;
        }

        #navigation li a:hover {
            color: #b6895b;
        }

        #navigation li ul li a {
            color: black;
        }
    </style>
</head>

<body>
    <!-- header-start -->
    <header>
        <div class="header-area">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-lg-8">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-phone"></i> +6281410540486</a></li>
                                    <li><a href="#"> <i class="fa fa-envelope"></i>muh.ibrahim00@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-4">
                            <div class="social_media_links d-none d-lg-block">
                                <a href="#">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area" style="background-color: whitesmoke;">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('vendor')}}/img/logokos2.jpg" alt="logo_kos"
                                        style="width: 25%; height: 20%; mix-blend-mode: darken;">
                                </a>
                                <a class="navbar-brand text-dark" href="#">Kos<span>Achmad</span>.</a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{ route('awal') }}">Home</a></li>
                                        <li><a href="{{ route('kosan') }}">Kosan</a></li>
                                        <li><a href="#">Kategori <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="#">Elit</a></li>
                                                <li><a href="#">Kampungan</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">About Us</a></li>
                                    </ul>
                                </nav>
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        @auth
                                        <a href="{{ route('logout') }}" class="login-btn"onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>    
                                        @else
                                            <a href="{{ route('login', ['redirect' => Request::url()]) }}" class="login-btn">Login & Register</a>
                                        @endauth
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    @yield('konten')

    <!-- footer_start  -->
    <footer class="footer pt-3">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo" style="margin-top: -6%;">
                                <img src="{{ asset('vendor')}}/img/logokos2.jpg" alt="logo_kos"
                                    style="width: 25%; height: 20%; mix-blend-mode: darken;">
                                <a class="navbar-brand text-dark" href="#">Kos<span>Achmad</span>.</a>
                            </div>
                            <div class="row">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.8796081276323!2d106.74676677402785!3d-6.409505993581249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e97a2990d25b%3A0x7b24e091d7f4967f!2sBerbagi%20Listrik%20Head%20Office!5e0!3m2!1sid!2sid!4v1685150463805!5m2!1sid!2sid"
                                    width="350" height="250" style="border:0; margin-top: -4%;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul class="links">
                                <li><a href="#">Kosan</a></li>
                                <li><a href="#">Kontrakan</a></li>
                                <li><a href="#">Vacation</a></li>
                                <li><a href="#">One Night</a></li>
                                <li><a href="#">Long Stay</a></li>
                                <li><a href="#">Entertainment</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contacts
                            </h3>
                            <div class="contacts">
                                <p>+62(814) 1054-0486 <br>
                                    muh.ibrahim00@gmail.com <br>
                                    Jl. Kalasan No.11A, Menteng, Jakarta Pusat 10320
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Kosan Terbaru
                            </h3>
                            <ul class="news_links">
                                @foreach(\App\Models\Kamar::orderBy("id_kamar","desc")->skip(0)->take(3)->get() as $index => $row)
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            @php
                            $gambarData = $row->gambar_satu;
                            $gambarBase64 = base64_encode($gambarData);
                            $gambarPath = 'data:image/jpeg;base64,' . $gambarBase64;
                            @endphp
                            <img src="{{ $gambarPath }}" alt="" style="aspect-ratio: 3/2;">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="{{ route('show',$row->id_kamar)}}">
                                            <h4>{{$row->nama}}
                                            </h4>
                                        </a>
                                        @if ($row->stok_kamar == 0)
                                            <span class="text-danger">Kamar Penuh</span>
                                        @else
                                            <span>Stok Kamar : {{$row->stok_kamar}}</span>
                                        @endif                     
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="bordered_1px "></div>
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                        <p>
                            Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | <a
                                class="navbar-brand text-dark" href="#"
                                style="font-size: 1rem;">Kos<span>Achmad</span>.</a>
                        </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->
    
    <!-- JS -->
    <script src="{{ asset('vendor')}}/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="{{ asset('vendor')}}/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('vendor')}}/js/popper.min.js"></script>
    <script src="{{ asset('vendor')}}/js/bootstrap.min.js"></script>
    <script src="{{ asset('vendor')}}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('vendor')}}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('vendor')}}/js/ajax-form.js"></script>
    <script src="{{ asset('vendor')}}/js/waypoints.min.js"></script>
    <script src="{{ asset('vendor')}}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('vendor')}}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('vendor')}}/js/scrollIt.js"></script>
    <script src="{{ asset('vendor')}}/js/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('vendor')}}/js/wow.min.js"></script>
    <script src="{{ asset('vendor')}}/js/nice-select.min.js"></script>
    <script src="{{ asset('vendor')}}/js/jquery.slicknav.min.js"></script>
    <script src="{{ asset('vendor')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('vendor')}}/js/plugins.js"></script>
    <script src="{{ asset('vendor')}}/js/gijgo.min.js"></script>
    <script src="{{ asset('vendor')}}/js/contact.js"></script>
    <script src="{{ asset('vendor')}}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('vendor')}}/js/jquery.form.js"></script>
    <script src="{{ asset('vendor')}}/js/jquery.validate.min.js"></script>
    <script src="{{ asset('vendor')}}/js/mail-script.js"></script>
    

    <script src="{{ asset('vendor')}}/js/main.js"></script>
</body>

</html>