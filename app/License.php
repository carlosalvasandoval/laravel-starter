<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Classes\Datatable;
use Illuminate\Support\Facades\Auth;

class License extends Model
{
    protected $fillable = ['name', 'integration_client_id', 'integration_secret_key','integration_site_url', 'type'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function grid()
    {
        $dataTable = new Datatable();
        $dataTable->setSelect(['name', 'type','integration_site_url', "DATE_FORMAT(created_at,'%d-%m-%Y')", "DATE_FORMAT(expiration_date,'%d-%m-%Y')", 'id']);
        $dataTable->setWhere('user_id', Auth::id());
        $dataTable->setFrom("licenses");
        return $dataTable->getData();
    }
}
