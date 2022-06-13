@extends('layouts.app')

@section('content')

@include('layouts.nav')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Cấp vai trò User: {{$user->name}}</div>
                <form action="{{url('/insert-roles', [$user->id])}}" method="POST">
                    @csrf

                    @foreach($role as $key => $r)
                    @if(isset($all_column_roles))
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" {{$r->id==$all_column_roles->id ? 'checked' : ''}} type="radio"
                            name="role" id="{{$r->id}}" value="{{$r->name}}">
                        <label class="form-check-label" for="{{$r->id}}">{{$r->name}}</label>
                    </div>
                    @else
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="role" id="{{$r->id}}" value="{{$r->name}}">
                        <label class="form-check-label" for="{{$r->id}}">{{$r->name}}</label>
                    </div>
                    @endif
                    @endforeach
                    <br>
                    <input type="submit" name="insertroles" value="Cấp vai trò cho User" class="btn btn-success">
                </form>
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