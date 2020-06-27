<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use App\Institution;
use DB;
class InstitutionsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institutions = Institution::latest()->paginate(50);
        return view('admin.institutions.index', compact('institutions'))
        ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.institutions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_institution = array(
            'premise' => $request->premise,
            'type' => $request->type,
            'capacity' => $request->capacity,
            'resources' => $request->resources,
            'required' => $request->required,
            'image' => $new_name
        );
   
        institution::create($form_institution);
        if (session('key', 'Premise added successfully')) {
            Alert::success('Success!', session('key', 'Premise added successfully'));
        }
        return redirect('admin/institutions/create')->with('success', 'Premise saved successfully.');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $institution = Institution::findOrFail($id);
        return view('admin.institutions.edit', compact('institution'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if ($image != '')
        {
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {

        }
        $institution = array(
           'premise' => $request->premise,
           'type' => $request->type,
            'resources' => $request->resources,
            'required' => $request->required,
            'image' => $image_name
         );
    
        institution::whereid($id)->update($institution);
        if (session('key', 'institution update successfully')) {
            Alert::success('Success!', session('key', 'institution updated successfully'));
        }
        return redirect('admin/institutions')->with('success', 'institution updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from institutions where id = ?',[$id]);
        if (session('key', 'Premise deleted successfully')) {
            Alert::error('Delete!', session('key', 'Premise deleted successfully'));
        }
        return redirect('admin/institutions');
    
    }
}
