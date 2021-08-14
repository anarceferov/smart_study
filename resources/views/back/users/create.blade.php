@extends('back.layouts.master')
@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger shadow border border-danger">
        <ol>
            @foreach ($errors->all() as $error)
            <li style="list-style-type: none;" class="mb-1"> <i class="fas fa-exclamation mr-1"></i> {{ $error }}
            </li>
            @endforeach
        </ol>
    </div>
    @endif
</div>

<div class="container">
    <div class="card shadow mb-4 border border-dark">
        <div class="card-header">
            <a href="{{route('users.index')}}" class="btn btn-dark float-right"> <i class="fa fa-arrow-left"> </i>
                Geri</a>
        </div>
        <div class="card-body">
            <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data" class="text-primary">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Name :</label>
                        <input type="text" name="name" id="" class="form-control" autofocus value="{{old('name')}}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Email :</label>
                        <input type="email" name="email" id="" class="form-control" value="{{old('email')}}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Tel :</label>
                        <input type="number" name="tel" id="" class="form-control" value="{{old('tel')}}" required>
                    </div>
                </div>
                <hr>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Age :</label>
                        <input type="number" name="age" id="" class="form-control" value="{{old('age')}}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Birth Date :</label>
                        <input type="date" name="date_birth" id="" class="form-control" value="{{old('date_birth')}}" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="">Job :</label>
                        <input type="text" name="job" id="" class="form-control" value="{{old('job')}}" required>
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Password :</label>
                        <input type="password" name="password" class="form-control" id="" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Confirm Password :</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>
                </div>
                <input type="checkbox" onclick="myFunction()"> Show Password

                <hr>

                <div class="form-row">
                    <div class="form-group mt-4 col-md-6">
                        <label for="">CV :</label>
                        <input type="file" name="cv" id="" required>
                    </div>
                    <div class="form-group mt-4 col-md-6">
                        <label for="">Image :</label>
                        <input type="file" name="image" id="" required>
                    </div>
                </div>
                <hr>

                <div class="form-group">
                    <h3 class="text-center  badge-danger badge-pill"> Permissions</h3>
                </div>

                <div class="form-group">
                    <a href="" class="btn btn-secondary btn-sm">Select ALL</a>
                </div>
                
                <div class="form-check">
                    @foreach($permission as $value)
                    <input type="checkbox" value="{{$value->name}}" class="form-check-input" id="{{ $value->id }}" name="permission[]">
                    <label class="form-check-label" for="{{ $value->id }}"> {{ $value->name }} </label>
                    <br>
                    @endforeach
                </div>

                <hr>
                <div class="form-group mt-5">
                    <button type="submit" class="btn btn-success btn-block"> <i class="fa fa-plus"></i> Əlavə
                        Et</button>

                </div>
        </div>
        </form>
    </div>
</div>
</div>

@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>

<script>
    function myFunction() {
        var x = document.getElementsById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

<script>
    $('.btn-secondary').click(function(e) {
        e.preventDefault()
        $('.form-check-input').prop('checked', true);
    })
</script>
@endsection

@section('css')
<style>
    hr {
        border: 1px solid black;
    }
</style>
@endsection