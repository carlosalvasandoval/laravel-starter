<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\License;
use App\Classes\IntegrationTypes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LicenseController extends Controller
{
    private const licenseTypes = [IntegrationTypes::WORDPRESS_TYPE => 'Wordpress', IntegrationTypes::SHOPIFY_TYPE => 'Shopyfy'];
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('license/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $licenseTypes = self::licenseTypes;
        return view('license/create', ['licenseTypes' => $licenseTypes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //TODO solo para admin
        die('forbidden');
        $this->runRules($request);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        if (!$user->license()->find($id)) {
            return redirect()->route('licenses.index')->with('error', 'Ud. no puede acceder a editar una licencia que no le pertenece.');
        }
        $licenseTypes = self::licenseTypes;
        $license = License::find($id);
        return view('license/edit', ['licenseTypes' => $licenseTypes, 'license' => $license]);
    }


    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $license
     *
     * @return void
     */
    public function update(Request $request, License $license)
    {
        $user = Auth::user();
        if (!$user->license()->find($license->id)) {
            return redirect()->route('licenses.index')->with('error', 'Ud. no puede acceder a editar una licencia que no le pertenece.');
        }
        $this->runRules($request);
        $license->fill($request->all());
        $license->save();
        return redirect()->route('licenses.index')->with('success', 'Registro creado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    /**
     * grid
     *
     * @param  mixed $request
     *
     * @return void
     */
    public function grid(Request $request)
    {
        if ($request->ajax()) {
            $license = new License;
            return $license->grid();
        }
    }

    /**
     * runRules
     *
     * @param  mixed $request
     *
     * @return void
     */
    private function runRules(Request $request)
    {
        $rules = ['name' => 'required', 'type' => 'required', 'integration_site_url' => 'required|url'];
        $messages  =  [
            'name.required'                 => 'El nombre es obligatorio',
            'type.required'                 => 'El tipo de integración es obligatorio',
            'integration_site_url.required' => 'La URL de su sitio es requerida',
            'integration_site_url.url'      => 'Debe ingresar una URL válida',
        ];
        $validator = Validator::make($request->all(), $rules, $messages)->validate();
    }
}
