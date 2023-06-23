<?php

namespace App\Http\Controllers\Dentist;

use App\Http\Controllers\Controller;
use App\Models\Dentist;
use Illuminate\View\View;

class DeleteDentistsController extends Controller
{
    public function __invoke(Dentist $dentist)
    {
        $dentist->delete();
        return redirect()->route('dentists.index')->with('success','Dentista excluido com sucesso.');
    }
}
