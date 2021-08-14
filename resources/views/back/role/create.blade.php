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
            <a href="{{route('roles.index')}}" class="btn btn-dark float-right"> <i class="fa fa-arrow-left"> </i>
                Geri</a>
        </div>
        <div class="card-body">
            <form action="{{route('roles.store')}}" method="POST" class="text-primary">
                @csrf
                <div class="form-group">
                    <label for="" class="text-danger">Role Name</label>
                    <input type="text" class="form-control" name="name">
                </div><hr>
                <div class="form-check">
                    @foreach($permission as $value)
                        <input type="checkbox" value="{{$value->name}}" class="form-check-input" id="{{ $value->id }}" name="permission[]">
                        <label class="form-check-label" for="{{ $value->id }}" value=""> {{ $value->name }} </label>
                        <br>
                    @endforeach
                </div><hr>
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