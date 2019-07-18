<div class="form-group">
    {{ Form::text('name',null,['class' => 'form-control','placeholder'=>'Asígnale un nombre a tu licencia']) }}
</div>
<div class="form-group">
    {{ Form::text('integration_site_url',null,['class' => 'form-control','placeholder'=>'Secure Site URL: https://mysite.com']) }}
</div>
<div class="form-group">
    {{ Form::text('integration_client_id',null,['class' => 'form-control','placeholder'=>'Client id']) }}
</div>
<div class="form-group">
    {{ Form::text('integration_secret_key',null,['class' => 'form-control','placeholder'=>'Secret key']) }}
</div>
<div class="form-group">
    {{ Form::select('type', $licenseTypes, null, ['placeholder' => 'Seleccionar','class' => 'form-control']) }}
</div>
{{Form::submit('Guardar',['class' => 'btn btn-success'])}}