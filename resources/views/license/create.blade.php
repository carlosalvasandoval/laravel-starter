@extends('layouts.app')

@section('content')
<div class="container">

    {{ Form::open(['route' => 'license.store']) }}
    @include('license.partials.form')
    {{ Form::close() }}
</div>
@endsection

@section('scripts')
{{-- <script src="{{asset('vendor/DataTables/datatables.min.js')}}"></script>
<script src="{{asset('js/common/common_datatable_config.js')}}"></script>
<script src="{{asset('js/license/index.js')}}"></script> --}}
@endsection