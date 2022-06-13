@extends('../welcome')
@section('content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$tendanhmuc}}</li>
    </ol>
</nav>

@foreach($danhmuc_display as $key => $danh)
<h3> EBOOKS {{$danh->tendanhmuc}}</h3>
@endforeach

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            @php
            $count = count($ebook);
            @endphp
            @if ($count == 0)
            <div class="col-md-12">
                <div class="card mb-12 box-shadow">
                    <div class="card-body">
                        <p>Ebook đang cập nhật!</p>
                    </div>
                </div>
            </div>
            @else
            @foreach($ebook as $key => $value)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img class="bd-placeholder-img card-img-top"
                        src="{{asset('/uploads/ebook/'.$value->hinhanh)}}">
                    <div class="card-body">
                        <h5>{{$value->tenebook}}</h5>
                        <p class="card-text">{!!$value->tomtat!!}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{url('doc-ebook/'.$value->slug_ebook)}}"
                                    class="btn btn-success">Chi tiết</a>
                            </div>
                            <small class="text-muted">20 mins ago </small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <a class="btn btn-success" href="">Xem tất cả</a>
    </div>
</div>

<!-------Ebook xem nhiều------>
<h3> ĐƯỢC XEM NHIỀU NHẤT </h3>
<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img class="bd-placeholder-img card-img-top" src="{{asset('image/DacNhanTam.png')}}">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="" class="btn btn-sm btn-outline-secondary">Đọc thử</a>
                                <a class="btn btn-sm btn-outline-secondary"> <i class="fa-regular fa-eye"></i> 712
                                </a>
                            </div>
                            <small class="text-muted">20 mins ago </small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img class="bd-placeholder-img card-img-top" src="{{asset('image/DacNhanTam.png')}}">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="" class="btn btn-sm btn-outline-secondary">Đọc thử</a>
                                <a class="btn btn-sm btn-outline-secondary"> <i class="fa-regular fa-eye"></i> 712
                                </a>
                            </div>
                            <small class="text-muted">20 mins ago </small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img class="bd-placeholder-img card-img-top" src="{{asset('image/DacNhanTam.png')}}">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="" class="btn btn-sm btn-outline-secondary">Đọc thử</a>
                                <a class="btn btn-sm btn-outline-secondary"> <i class="fa-regular fa-eye"></i> 712
                                </a>
                            </div>
                            <small class="text-muted">20 mins ago </small>
                        </div>
                    </div>
                </div>
                <a class="btn btn-success" href="">Xem tất cả</a>
            </div>
        </div>
    </div>
    @endsection