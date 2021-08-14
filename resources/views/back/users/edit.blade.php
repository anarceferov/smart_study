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
            <a href="{{route('users.index') }}" class="btn btn-dark float-right"> <i class="fa fa-arrow-left"> </i>
                Geri</a>
        </div>
        <div class="card-body">
            <form action="{{route('users.update' , $user->id)}}" method="POST" enctype="multipart/form-data" class="text-primary">
                @method('PUT')
                @csrf
                <input type="hidden" name="id" id="" value="{{$user->id}}">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Name :</label>
                        <input type="text" name="name" id="" class="form-control" autofocus value="{{$user->name}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Email :</label>
                        <input type="email" name="email" id="" class="form-control" value="{{$user->email}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Tel :</label>
                        <input type="number" name="tel" id="" class="form-control" value="{{$user->tel}}">
                    </div>
                </div>
                <hr>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Age :</label>
                        <input type="number" name="age" id="" class="form-control" value="{{$user->age}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Birth Date :</label>
                        <input type="date" name="date_birth" id="" class="form-control" value="{{$user->date_birth}}">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="">Job :</label>
                        <input type="text" name="job" id="" class="form-control" value="{{$user->job}}">
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Password :</label>
                        <input type="password" name="password" id="" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Confirm Password :</label>
                        <input type="password" name="password_confirmation" id="" class="form-control">
                    </div>
                </div>
                <hr>

                <div class="form-row">
                    <div class="form-group mt-4 col-md-6">
                        <label for="">CV :</label>
                        <input type="file" name="cv" id="">
                    </div>
                    <div class="form-group mt-4 col-md-6">
                        <label for="">Image :</label>
                        <input type="file" name="image" id="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="badge badge-pill badge-primary w-25">
                            <a href="{{asset('storage/cv/'.$user->cv)}}" target="blank" class="text-white"> <i class="fas fa-folder"></i> cv view</a>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="badge badge-pill badge-success w-25">
                            <a href="{{asset('storage/cv/'.$user->cv)}}" target="blank" class="text-white"> <i class="fas fa-image"></i> image view</a>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="form-group">
                    <h3 class="text-center  badge-danger badge-pill"> Permissions </h3>
                </div>

                <div class="form-group">
                    <button class="btn btn-secondary btn-sm">Select ALL</button>
                </div>
                
                <div class="form-check">
                    @foreach($permission as $value)
                    <input type="checkbox" value="{{$value->name}}" class="form-check-input" id="{{ $value->id }}" name="permission[]" @foreach($rolePermissions as $key=>$per)
                    @if($key == $value->id) checked @endif
                    @endforeach">
                    <label class="form-check-label" for="{{ $value->id }}" value=""> {{ $value->name }} </label>
                    <br>
                    @endforeach
                </div>
                <hr>

                <div class="form-group mt-5">
                    <button type="submit" class="btn btn-success btn-block"> <i class="fas fa-retweet"></i>
                        Yenilə</button>

                </div>
        </div>
        </form>
    </div>
</div>
</div>
@endsection

@section('css')
    <style>
        hr{
            background-color: red !important;
            border: 1px solid black;
        }
    </style>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>


<script>
$('.btn-secondary').click(function(e){
    e.preventDefault()
    $('.form-check-input').prop('checked', true);
})
</script>
@endsection