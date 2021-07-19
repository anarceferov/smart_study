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
            <a href="{{route('educations.index')}}" class="btn btn-dark float-right"> <i class="fa fa-arrow-left"> </i>
                Geri</a>
        </div>
        <div class="card-body">
            <form action="{{route('educations.update' , $educations->id)}}" method="POST" enctype="multipart/form-data" class="text-primary">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Education :</label>
                    <input type="text" name="name" id="" class="form-control" autofocus value="{{$educations->name}}"> <hr>
                </div>

                <div class="form-group">
                    <label for="">Image :</label>
                    <input type="file" name="image" id="">
                </div>

                <div class="form-group bg-light">
                    <label>Current Image :</label>
                    <img src="{{asset('storage/education/'.$educations->image)}}" alt="" height='50' class="img-thumbnail" style="object-fit: contain">
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
<script>
$(document).ready(function() {
  $('#summernote').summernote({
    height:400,
  });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection
@endsection