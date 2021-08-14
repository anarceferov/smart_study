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
        <a href="{{route('users.create')}}" class="btn btn-dark float-right"> <i class="fa fa-plus"></i> Əlavə Et</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Tel</th>
                        <th>Age</th>
                        <th>Birth Date</th>
                        <th>CV</th>
                        <th>User Image</th>
                        <th>Job</th>
                        <th>Start</th>
                        <th>Type</th>
                        <th>Crud</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($users as $user)
                    <tr>
                        <th class="align-middle">
                            <div class="badge badge-pill badge-dark">
                                {{$loop->iteration}}
                            </div>
                        </th>

                        <th>{{$user->name}}</th>
                        <th>{{$user->email}}</th>
                        <th>{{$user->tel}}</th>
                        <th>{{$user->age}}</th>
                        <th>{{$user->date_birth}}</th>
                        <th>
                            <a href="{{asset('storage/cv/'.$user->cv)}}" target="blank">cv view</a>
                        </th>
                        <th>
                            <a href="{{asset('storage/user_image/'.$user->image)}}" target="blank">image view</a>
                        </th>
                        <th>{{$user->job}}</th>
                        @if($user->created_at)
                        <th class="" title="{{$user->created_at}}">{{ $user->created_at->diffForHumans()}}</th>
                        @endif
                        <th>
                            @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                                <span class="badge badge-success">{{ $v }}</span>
                            @endforeach
                            @endif
                        </th>
                        <th class="align-middle">
                            <a href="{{route('users.edit' , $user->id)}}" class="btn btn-info d-inline btn-sm" type="button"><i class="fas fa-pencil-alt"></i></a>

                            <form action="{{route('users.destroy' , $user->id )}}" method="post" class="d-inline">
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