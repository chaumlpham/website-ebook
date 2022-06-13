@extends('../welcome')
@section('slide')
@include('pages.slide')
@endsection
@section('content')
<!--------Ebook của tháng--------->
<div id="comp-l25li0sy" class="_2Hij5" data-testid="richTextElement"><p class="font_7" style="line-height:normal; text-align:center; font-size:20px;"><span class="color_18"><span style="letter-spacing:0.05em;">NỔI BẬT TRONG THÁNG</span></span></p></div>
<div id="comp-l25li0t6" class="_2Hij5" data-testid="richTextElement" data-angle="0" data-angle-style-location="style" data-screen-in-hide="done" style="visibility: inherit;"><h1 class="font_0" style="line-height:normal; text-align:center; font-size:47px;"><span class="color_18"><span style="letter-spacing:0.05em;">RECOMMENDED BOOKS</span></span></h1></div>
<div class="owl-carousel owl-theme">
    <div class="item"> <img src="{{asset('image/NgheThuatSong.png')}}">
        <h3> Nghệ thuật sống</h3>
        <p>  <i class="fa-regular fa-eye"> 135 </i> </p>
        <a class="btn btn-danger btn-sm" href=""> Đọc ngay </a>
    </div>

    <div class="item"> <img src="{{asset('image/SinhTu.jpg')}}">
        <h3> Twilight-Sinh tử </h3>
        <p>  <i class="fa-regular fa-eye"> 135 </i> </p>
        <a class="btn btn-danger btn-sm" href=""> Đọc ngay </a>

    </div>
    <div class="item"> <img src="{{asset('image/BienDong.jpg')}}">
        <h3>Biến động</h3>
        <p>  <i class="fa-regular fa-eye"> 135 </i> </p>
        <a class="btn btn-danger btn-sm" href=""> Đọc ngay </a>
    </div>

    <div class="item"> <img src="{{asset('/image/ChienTranhTienTe.jpg')}}">
        <h3>Các cuộc chiến tranh tiền tệ</h3>
        <p>  <i class="fa-regular fa-eye"> 135 </i> </p>
        <a class="btn btn-danger btn-sm" href=""> Đọc ngay </a>
    </div>

    <div class="item"> <img src="{{asset('image/PhieuBuoc.jpg')}}">
        <h3> Phiêu bước cùng Einstein</h3>
        <p>  <i class="fa-regular fa-eye"> 135 </i> </p>
        <a class="btn btn-danger btn-sm" href=""> Đọc ngay </a>
    </div>

    <div class="item"> <img src="{{asset('image/VuTru.jpg')}}">
        <h3>Vũ Trụ  <i class="fa-regular fa-eye"> 135 </i> </p>
        <a class="btn btn-danger btn-sm" href=""> Đọc ngay </a>
    </div>
</div>
<!--EBOOKS MIỄN PHÍ-->

<div id="comp-l25li0t6" class="_2Hij5" data-testid="richTextElement" 
data-angle="0" data-angle-style-location="style" data-screen-in-hide="done" 
style="visibility: inherit;">
<h1 class="font_0" style="line-height:normal; text-align:center; font-size:47px;">
<span class="color_18"><span style="letter-spacing:0.05em;">EBOOKS MIỄN PHÍ</span></span></h1></div>
<div class="owl-carousel owl-theme">
    <div class="item"> <img src="{{asset('image/CamTinh.jpg')}}">
        <h3> Tất cả chúng ta đều phản xạ theo cảm tính </h3>
        <p>  <i class="fa-regular fa-eye"> 55 </i> </p>
        <a class="btn btn-danger btn-sm" href=""> Đọc ngay </a>
    </div>

    <div class="item"> <img src="{{asset('image/SinhTu.jpg')}}">
        <h3> Twilight-Sinh tử </h3>
        <p>  <i class="fa-regular fa-eye"> 234 </i> </p>
        <a class="btn btn-danger btn-sm" href=""> Đọc ngay </a>

    </div>
    <div class="item"> <img src="{{asset('image/TuyetMat.jpg')}}">
        <h3>Tuyệt mật trong buồng lái</h3>
        <p>  <i class="fa-regular fa-eye"> 78 </i> </p>
        <a class="btn btn-danger btn-sm" href=""> Đọc ngay </a>
    </div>

    <div class="item"> <img src="{{asset('image/DacNhanTam.png')}}">
        <h3>Đắc nhân tâm</h3>
        <p>  <i class="fa-regular fa-eye"> 102</i> </p>
        <a class="btn btn-danger btn-sm" href=""> Đọc ngay </a>
    </div>

    <div class="item"> <img src="{{asset('image/Israel.jpg')}}">
        <h3>Israel - Mảnh Đất Của Những Phát Minh Vì Con Người</h3>
        <p>  <i class="fa-regular fa-eye"> 71</i> </p>
        <a class="btn btn-danger btn-sm" href=""> Đọc ngay </a>
    </div>

 
</div>


<!-------Ebook xem nhiều------>
<p class="font_7" style="text-align:center; line-height:normal; font-size:20px;"><span style="letter-spacing:0.05em;">Coming Up</span></p>

<div id="comp-jdybi5qb" class="_2Hij5" data-testid="richTextElement"><h1 class="font_0" style="line-height:normal; text-align:center; font-size:47px;"><span style="letter-spacing:0.05em;">GIỚI THIỆU SÁCH MỚI</span></h1></div>

<div class="sNp9JN">
<img src="{{asset('/image/CoTheNguoi.jpg')}}" class="rounded mx-auto d-block" 

     style=
     "left:0;
     opacity:1;
     object-position:50% 50%;
     object-fit:cover;
     width:calc(50% + 1px);
     height:calc(50% + 1px)" 
     data-hook="image" ></div>

    @endsection