<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public $company_profile;
    public function index($id)
    {
        $this->company_profile = User::find($id);
        return view('company.index',['company'=>$this->company_profile]);
    }
}
