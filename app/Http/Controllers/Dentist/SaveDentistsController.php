<?php

namespace App\Http\Controllers\Dentist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dentist;

class SaveDentistsController extends Controller
{
    public function __invoke(Request $request)
    {

        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|max:100',
            'cro' => 'required|max:11',
            'cro_uf' => 'required|max:2',
            'specialties' => 'required'
        ]);

        $dentist = Dentist::create($request->post());
        $dentist->specialties()->sync($request->input('specialties'), false);

        return redirect()->route('dentists.index')->with('success','Dentista cadastrado com sucesso.');
    }
}
