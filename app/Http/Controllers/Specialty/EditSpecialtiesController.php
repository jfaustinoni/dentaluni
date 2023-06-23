<?php

namespace App\Http\Controllers\Specialty;

use App\Http\Controllers\Controller;
use App\Models\Specialty;
use Illuminate\View\View;

class EditSpecialtiesController extends Controller
{
    public function __invoke(Specialty $specialty): View
    {
        return view('specialties.edit', compact('specialty'));
    }
}
