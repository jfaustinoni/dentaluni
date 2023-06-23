<?php

namespace App\Http\Controllers\Specialty;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Specialty;

class UpdateSpecialtiesController extends Controller
{
    public function __invoke(Request $request, Specialty $specialty)
    {
        $request->validate([
            'name' => 'required|max:100'
        ]);

        $specialty->fill($request->post())->save();
        return redirect()->route('specialties.index')->with('success','Especialidade editada com sucesso');
    }
}
