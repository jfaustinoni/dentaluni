<?php

namespace App\Http\Controllers\Dentist;

use App\Http\Controllers\Controller;
use App\Models\Dentist;
use App\Models\Specialty;
use Illuminate\View\View;

class EditDentistsController extends Controller
{
    public function __invoke(Dentist $dentist): View
    {
        $specialties = Specialty::all();
        return view('dentists.edit', compact('dentist', 'specialties'));
    }
}
