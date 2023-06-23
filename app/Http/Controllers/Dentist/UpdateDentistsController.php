<?php

namespace App\Http\Controllers\Dentist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dentist;

class UpdateDentistsController extends Controller
{
    public function __invoke(Request $request, Dentist $dentist)
    {
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|max:100',
            'cro' => 'required|max:11',
            'cro_uf' => 'required|max:2',
            'specialties' => 'required'
        ]);

        $dentist->fill($request->post())->save();
        $dentist->specialties()->sync($request->input('specialties'));
        return redirect()->route('dentists.index')->with('success','Dentista editado com sucesso');
    }
}
