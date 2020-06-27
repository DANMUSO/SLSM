<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Formone;
use DB;
class FormonesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $arr['formones'] = Formone::all();
        return view('admin.formones.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.formones.create');
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
        $form_formone = array(
   
           'id' => $request->id,
           'fname' => $request->fname,
           'status' => $request->status,
           'lname' => $request->lname,
           'phone' => $request->phone,
           'KCPEKCSEmarks' => $request->KCPEKCSEmarks,
           'email' => $request->email,
           'eng' => $request->eng,
           'kisw' => $request->kisw,
           'math' => $request->math,
           'chem' => $request->chem,
           'phy' => $request->phy,
           'bio' => $request->bio,
           'agr' => $request->agr,
           'bs' => $request->bs,
           'first_name' => $request->first_name,
           'last_name' => $request->last_name,
           'cell' => $request->cell,
           'kin_email' => $request->kin_email,
           'nationalid' => $request->nationalid,
           'kin_relationship' => $request->kin_relationship,
           'firstname' => $request->firstname,
           'lastname' => $request->lastname,
           'kin_cell' => $request->kin_cell,
           'kinemail' => $request->kinemail,
           'national_id' => $request->national_id,
           'kinrelationship' => $request->kinrelationship,
           'sweater' => $request->sweater,
           'shoes' => $request->shoes,
           'sock' => $request->sock,
           'shirt' => $request->shirt,
           't_shirt' => $request->t_shirt,
           'jacket' => $request->jacket,
           'scout' => $request->scout,
           'health' => $request->health,
           'east' => $request->east,
           'west' => $request->west,
           'south' => $request->south,
           'north' => $request->north,
           'discipline' => $request->discipline,
           'geo' => $request->geo,
           'hist' => $request->hist,
           'cre' => $request->cre,
           'ire' => $request->ire,
           'gen' => $request->gen,
           'hs' => $request->hs,
           'ad' => $request->ad,
           'ww' => $request->ww,
           'mw' => $request->mw,
           'bc' => $request->bc,
           'ele' => $request->ele,
           'dd' => $request->dd,
           'at' => $request->at,
           'cs' => $request->cs,
           'form' => $request->form,
           'stream' => $request->stream,
           'french' => $request->french,
           'german' => $request->german,
           'arabic' => $request->arabic,
           'ksl' => $request->ksl,
           'music' => $request->music,
           'image' => $new_name
        );
   
        Formone::create($form_formone);
        if (session('key', 'Data saved successfully')) {
            Alert::success('Success!', session('key', 'Data saved successfully'));
        }
        return redirect('admin/formones/create')->withSuccessMessage('Data saved successfully.');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formone = Formone::findOrFail($id);
        $performs = DB::select("select * from foneperformances where id='$id'");
        $fees = DB::select("select * from formonefees where id='$id'");
        return view('admin.formones.profile', compact('formone','performs','fees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formone = Formone::findOrFail($id);
        return view('admin.formones.edit', compact('formone'));
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
        $form_formone = array(
   
           'fname' => $request->fname,
           'lname' => $request->lname,
           'phone' => $request->phone,
           'KCPEKCSEmarks' => $request->KCPEKCSEmarks,
           'email' => $request->email,
           'eng' => $request->eng,
           'kisw' => $request->kisw,
           'math' => $request->math,
           'chem' => $request->chem,
           'phy' => $request->phy,
           'bio' => $request->bio,
           'agr' => $request->agr,
           'bs' => $request->bs,
           'first_name' => $request->first_name,
           'last_name' => $request->last_name,
           'cell' => $request->cell,
           'kin_email' => $request->kin_email,
           'nationalid' => $request->nationalid,
           'kin_relationship' => $request->kin_relationship,
           'firstname' => $request->firstname,
           'lastname' => $request->lastname,
           'kin_cell' => $request->kin_cell,
           'kinemail' => $request->kinemail,
           'national_id' => $request->national_id,
           'kinrelationship' => $request->kinrelationship,
           'sweater' => $request->sweater,
           'shoes' => $request->shoes,
           'sock' => $request->sock,
           'shirt' => $request->shirt,
           't_shirt' => $request->t_shirt,
           'jacket' => $request->jacket,
           'scout' => $request->scout,
           'health' => $request->health,
           'east' => $request->east,
           'west' => $request->west,
           'south' => $request->south,
           'north' => $request->north,
           'discipline' => $request->discipline,
           'geo' => $request->geo,
           'hist' => $request->hist,
           'cre' => $request->cre,
           'ire' => $request->ire,
           'gen' => $request->gen,
           'hs' => $request->hs,
           'ad' => $request->ad,
           'ww' => $request->ww,
           'mw' => $request->mw,
           'bc' => $request->bc,
           'ele' => $request->ele,
           'dd' => $request->dd,
           'at' => $request->at,
           'cs' => $request->cs,
           'form' => $request->form,
           'stream' => $request->stream,
           'french' => $request->french,
           'german' => $request->german,
           'arabic' => $request->arabic,
           'ksl' => $request->ksl,
           'music' => $request->music,
           'image' => $image_name
         );
    
        Formone::whereid($id)->update($form_formone);
        if (session('key', 'Data updatedsuccessfully')) {
            Alert::success('Updated!', session('key', 'Data updated successfully'));
        }
        return redirect('admin/formones')->with('success', 'Data updated successfully.');
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        DB::delete('delete from formones where id = ?',[$id]);
        DB::delete('delete from formonefees where id = ?',[$id]);
        DB::delete('delete from foneperformances where id = ?',[$id]);
        if (session('key', 'Data deleted successfully')) {
            Alert::error('Delete!', session('key', 'Data deleted successfully'));
        }
        return redirect('admin/formones')->with('danger', 'Data deleted successfully.');
    
    }
}
