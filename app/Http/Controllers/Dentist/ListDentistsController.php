<?php

namespace App\Http\Controllers\Dentist;

use App\DataTables\DentistsDataTable;
use App\Http\Controllers\Controller;

class ListDentistsController extends Controller
{
    public function __invoke(DentistsDataTable $dataTable)
    {
        return $dataTable->render('dentists.index');
    }
}
