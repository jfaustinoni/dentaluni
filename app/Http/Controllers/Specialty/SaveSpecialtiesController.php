<?php

namespace App\Http\Controllers\Specialty;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Specialty;

class SaveSpecialtiesController extends Controller
{
    public function __invoke(Request $request)
    {

        $request->validate([
            'name' => 'required|max:100',
        ]);

        Specialty::create($request->post());
        return redirect()->route('specialties.index')->with('success','Especialidade cadastrada com sucesso.');
    }
}
