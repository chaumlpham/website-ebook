@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm User</div>
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

                <form method="POST" action="{{route('user.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên User</label>
                        <input type="text" class="form-control" value="{{old('name')}}" name="name"
                            aria-describedby="emailHelp" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" value="{{old('email')}}" name="email"
                            aria-describedby="emailHelp" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Mật khẩu</label>
                        <input type="text" class="form-control" value="{{old('password')}}" name="password"
                            aria-describedby="emailHelp" placeholder="">
                    </div>
                    <button type="submit" name="themuser" class="btn btn-primary">Thêm User</button>
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