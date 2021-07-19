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
            <a href="{{route('successes.index')}}" class="btn btn-dark float-right"> <i class="fa fa-arrow-left"> </i>
                Geri</a>
        </div>
        <div class="card-body">
            <form action="{{route('successes.update' , $successes->id)}}" method="POST" enctype="multipart/form-data" class="text-primary">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Name :</label>
                        <input type="text" name="name" id="" class="form-control" autofocus value="{{$successes->name}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">University :</label>
                        <input type="text" name="uni" id="" class="form-control" autofocus value="{{$successes->uni}}">
                    </div>
                </div><br><hr>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Faculty :</label>
                        <input type="text" name="faculty" id="" class="form-control" autofocus value="{{$successes->faculty}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Degree :</label>
                        <input type="text" name="degree" id="" class="form-control" autofocus value="{{$successes->degree}}">
                    </div>
                </div><br><hr>


                    <div class="form-group">
                        <label for="">Image :</label>
                        <input type="file" name="image" id="">
                    </div>

                    <div class="form-group bg-light">
                        <label>Current Image :</label>
                        <img src="{{asset('storage/success/'.$successes->image)}}" alt="" height='400' width="400" class="img-thumbnail" style="object-fit: contain">
                    </div>

                <div class="form-group mt-5">
                    <button type="submit" class="btn btn-success btn-block"> <i class="fas fa-retweet"></i> Yenilə</button>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
@section('js')

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 400,
        });
    });
</script>
@endsection
@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection
@endsection