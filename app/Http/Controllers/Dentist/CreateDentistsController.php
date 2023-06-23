<?php

namespace App\Http\Controllers\Dentist;

use App\Http\Controllers\Controller;
use App\Models\Specialty;
use Illuminate\View\View;

class CreateDentistsController extends Controller
{
    public function __invoke(): View
    {
        $specialties = Specialty::all();
        return view('dentists.create', compact('specialties'));
    }
}
