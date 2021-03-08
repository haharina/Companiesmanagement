<?php

namespace App\Http\Controllers;

use App\Companies;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Companies::latest()->paginate(10);
        return view('companies.index', compact('companies'))
                ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'    =>  'required',
            'logo'    =>  'image|min:100cm'
        ]);

        $logo = $request->file('logo');

        $new_name = rand() . '.' . $logo->getClientOriginalExtension();
        $logo->move(public_path('logo'), $new_name);
        $form_data = array(
            'name'          => $request->name,
            'email'         => $request->email,
            'logo'          => $new_name,
            'website'       => $request->website
        );

        Companies::create($form_data);

        return redirect('companies.index')->with('success', 'Data Added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function show(Companies $companies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $companies = Companies::findOrFail($id);
        return view('companies.edit', compact('companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Companies $companies, $id)
    {
        $logo_name = $request->hidden_logo;
        $logo = $request->file('logo');
        if($logo != '')
        {
            $request->validate([
                'name'    =>  'required',
                'logo'    =>  'image|min:100 100'
            ]);

            $logo_name = rand() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('logo'), $logo_name);
        }
        else
        {
            $request->validate([
                'name'    =>  'required',
            ]);
        }

        $form_data = array(
            'name'          => $request->name,
            'email'         => $request->email,
            'logo'          => $logo_name,
            'website'       => $request-> website
        );
  
        Companies::whereId($id)->update($form_data);

        return redirect('companies.index')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $companies = Companies::findOrFail($id);
        $companies->delete();

        return redirect('companies.index')->with('success', 'Data is successfully deleted');
    }
}
