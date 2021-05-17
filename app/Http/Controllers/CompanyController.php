<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function getCompanies(Request $request) {

        $per_page = $request->input('per_page');
        $obj = new Company();
        $companies = $obj->paginate($per_page);
        
        return view('companies', ['companies' => $companies]);
    }
}
