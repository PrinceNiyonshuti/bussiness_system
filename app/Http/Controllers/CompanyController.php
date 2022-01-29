<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.company.index', ['companies' => Company::latest()->paginate(10)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newCompany = new Company;
        $newCompany->name = $request['name'];
        $newCompany->address = $request['address'];
        $newCompany->telephone = $request['telephone'];
        $newCompany->website = $request['website'];
        $newCompany->director = $request['director'];
        $newCompany->logo = $request->file('logo')->store('company_logos');
        $newCompany->save();

        return redirect('/company')->with('success', 'Company created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('admin.company.edit', [
            'company' => $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $existingCompany =  Company::find($id);
        if ($existingCompany) {
            $existingCompany->name = $request['name'];
            $existingCompany->address = $request['address'];
            $existingCompany->telephone = $request['telephone'];
            $existingCompany->website = $request['website'];
            $existingCompany->director = $request['director'];
            if (isset($request['logo'])) {
                $existingCompany->logo = $request->file('logo')->store('company_logos');
            }
            $existingCompany->save();
        }
        return redirect('/company')->with('success', 'Company updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return back()->with('success', 'Company Deleted successfully!');
    }
}
