<?php

namespace App\Http\Controllers\Specialty;

use App\DataTables\SpecialtiesDataTable;
use App\Http\Controllers\Controller;

class ListSpecialtiesController extends Controller
{
    public function __invoke(SpecialtiesDataTable $dataTable)
    {
        return $dataTable->render('specialties.index');
    }
}
