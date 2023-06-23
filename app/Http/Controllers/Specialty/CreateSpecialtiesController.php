<?php

namespace App\Http\Controllers\Specialty;

use App\Http\Controllers\Controller;
use App\Models\Specialty;
use Illuminate\View\View;

class CreateSpecialtiesController extends Controller
{
    public function __invoke(): View
    {
        return view('specialties.create');
    }
}
