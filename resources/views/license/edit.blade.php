@extends('layouts.app')

@section('content')
<div class="container">
    {{ Form::model($license,['route'=>['licenses.update',$license->id]]) }}
    @method('PUT')
    @include('license.partials.form')
    {{ Form::close() }}
</div>
@endsection