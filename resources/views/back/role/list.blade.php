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

<div class="container">
    <div class="card">
        <div class="card-header">
            <a href="{{route('roles.create')}}" class="btn btn-dark float-right"> <i class="fa fa-plus"></i> Əlavə Et</a>
        </div>

        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($roles as $role)
                    <tr>
                        <th>{{$role->name}}</th>
                        <th class="align-middle">
                            <a href="{{route('roles.edit' , $role->id)}}" class="btn btn-info d-inline btn-sm" type="button"><i class="fas fa-pencil-alt"></i></a>

                            <form action="{{route('roles.destroy' , $role->id )}}" method="post" class="d-inline">
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

@section('js')
<script>
    setTimeout(function() {

        $(".alert").hide("2000")

    }, 3000);
</script>
@endsection