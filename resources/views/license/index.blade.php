@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{asset('vendor/DataTables/datatables.min.css')}}">
@endsection
@section('content')
<div class="container">
    @include('layouts.partials.dataTable',['colums'=>['Nombre','Tipo','Fecha creación','Fecha caducidad','Acciones']])
    <div class="d-none" id="buttons_crud">
        <center>
            <a href="" class="btn btn-sm btn-warning edit">
                <i class="fas fa-edit"></i> Edit
            </a>
            <a href="" class="btn btn-sm btn-info sync">
                <i class="fas fa-sync"></i> sync
            </a>
        </center>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{asset('vendor/DataTables/datatables.min.js')}}"></script>
<script src="{{asset('js/common/common_datatable_config.js')}}"></script>
<script src="{{asset('js/license/index.js')}}"></script>
@endsection