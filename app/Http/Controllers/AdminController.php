<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index', ['companies' => Company::with('clients', 'employees')->latest()->paginate(4)]);
        // return view('admin.index', ['companies' => Company::latest()->paginate(4)]);
    }

    public function show(Company $company)
    {

        return view('admin.read', [
            'company' => $company
        ]);
    }
}
