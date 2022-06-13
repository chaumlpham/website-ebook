@extends('./welcome')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="{{url('danh-muc/'.$ebook->danhmucebook->slug_danhmuc)}}">{{$ebook->danhmucebook->tendanhmuc}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{$ebook->tenebook}}</li>
    </ol>
</nav>
<div class="row">

    <div class="col-md-9">
        <div class="row">
            <div class="col-md-3">
                <img class="bd-placeholder-img card-img-top" src="{{asset('/uploads/ebook/'.$ebook->hinhanh)}}""> 
            </div>
            <div class=" col-md-9">
                <style type="text/css">
                .infoebook {
                    list-style: none;
                }
                </style>
                <ul class="infoebook">
                    <li> Tên ebook: {{$ebook->tenebook}}</li>
                    <li> Tác giả: {{$ebook->tacgia}}</li>
                    <li>Danh mục: <a
                            href="{{url('danh-muc/'.$ebook->danhmucebook->slug_danhmuc)}}">{{$ebook->danhmucebook->tendanhmuc}}</a>
                    </li>
                    <li><a href="{{$ebook->docthu}}" class="btn btn-success"> Đọc thử Ebook </a></li>
                    <form action="{{route('payment')}}" method="POST">
                        @csrf
                        <input name="amount" type="hidden" value="{{$ebook->id}}">
                        <button type="submit" class="btn btn-fefault cart">
                            <i class="fa fa-shopping-cart"></i>
                            Mua Ebook
                        </button>
                    </form>
                </ul>

            </div>
            <div class="col-md-12">
                {!!$ebook->tomtat!!}
            </div>
            <!-----------Mục lục----------->
            <hr>
            <h4> Mục Lục </h4>
            <ul class="muclucebook">

            </ul>

            <!------------Sách cùng loại------->

            <h4> Sách cùng danh mục </h4>
            @foreach($cungdanhmuc as $key => $value)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img class="bd-placeholder-img card-img-top" src="{{asset('/uploads/ebook/'.$value->hinhanh)}}">
                    <div class="card-body">
                        <h5>{{$value->tenebook}}</h5>
                        <h5>Tác giả: {{$value->tacgia}}</h5>
                        <!-- <p class="card-text">{{$value->tomtat}}</p> -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{url('doc-ebook/'.$value->slug_ebook)}}"
                                    class="btn btn-success">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <!---------Sách xem nhiều--------------->
            <div class="col-md-3">

            </div>
        </div>
        @endsection