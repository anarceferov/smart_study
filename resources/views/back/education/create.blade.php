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
        <form action="{{route('educations.store')}}" method="POST" enctype="multipart/form-data" class="text-primary">
          @csrf
          <div class="form-group">
            <label for="">Education :</label>
            <input type="text" name="name" id="" class="form-control" autofocus value="{{old('name')}}">
            <hr>
          </div>

          <div class="form-group">
            <label for="">Image :</label>
            <input type="file" name="image" id="">
          </div>

          <div class="form-group mt-5">
            <button class="btn btn-success btn-block" type="submit"> <i class="fa fa-plus"></i> Əlavə
              Et</button>
          </div>
        </form>
      </div>
  </div>
</div>


@section('js')
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
<script type="module"> import Vue from 'https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.esm.browser.js'
</script>
<script src="vuelidate/dist/vuelidate.min.js"></script>


<script>


</script>

@endsection

@section('css')
@endsection
@endsection