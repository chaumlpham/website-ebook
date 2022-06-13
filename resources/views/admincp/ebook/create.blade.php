@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm Ebook</div>
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

                    <form method="POST" action="{{route('ebook.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Ebook</label>
                            <input type="text" class="form-control" value="{{old('tendanhmuc')}}"
                                onkeyup="ChangeToSlug();" name="tenebook" id="slug" aria-describedby="emailHelp"
                                placeholder="Tên Ebook">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tác giả</label>
                            <input type="text" class="form-control" value="{{old('tacgia')}}"
                                name="tacgia" aria-describedby="emailHelp"
                                placeholder="Tác giả">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug Ebook</label>
                            <input type="text" class="form-control" value="{{old('slug_ebook')}}" name="slug_ebook"
                                id="convert_slug" aria-describedby="emailHelp" placeholder="Slug Ebook">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tóm tắt Ebook</label>
                            <textarea name="tomtat" id="tomtat_ebook" class="form-control" rows="5" style="resize:none"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Đọc thử</label>
                            <input type="text" class="form-control" value="{{old('docthu')}}"
                                name="docthu" aria-describedby="emailHelp"
                                placeholder="Đọc thử">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Danh mục Ebook</label>
                            <select name="danhmuc" class="custom-select">
                                @foreach($danhmucebook as $key => $muc)
                                <option value="{{$muc->id}}">{{$muc->tendanhmuc}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh Ebook</label>
                            <input type="file" class="form-control-file" name="hinhanh">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kích hoạt</label>
                            <select name="kichhoat" class="custom-select">
                                <option value="0">Có</option>
                                <option value="1">Không</option>
                            </select>
                        </div>
                        <button type="submit" name="themebook" class="btn btn-primary">Thêm</button>
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