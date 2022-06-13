<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Website Ebooks</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link ref="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Fonts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="container">
        <!--------Thanh tiêu đề------------------->

        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/home') }}">EBOOKS</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            <!------------Menu------------->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <!-- Container wrapper -->
                <div class="container-fluid">
                    <!-- Toggle button -->
                    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <!-- Collapsible wrapper -->
                    <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
                        <!-- Left links -->
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('trang-chu')}}">Trang
                                    chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('all-ebook')}}">Ebooks</a>
                            </li>
                            <!-- Navbar dropdown -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Danh mục</a>
                                <!-- Dropdown menu -->
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        @foreach($danhmuc as $key => $danh)
                                        <a class="dropdown-item" href="{{url('danh-muc/'.$danh->slug_danhmuc)}}">{{$danh->tendanhmuc}}</a>
                                        @endforeach
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Left links -->
                    </div>
                    <!-- Collapsible wrapper -->
                </div>
                <!-- Container wrapper -->
            </nav>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <nav class="navbar navbar-light bg-light">
                            <div class="container-fluid">
                                <form autocomplete="off" method="POST" class="d-flex input-group w-auto" action="{{url('tim-kiem')}}">
                                    @csrf
                                    <input type="search" id="keywords" name="tukhoa" class="form-control rounded" placeholder="Tìm kiếm"
                                        aria-label="Search" aria-describedby="search-addon" />
                                    <div id="search_ajax">

                                    </div>
                                    <span class="input-group-text border-0" id="search-addon">
                                        <button class="btn btn-outline-success my-2 my-sm-0">Tìm kiếm</button>
                                    </span>
                                </form>
                            </div>
                        </nav>

                      
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                    
                </div>
                
            </nav>

           
                 
                 

            <div class="sNp9JN">
    <img src="{{asset('/image/bannerButton.jpg')}}" class="rounded mx-auto d-block" 

     style=
     "left:0;
     opacity:1;
     object-position:50% 50%;
     object-fit:cover;
     width:calc(100% + 1px);
     height:calc(100% + 1px)" 
     data-hook="image" ></div>       


            <!--------------Slides-------------------------->
            
            @yield('slide')
            <!-------------EBOOKS MỚI ----------------------->
            @yield('content')

            <!-- Footer -->
            <footer class="text-center text-lg-start bg-light text-muted">
                <!-- Section: Social media -->
                <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                    <!-- Left -->
                    
                    <!-- Right -->
                </section>
                <!-- Section: Social media -->

                <!-- Section: Links  -->
                <section class="">
                    <div class="container text-center text-md-start mt-5">
                        <!-- Grid row -->
                        <div class="row mt-3">
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                <!-- Content -->
                                <h3 class="text-uppercase fw-bold mb-4">
                                    <i class="fas fa-gem me-3"></i>NHÓM 9
                                </h3>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Sản phẩm
                                </h6>
                                <p>
                                    <a href="#!" class="text-reset">BEST SELLERS</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">RECOMMENDED EBOOKS</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">NEW EBOOKS</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Useful links
                                </h6>
                                <p>
                                    <a href="#!" class="text-reset">Pricing</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Settings</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Orders</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Help</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Liên hệ
                                </h6>
                                <p><i class="fas fa-home me-3"></i> VNUHCM-UIT, Vietnam</p>
                                <p>
                                    <i class="fas fa-envelope me-3"></i>
                                    teamebook10@gmail.com
                                </p>
                                <p><i class="fas fa-phone me-3"></i> 0239999999</p>
                                <p><i class="fas fa-print me-3"></i> 0239999999</p>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->

               
            </footer>
            <!-- Footer -->

            <script src="{{ asset('js/app.js') }}" defer></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
            <script src="https://kit.fontawesome.com/d102e101cd.js" crossorigin="anonymous"></script>

            <script type="text/javascript">
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            })
            </script>

            <script type="text/javascript">
                $('#keywords').keyup(function(){
                    var keywords = $(this).val();
                    if(keywords != '')
                    {
                        var _token = $('input[name="_token"]').val();
                        $.ajax({
                            url:"{{url('/timkiem-ajax')}}",
                            method:"POST",
                            data:{keywords:keywords, _token:_token},
                            success:function(data)
                            {
                                $('#search_ajax').fadeIn();
                                $('#search_ajax').html(data);
                            }
                        });
                    }
                    else
                    {
                        $('#search_ajax').fadeOut();
                    }
                });
                $(document).on('click', '.li_search_ajax', function()
                {
                    $('#keywords').val($(this).text());
                    $('#search_ajax').fadeOut();
                });
            </script>
            <footer class="text-center text-lg-start bg-light text-muted">
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                    <!-- Left -->
                    <div class="me-5 d-none d-lg-block">
                        <span>Phương thức thanh toán:</span>
                    </div>
                    <div>
                        <a href="" class="me-4 text-reset">
                        <span class="icon"><svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M30 10.3615C30 8.8731 28.7934 7.6665 27.305 7.6665H4.695C3.20659 7.6665 2 8.8731 2 10.3615V22.9715C2 24.4599 3.20659 25.6665 4.695 25.6665H27.305C28.7934 25.6665 30 24.4599 30 22.9715V10.3615ZM4.695 8.6665H27.305L27.4513 8.67273C28.3189 8.74688 29 9.47465 29 10.3615V22.9715L28.9938 23.1178C28.9196 23.9854 28.1919 24.6665 27.305 24.6665H4.695L4.54875 24.6603C3.6811 24.5861 3 23.8584 3 22.9715V10.3615L3.00622 10.2153C3.08037 9.3476 3.80815 8.6665 4.695 8.6665Z" fill="#052E5C"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.67528 20.2746L8.14557 21.881H7L9.205 15.6665H10.4582L12.6632 21.881H11.4918L10.9621 20.2746H8.67528ZM8.93368 19.4176H10.6994L9.83377 16.7647H9.80362L8.93368 19.4176ZM15.9535 21.881V16.6054H17.8097V15.6665H12.9862V16.6054H14.8467V21.881H15.9535ZM19.5711 17.471V21.881H18.5676V15.6665H19.8553L21.7589 20.4081H21.7933L23.6968 15.6665H24.9802V21.881H23.9811V17.471H23.9509L22.1551 21.881H21.3971L19.6012 17.471H19.5711Z" fill="#052E5C"></path><rect x="22" y="10.6665" width="5" height="3" rx="1" fill="#0B74E5"></rect></svg></span>  
                        
                    
            <span class="icon">
                <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="3" y="3" width="26" height="27">
                    <path d="M10.6917 3.6665L21.3083 3.6665C23.9829 3.6665 24.9528 3.94498 25.9305 4.4679C26.9083 4.99082 27.6757 5.75819 28.1986 6.73597C28.7215 7.71374 29 8.6836 29 11.3582V21.9748C29 24.6494 28.7215 25.6193 28.1986 26.597C27.6757 27.5748 26.9083 28.3422 25.9305 28.8651C24.9528 29.388 23.9829 29.6665 21.3083 29.6665H10.6917C8.0171 29.6665 7.04724 29.388 6.06946 28.8651C5.09169 28.3422 4.32432 27.5748 3.8014 26.597C3.27848 25.6193 3 24.6494 3 21.9748L3 11.3582C3 8.6836 3.27848 7.71374 3.8014 6.73597C4.32432 5.75819 5.09169 4.99082 6.06946 4.4679C7.04724 3.94498 8.0171 3.6665 10.6917 3.6665Z" fill="white"></path></mask>
                    <g mask="url(#mask0)"><path d="M10.6917 3.6665L21.3083 3.6665C23.9829 3.6665 24.9528 3.94498 25.9305 4.4679C26.9083 4.99082 27.6757 5.75819 28.1986 6.73597C28.7215 7.71374 29 8.6836 29 11.3582V21.9748C29 24.6494 28.7215 25.6193 28.1986 26.597C27.6757 27.5748 26.9083 28.3422 25.9305 28.8651C24.9528 29.388 23.9829 29.6665 21.3083 29.6665H10.6917C8.0171 29.6665 7.04724 29.388 6.06946 28.8651C5.09169 28.3422 4.32432 27.5748 3.8014 26.597C3.27848 25.6193 3 24.6494 3 21.9748L3 11.3582C3 8.6836 3.27848 7.71374 3.8014 6.73597C4.32432 5.75819 5.09169 4.99082 6.06946 4.4679C7.04724 3.94498 8.0171 3.6665 10.6917 3.6665Z" fill="#A50064"></path><path d="M21.1624 8.6665C19.0427 8.6665 17.3247 10.2823 17.3247 12.2755C17.3247 14.269 19.0427 15.8849 21.1624 15.8849C23.2819 15.8849 25 14.269 25 12.2755C25 10.2823 23.2819 8.6665 21.1624 8.6665ZM21.1624 13.8159C20.2632 13.8159 19.5325 13.1289 19.5325 12.2833C19.5325 11.4376 20.2632 10.7505 21.1624 10.7505C22.0615 10.7505 22.7922 11.4376 22.7922 12.2833C22.7922 13.1289 22.0615 13.8161 21.1624 13.8161V13.8159ZM16.2168 15.8927H14.0089V11.3546C14.0089 11.0148 13.7198 10.7433 13.3587 10.7433C12.9974 10.7433 12.7083 11.0148 12.7083 11.3546V15.8927H10.5006V11.3546C10.5006 11.0148 10.2117 10.7433 9.85038 10.7433C9.48906 10.7433 9.19994 11.0148 9.19994 11.3546V15.8927H7V11.3772C7 9.8822 8.29262 8.6665 9.88225 8.6665C10.5325 8.6665 11.1267 8.87041 11.6084 9.21008C12.1645 8.84769 12.7399 8.6665 13.3345 8.6665C14.9241 8.6665 16.2168 9.8822 16.2168 11.3772V15.8927ZM21.1624 17.4481C19.0427 17.4481 17.3247 19.0638 17.3247 21.0571C17.3247 23.0506 19.0427 24.6665 21.1624 24.6665C23.2819 24.6663 25 23.0504 25 21.0571C25 19.0638 23.2819 17.4479 21.1624 17.4479V17.4481ZM13.3345 17.4397C14.9241 17.4397 16.2168 18.6554 16.2168 20.1504V24.6659H14.0089V20.1279C14.0089 19.788 13.7198 19.5165 13.3587 19.5165C12.9974 19.5165 12.7083 19.788 12.7083 20.1279V24.6659H10.5006V20.1279C10.5006 19.788 10.2117 19.5165 9.85038 19.5165C9.48906 19.5165 9.19994 19.788 9.19994 20.1279V24.6659H7V20.1504C7 18.6554 8.29262 17.4397 9.88225 17.4397C10.5325 17.4397 11.1267 17.6437 11.6084 17.9833C12.1645 17.6209 12.7399 17.4397 13.3345 17.4397ZM21.1624 19.532C22.0615 19.532 22.7922 20.2191 22.7922 21.0649C22.7922 21.9104 22.0615 22.5975 21.1624 22.5975C20.2632 22.5975 19.5325 21.9104 19.5325 21.0649C19.5325 20.2191 20.2632 19.532 21.1624 19.532Z" fill="white"></path></g></svg></span>
            <span class="icon">
                <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.84552 7.93196L26.906 5.14548C25.8411 4.2238 24.4546 3.6665 22.9395 3.6665H9.06047C5.70863 3.6665 3 6.38153 3 9.72531V23.5934C3 26.6014 5.19406 29.1021 8.06707 29.5736L5.54426 11.0185C5.32985 9.5324 6.38043 8.14631 7.84552 7.93196Z" fill="#0068FF"></path><path d="M26.906 5.14589L7.84551 7.93237C6.38042 8.14671 5.33698 9.53995 5.55139 11.0261L8.06706 29.5812C8.38866 29.6312 8.72456 29.6669 9.06046 29.6669H22.9395C26.2914 29.6669 29 26.9519 29 23.6081V9.71857C28.9928 7.8895 28.1924 6.25334 26.906 5.14589Z" fill="white"></path>
                    <path d="M26.9059 5.14589L26.8416 5.16018C28.1495 6.30335 28.9356 7.98953 28.9356 9.72572V23.5795C28.9356 26.8947 26.2341 29.5955 22.918 29.5955H9.05328C8.73883 29.5955 8.37434 29.5597 8.05273 29.5097L8.05988 29.5812C8.39578 29.6383 8.71739 29.6669 9.04614 29.6669H22.8966C26.2556 29.6669 28.9857 26.9376 28.9857 23.5795V9.71857C28.9928 7.94666 28.2424 6.30335 26.9059 5.14589Z" fill="#B3B3B3"></path><path d="M19.1943 12.2909C19.0728 12.1695 18.937 12.1052 18.744 12.1052C18.4867 12.1052 18.2938 12.2266 18.1794 12.4838C17.9221 12.1766 17.5648 12.0337 17.1146 12.0337C16.5714 12.0337 16.1212 12.2481 15.7424 12.6482C15.3636 13.0769 15.1992 13.5699 15.1992 14.1629C15.1992 14.7559 15.385 15.2703 15.7424 15.6776C16.1212 16.1063 16.5714 16.292 17.1146 16.292C17.5648 16.292 17.915 16.1491 18.1794 15.8419C18.3009 16.0991 18.4867 16.2206 18.744 16.2206C18.9298 16.2206 19.0728 16.1491 19.1943 16.0348C19.3158 15.9205 19.3586 15.7776 19.3586 15.5847V12.6768C19.3801 12.5767 19.3086 12.4124 19.1943 12.2909ZM17.9079 14.9131C17.7649 15.0988 17.5505 15.1989 17.2932 15.1989C17.0359 15.1989 16.8215 15.106 16.6786 14.9131C16.5357 14.7273 16.4428 14.4844 16.4428 14.1772C16.4428 13.8914 16.5142 13.6556 16.6786 13.4698C16.8215 13.2841 17.0359 13.184 17.2932 13.184C17.5505 13.184 17.7649 13.2769 17.9079 13.4698C18.0508 13.6556 18.1437 13.8985 18.1437 14.1772C18.1223 14.463 18.0508 14.7345 17.9079 14.9131Z" fill="#0068FF"></path><path d="M20.7665 16.0699C20.645 16.1914 20.5092 16.2557 20.3163 16.2557C20.1305 16.2557 19.9875 16.1842 19.866 16.0699C19.7445 15.9485 19.7017 15.8127 19.7017 15.6198V10.4184C19.7017 10.254 19.7517 10.1111 19.866 9.96825C19.9875 9.84678 20.1233 9.78248 20.3163 9.78248C20.5021 9.78248 20.645 9.85393 20.7665 9.96825C20.888 10.0897 20.9309 10.2255 20.9309 10.4184V15.6198C20.9381 15.8127 20.888 15.9556 20.7665 16.0699Z" fill="#0068FF"></path><path d="M24.8544 12.6696C24.4542 12.2409 23.9539 12.0552 23.3393 12.0552C22.7246 12.0552 22.2315 12.2695 21.8241 12.6696C21.4454 13.0697 21.231 13.5913 21.231 14.2057C21.231 14.8202 21.4168 15.3132 21.8241 15.7419C22.2029 16.142 22.7246 16.3563 23.3393 16.3563C23.9539 16.3563 24.447 16.142 24.8544 15.7419C25.2332 15.3418 25.419 14.8202 25.419 14.2272C25.4547 13.5913 25.2689 13.0769 24.8544 12.6696ZM23.9825 14.9131C23.8395 15.0988 23.6251 15.1989 23.3678 15.1989C23.1106 15.1989 22.8962 15.106 22.7532 14.9131C22.6103 14.7273 22.5174 14.4844 22.5174 14.1772C22.5174 13.8914 22.5888 13.6556 22.7532 13.4698C22.8962 13.2841 23.1106 13.184 23.3678 13.184C23.6251 13.184 23.8395 13.2769 23.9825 13.4698C24.1254 13.6556 24.2183 13.8985 24.2183 14.1772C24.1969 14.463 24.1254 14.7345 23.9825 14.9131Z" fill="#0068FF"></path><path d="M14.5132 12.1976C14.942 11.6332 15.1779 11.2545 15.1779 11.0616C15.1779 10.6114 14.892 10.3757 14.3274 10.3757H11.3257C11.0899 10.3757 10.8969 10.4257 10.7826 10.54C10.6611 10.6615 10.5968 10.7972 10.5968 10.9687C10.5968 11.1544 10.6682 11.2973 10.7826 11.3974C10.9041 11.5188 11.0899 11.5617 11.3257 11.5617H13.384L10.7397 14.9626C10.5753 15.177 10.4824 15.3913 10.4824 15.5557C10.4824 16.0486 10.8112 16.2916 11.4758 16.2916H14.5704C15.0635 16.2916 15.3065 16.0772 15.3065 15.6771C15.3065 15.2484 15.0707 15.0627 14.5704 15.0627H12.2977L14.5132 12.1976Z" fill="#0068FF"></path><path d="M13.0412 19.5572H12.2622V21.1652H13.0412C13.277 21.1652 13.47 21.0938 13.6058 20.9294C13.7487 20.7865 13.8202 20.5721 13.8202 20.3648C13.8202 20.129 13.7487 19.936 13.6058 19.8002C13.47 19.6287 13.2842 19.5572 13.0412 19.5572Z" fill="#39B54A"></path><path d="M16.9001 21.0356C16.6642 21.0356 16.4713 21.1285 16.3355 21.2928C16.1926 21.4787 16.1211 21.6931 16.1211 21.9575C16.1211 22.2219 16.1926 22.4506 16.3355 22.6221C16.4784 22.808 16.6642 22.8794 16.9001 22.8794C17.1359 22.8794 17.3289 22.7865 17.4647 22.6221C17.6076 22.4363 17.6791 22.2219 17.6791 21.9575C17.6791 21.7002 17.6076 21.4644 17.4647 21.2928C17.3146 21.1285 17.1288 21.0356 16.9001 21.0356Z" fill="#39B54A"></path><path d="M22.3389 17.2631H11.147C10.7682 17.2631 10.4609 17.5703 10.4609 17.949V24.4937C10.4609 24.8723 10.7682 25.1796 11.147 25.1796H19.9662C19.8733 25.0867 19.8232 24.9938 19.8232 24.8723C19.8232 24.7795 19.8447 24.6866 19.8947 24.5651L20.3235 23.6434L19.1657 20.7569C19.1443 20.6855 19.1157 20.5926 19.1157 20.4997C19.1157 20.3782 19.1657 20.2639 19.2801 20.1925C19.373 20.0996 19.4945 20.0496 19.6088 20.0496C19.8661 20.0496 20.0376 20.171 20.1305 20.4283L20.8381 22.3931L21.5956 20.4283C21.6885 20.1925 21.8529 20.0496 22.1173 20.0496C22.2388 20.0496 22.3532 20.0996 22.4461 20.1925C22.539 20.2854 22.6105 20.3782 22.6105 20.4997C22.6105 20.5926 22.589 20.6855 22.5604 20.7569L20.8595 24.8938C20.8095 25.0152 20.7666 25.1081 20.6951 25.1796H22.3246C22.7034 25.1796 23.0107 24.8723 23.0107 24.4937V17.949C23.0178 17.5489 22.7034 17.2631 22.3389 17.2631ZM14.4417 21.6572C14.0844 21.9858 13.6413 22.1287 13.1195 22.1287H12.2691V23.3576C12.2691 23.5434 12.219 23.6863 12.1047 23.7863C12.0118 23.8792 11.8689 23.9507 11.7045 23.9507C11.5401 23.9507 11.3972 23.9006 11.3043 23.7863C11.2113 23.6934 11.1399 23.5291 11.1399 23.3576V19.1065C11.1399 18.7064 11.3257 18.5134 11.7331 18.5134H13.0838C13.6484 18.5134 14.0987 18.6778 14.4774 19.0064C14.8348 19.3351 15.0206 19.7852 15.0206 20.3068C15.0063 20.8927 14.8133 21.3214 14.4417 21.6572ZM18.8084 23.3362C18.8084 23.5005 18.7584 23.622 18.644 23.7363C18.5225 23.8578 18.4082 23.9006 18.2438 23.9006C18.0079 23.9006 17.815 23.7792 17.7006 23.5434C17.4648 23.8292 17.136 23.9721 16.7072 23.9721C16.2141 23.9721 15.7853 23.7863 15.4565 23.4076C15.1278 23.029 14.9348 22.5574 14.9348 21.993C14.9348 21.4285 15.0992 20.9784 15.4565 20.5783C15.7853 20.1996 16.2141 20.0139 16.7072 20.0139C17.136 20.0139 17.4433 20.1568 17.7006 20.4425C17.8221 20.2068 17.9865 20.0853 18.2438 20.0853C18.4082 20.0853 18.5511 20.1353 18.644 20.2496C18.7655 20.3711 18.8084 20.4854 18.8084 20.6497V23.3362Z" fill="#39B54A"></path></svg></span>
            </a>
                </section>
                    
                    
                <!-- Section: Social media -->
                <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                    <!-- Left -->
                    <div class="me-5 d-none d-lg-block">
                        <span>Kết nối với chúng tôi trên các mạng xã hội:</span>
                    </div>
                    <!-- Left -->

                    <!-- Right -->
                    <div>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-instagram"></i>
                        </a>
                        
                        
                    </div>
                    <!-- Right -->
                    
                </section>
                <!-- Section: Social media -->                 
                    
            
                <div id="comp-l25l3s7y" class="_2Hij5" data-testid="richTextElement">
                    <p class="font_9" style="line-height:normal; text-align:center; font-size:21px;">
                    <span style="font-size:21px;"><span style="font-family:palatino linotype,serif;">
                    <span style="letter-spacing:auto;">
                    <span class="color_11">Cảm ơn các bạn đã tin tưởng chọn website ebook của chúng tôi.</span></span></span></span></p>
                    <p class="font_9" style="line-height:normal; text-align:center; font-size:21px;">
                    <span style="font-size:21px;"><span style="font-family:palatino linotype,serif;">
                    <span style="letter-spacing:auto;">
                    <span class="color_11">Sự ủng hộ của các bạn là động lực giúp chúng tôi không ngừng cải tiến và phát triển!</span></span></span></span></p></div>


    
</body>

</html>