@extends('../welcome')
@section('content')
<!--------Ebook mới cập nhật--------->
<p class="font_7" style="text-align:center; font-size:47px;">
    <span style="letter-spacing:0.05em;">OUR EBOOKS</span></p>
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            @foreach($ebook as $key => $value)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img class="bd-placeholder-img card-img-top"
                        src="{{asset('/uploads/ebook/'.$value->hinhanh)}}">
                    <div class="card-body">
                        <h5>{{$value->tenebook}}</h5>
                        <!-- <p class="card-text">{!!$value->tomtat!!}</p> -->
                        <h5>Tác giả: {{$value->tacgia}}</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{url('doc-ebook/'.$value->slug_ebook)}}" class="btn btn-success">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a class="btn btn-success" href="">Xem tất cả</a>
    </div>
</div>

<!-------Ebook xem nhiều------>

<div id="comp-l25li0t6" class="_2Hij5" data-testid="richTextElement" data-angle="0" data-angle-style-location="style" data-screen-in-hide="done" style="visibility: inherit;"><h1 class="font_0" style="line-height:normal; text-align:center; font-size:47px;"><span class="color_18"><span style="letter-spacing:0.05em;">BÁN CHẠY NHẤT</span></span></h1></div>
<div class="owl-carousel owl-theme">
    <div class="item"> <img src="{{asset('image/NgheThuatSong.png')}}">
        <h3> Nghệ thuật sống</h3>
        <p> <i class="fa-solid fa-cart-arrow-down"> 293 </i> <i class="fa-regular fa-eye"> 135 </i> </p>
        <a class="btn btn-danger btn-sm" href=""> Đọc ngay </a>
    </div>

    <div class="item"> <img src="{{asset('image/SinhTu.jpg')}}">
        <h3> Twilight-Sinh tử </h3>
        <p> <i class="fa-solid fa-cart-arrow-down"> 293 </i> <i class="fa-regular fa-eye"> 135 </i> </p>
        <a class="btn btn-danger btn-sm" href=""> Đọc ngay </a>

    </div>
    <div class="item"> <img src="{{asset('image/BienDong.jpg')}}">
        <h3>Biến động</h3>
        <p> <i class="fa-solid fa-cart-arrow-down"> 293 </i> <i class="fa-regular fa-eye"> 135 </i> </p>
        <a class="btn btn-danger btn-sm" href=""> Đọc ngay </a>
    </div>

    <div class="item"> <img src="{{asset('/image/ChienTranhTienTe.jpg')}}">
        <h3>Các cuộc chiến tranh tiền tệ</h3>
        <p> <i class="fa-solid fa-cart-arrow-down"> 293 </i> <i class="fa-regular fa-eye"> 135 </i> </p>
        <a class="btn btn-danger btn-sm" href=""> Đọc ngay </a>
    </div>

    <div class="item"> <img src="{{asset('image/PhieuBuoc.jpg')}}">
        <h3> Phiêu bước cùng Einstein</h3>
        <p> <i class="fa-solid fa-cart-arrow-down"> 293 </i> <i class="fa-regular fa-eye"> 135 </i> </p>
        <a class="btn btn-danger btn-sm" href=""> Đọc ngay </a>
    </div>

    <div class="item"> <img src="{{asset('image/VuTru.jpg')}}">
        <h3>Vũ Trụ <i class="fa-solid fa-cart-arrow-down"> 293 </i> <i class="fa-regular fa-eye"> 135 </i> </p>
        <a class="btn btn-danger btn-sm" href=""> Đọc ngay </a>
    </div>
</div>
    @endsection