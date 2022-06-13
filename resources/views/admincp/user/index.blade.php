@extends('layouts.app')

@section('content')

@include('layouts.nav')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liệt kê User</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table table-striped table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên User</th>
                                <th scope="col">Email</th>
                                <th scope="col">Vai trò</th>
                                <th scope="col">Quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $key => $value)
                            <tr>
                                <th scope="row">{{$key}}</th>
                                <th scope="row">{{$value->name}}</th>
                                <th scope="row">{{$value->email}}</th>
                                <th scope="row">
                                    @foreach($value->roles as $key => $role)
                                        {{$role->name}}
                                    @endforeach
                                </th>
                                <th scope="row">
                                    <a href="{{url('phan-vai-tro/'.$value->id)}}" class="btn btn-success">Phân vai trò</a>
                                    <a href="" class="btn btn-primary">Chuyển vai trò</a>
                                </th>
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