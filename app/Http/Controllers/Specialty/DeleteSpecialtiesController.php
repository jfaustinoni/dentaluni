<?php

namespace App\Http\Controllers\Specialty;

use App\Http\Controllers\Controller;
use App\Models\Specialty;

class DeleteSpecialtiesController extends Controller
{
    public function __invoke(Specialty $specialty)
    {
        $specialty->delete();
        return redirect()->route('specialties.index')->with('success','Especialidade excluida com sucesso.');
    }
}
