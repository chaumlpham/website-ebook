@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liệt kê Ebook</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên Ebook</th>
                                <th scope="col">Tác giả</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Slug Ebook</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Kích hoạt</th>
                                <th scope="col">Quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list_ebook as $key => $ebook)
                            <tr>
                                <th scope="row">{{$key}}</th>
                                <td>{{$ebook->tenebook}}</td>
                                <td>{{$ebook->tacgia}}</td>
                                <td><img src="{{asset('/uploads/ebook/'.$ebook->hinhanh)}}" height="200" width="200"></td>
                                <td>{{$ebook->slug_ebook}}</td>
                                <td>{{$ebook->danhmucebook->tendanhmuc}}</td>
                                <td>
                                    @if($ebook->kichhoat==0)
                                    <span class="text text-success">Kích hoạt</span>
                                    @else
                                    <span class="text text-danger"> Không Kích hoạt</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('ebook.edit', [$ebook->id])}}" class="btn btn-primary">Sửa</a>
                                    <form action="{{route('ebook.destroy', [$ebook->id])}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button onclick="return confirm('Bạn muốn xóa?');"
                                            class="btn btn-danger">Xóa</button>

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>