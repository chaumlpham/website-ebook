@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm danh mục Ebook</div>
                <!-- /resources/views/post/create.blade.php -->

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                <!-- Create Post Form -->

                <form method="POST" action="{{route('danhmuc.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên Danh mục</label>
                        <input type="text" class="form-control" value="{{old('tendanhmuc')}}" onkeyup="ChangeToSlug();"
                            name="tendanhmuc" id="slug" aria-describedby="emailHelp" placeholder="Tên Danh mục">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Slug Danh mục</label>
                        <input type="text" class="form-control" value="{{old('slug_danhmuc')}}" name="slug_danhmuc"
                            id="convert_slug" aria-describedby="emailHelp" placeholder="Slug Danh mục">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Mô tả Danh mục</label>
                        <input type="text" class="form-control" value="{{old('mota')}}" name="mota"
                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mô tả Danh mục">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kích hoạt</label>
                        <select name="kichhoat" class="custom-select">
                            <option value="0">Có</option>
                            <option value="1">Không</option>
                        </select>
                    </div>
                    <button type="submit" name="themdanhmuc" class="btn btn-primary">Thêm</button>
                </form>
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