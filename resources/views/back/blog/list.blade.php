@extends('back.layouts.master')
@section('content')
<div class="container">
    @if (session('success'))
    <div class="alert alert-success shadow border border-success text-center">
        <i class="fa fa-check mr-2"></i>
        {{ session('success')}}
    </div>
    @endif
</div>

<div class="card shadow mb-4">
    <div class="card-header">
        <a href="{{route('blogs.create')}}" class="btn btn-dark float-right"> <i class="fa fa-plus"></i> Əlavə Et</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Author</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Created_At</th>
                        <th>Updated_At</th>
                        <th>Status</th>
                        <th>Crud</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($blogs as $blog)
                    <tr class="text-center">
                        <th class="align-middle">
                            <div class="badge badge-pill badge-dark">
                                {{$loop->iteration}}
                            </div>
                        </th>

                        <th class="align-middle">{{$blog->author->name}}</th>
                        <th class="align-middle"><img src="{{asset('storage/blog/'.$blog->blog_image)}}" alt="" width='200' height='150' class="img-thumbnail" style="object-fit: contain"></th>
                        <th class="align-middle">{{Str::limit($blog->title , 40)}}</th>
                        <th class="align-middle">{{$blog->created_at}}</th>
                        <th class="align-middle">{{$blog->updated_at}}</th>
                        <th class="align-middle">
                            @if($blog->status == 'pendding')
                            <div class="badge badge-warning text-center">{{ $blog->status}}</div>
                            @elseif($blog->status == 'publish')
                            <div class="badge badge-success">{{ $blog->status}}</div>
                            @elseif($blog->status == 'check')
                            <div class="badge badge-danger">{{ $blog->status}}</div>
                            @endif
                        </th>

                        <th class="align-middle">
                            <a href="{{route('blogs.edit' , $blog->id)}}" class="btn btn-info d-inline btn-sm" type="button"><i class="fas fa-pencil-alt"></i></a>

                            <form action="{{route('blogs.destroy' , $blog->id )}}" method="post" class="d-inline">
                                @csrf
                                @method('delete')

                                <button class="btn btn-danger btn-sm btn-circle" type="submit"><i class="far fa-trash-alt"></i></button>
                            </form>

                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection








@section('css')
<link href="{{asset('back/')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection


@section('js')
<script src="{{asset('back/')}}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('back/')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('back/')}}/js/demo/datatables-demo.js"></script>

<script>
    setTimeout(function() {

        $(".alert").hide("2000")

    }, 3000);
</script>
@endsection