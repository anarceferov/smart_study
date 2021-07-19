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

<div class="card">
    <div class="card-header">
        {{-- <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
            @foreach ($counts as $count)
            <li class="nav-item">
                <a class="nav-link @if($loop->first) active @endif" id="pills-{{$count->status}}-tab"
        data-toggle="pill" href="#pills-{{$count->status}}" role="tab"
        aria-controls="pills-{{$count->status}}" aria-selected="true">{{Str::upper($count->status)}} <span
            class="badge badge-pill badge-danger">{{$count->count}}</span>
        </a>
        </li>
        @endforeach
        </ul> --}}

        <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
 
            @isset($counts['baxilmayib'])
            <li class="nav-item">
                <a class="nav-link active" id="pills-baxilmayib-tab" data-toggle="pill" href="#pills-baxilmayib"
                    role="tab" aria-controls="pills-baxilmayib" aria-selected="true">BAXILMAYIB
                    <span class="badge badge-pill badge-danger"> {{$counts['baxilmayib']}}</span>
                </a>
            </li>
            @endisset

            @isset($counts['baxilir'])
            <li class="nav-item">
                <a class="nav-link" id="pills-baxilir-tab" data-toggle="pill" href="#pills-baxilir" role="tab"
                    aria-controls="pills-baxilir" aria-selected="false">BAXILIR
                    <span class="badge badge-pill badge-danger">{{$counts['baxilir']}}</span>
                </a>
            </li>
            @endisset

            @isset($counts['arasdirilir'])
            <li class="nav-item">
                <a class="nav-link" id="pills-arasdirilir-tab" data-toggle="pill" href="#pills-arasdirilir" role="tab"
                    aria-controls="pills-arasdirilir" aria-selected="false">ARAŞDIRILIR
                    <span class="badge badge-pill badge-danger"> {{$counts['arasdirilir']}}</span>
                </a>
            </li>
            @endisset

            @isset($counts['tamamlanib'])
            <li class="nav-item">
                <a class="nav-link" id="pills-tamamlanib-tab" data-toggle="pill" href="#pills-tamamlanib" role="tab"
                    aria-controls="pills-tamamlanib" aria-selected="false">BAXILIB
                    <span class="badge badge-pill badge-danger"> {{$counts['tamamlanib']}}</span>
                </a>
            </li>
            @endisset

        </ul>
    </div>
    <div>
        <div class="card-body">
            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-baxilmayib" role="tabpanel"
                    aria-labelledby="pills-baxilmayib-tab">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="text-center">
                                <tr>
                                    <th>Name</th>
                                    <th>Last Name</th>
                                    <th>Number</th>
                                    <th>Topic</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($messages as $message)
                                @if($message->status == "baxilmayib")
                                <tr>
                                    <th class="align-middle">{{$message->name}}</th>
                                    <th class="align-middle">{{$message->lastName}}</th>
                                    <th class="align-middle">{{$message->number}}</th>
                                    <th class="align-middle">{{$message->topic}}</th>
                                    <th>{{$message->message}}</th>
                                    <th class="align-middle">
                                        <button type="button" class="btn btn-outline-danger text-center"
                                            data-toggle="modal" data-target="#exampleModalCenter1"><i
                                                class="fas fa-question-circle"></i>
                                            {{Str::upper($message->status)}}</button>

                                        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Status
                                                            Seç</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{route('messages.update' , $message->id)}}"
                                                        method="POST">
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="modal-body">
                                                            <select class="custom-select" multiple size="3"
                                                                name="status" required>
                                                                <option value="baxilir">Baxılır</option>
                                                                <option value="arasdirilir">Araşdırılır</option>
                                                                <option value="tamamlanib">Baxılıb</option>
                                                            </select>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <th>{{$message->created_at}}</th>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-baxilir" role="tabpanel" aria-labelledby="pills-baxilir-tab">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="text-center">
                                <tr>
                                    <th>Name</th>
                                    <th>Last Name</th>
                                    <th>Number</th>
                                    <th>Topic</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Operator</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($messages as $message)
                                @if($message->status == "baxilir")
                                <tr>
                                    <th class="align-middle">{{$message->name}}</th>
                                    <th class="align-middle">{{$message->lastName}}</th>
                                    <th class="align-middle">{{$message->number}}</th>
                                    <th class="align-middle">{{$message->topic}}</th>
                                    <th class="align-middle">{{$message->message}}</th>
                                    <th class="align-middle">
                                        <button type="button" class="btn btn-outline-warning text-center"
                                            data-toggle="modal" data-target="#exampleModalCenter2"><i
                                                class="fas fa-question-circle"></i>
                                            {{Str::upper($message->status)}}</button>

                                        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Status
                                                            Seç</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{route('messages.update' , $message->id)}}"
                                                        method="POST">
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="modal-body">
                                                            <select class="custom-select" multiple size="3"
                                                                name="status" required>
                                                                <option value="arasdirilir">Araşdırılır</option>
                                                                <option value="tamamlanib">Baxılıb</option>
                                                            </select>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <th>{{$message->user_name}}</th>
                                    <th>{{$message->created_at}}</th>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-arasdirilir" role="tabpanel"
                    aria-labelledby="pills-arasdirilir-tab">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="text-center">
                                <tr>
                                    <th>Name</th>
                                    <th>Last Name</th>
                                    <th>Number</th>
                                    <th>Topic</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Operator</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($messages as $message)
                                @if($message->status == "arasdirilir")
                                <tr>
                                    <th class="align-middle">{{$message->name}}</th>
                                    <th class="align-middle">{{$message->lastName}}</th>
                                    <th class="align-middle">{{$message->number}}</th>
                                    <th class="align-middle">{{$message->topic}}</th>
                                    <th class="align-middle">{{$message->message}}</th>
                                    <th class="align-middle">
                                        <button type="button" class="btn btn-outline-primary text-center"
                                            data-toggle="modal" data-target="#exampleModalCenter3"><i
                                                class="fas fa-question-circle"></i>
                                            {{Str::upper($message->status)}}</button>

                                        <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Status
                                                            Seç</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{route('messages.update' , $message->id)}}"
                                                        method="POST">
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="modal-body">
                                                            <select class="custom-select" multiple size="3"
                                                                name="status" required>
                                                                <option value="baxilir">Baxılır</option>
                                                                <option value="tamamlanib">Baxılıb</option>
                                                            </select>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <th>{{$message->user_name}}</th>
                                    <th>{{$message->created_at}}</th>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-tamamlanib" role="tabpanel" aria-labelledby="pills-tamamlanib-tab">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="text-center">
                                <tr>
                                    <th>Name</th>
                                    <th>Last Name</th>
                                    <th>Number</th>
                                    <th>Topic</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Operator</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($messages as $message)
                                @if($message->status == "tamamlanib")
                                <tr>
                                    <th class="align-middle">{{$message->name}}</th>
                                    <th class="align-middle">{{$message->lastName}}</th>
                                    <th class="align-middle">{{$message->number}}</th>
                                    <th class="align-middle">{{$message->topic}}</th>
                                    <th class="align-middle">{{$message->message}}</th>
                                    <th class="align-middle">
                                        <button type="button" class="btn btn-outline-success text-center"
                                            data-toggle="modal" data-target="#exampleModalCenter4"><i
                                                class="fas fa-question-circle"></i>
                                            {{Str::upper($message->status)}}</button>

                                        <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Status
                                                            Seç</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{route('messages.update' , $message->id)}}"
                                                        method="POST">
                                                        @method('PUT')
                                                        @csrf
                                                        <div class="modal-body">
                                                            <select class="custom-select" multiple size="3"
                                                                name="status" required>
                                                                <option value="arasdirilir">Araşdırılır</option>
                                                                <option value="baxilir">Baxılır</option>
                                                            </select>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <th>{{$message->user_name}}</th>
                                    <th>{{$message->created_at}}</th>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
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
    setTimeout(function(){

        $(".alert").hide("2000")

    }, 3000);




    $('#myselect').change(function() {
    var opval = $(this).val();
    if(opval=="secondoption"){
        $('#myModal').modal("show");
    }
    });
</script>
@endsection