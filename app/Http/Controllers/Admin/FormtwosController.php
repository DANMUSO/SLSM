<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Formtwo;
use DB;
class FormtwosController extends Controller
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
        $formtwos = Formtwo::latest()->paginate(50);
        return view('admin.formtwos.index', compact('formtwos'))
        ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.formtwos.create');
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
     $form_formtwo = array(

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

     Formtwo::create($form_formtwo);
     if (session('key', 'Data saved successfully')) {
        Alert::success('Success!', session('key', 'Data saved successfully'));
    }
     return redirect('admin/formtwos/create')->with('success', 'Data saved successfully.');
     
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formtwo = Formtwo::findOrFail($id);
        $performs = DB::select("select * from ftwoperformances where id='$id'");
        $fees = DB::select("select * from formtwofees where id='$id'");
        return view('admin.formtwos.profile', compact('formtwo','performs','fees'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formtwo = Formtwo::findOrFail($id);
        return view('admin.formtwos.edit', compact('formtwo'));
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
        $form_formtwo = array(
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
            'image' => $new_name
         );
    
        Formtwo::whereid($id)->update($form_formtwo);
        if (session('key', 'Data updatedsuccessfully')) {
            Alert::success('Updated!', session('key', 'Data updated successfully'));
        }
        return redirect('admin/formtwos')->with('success', 'Data updated successfully.');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from formtwos where id = ?',[$id]);
        DB::delete('delete from formtwofees where id = ?',[$id]);
        DB::delete('delete from ftwoperformances where id = ?',[$id]);
        if (session('key', 'Data deleted successfully')) {
            Alert::error('Delete!', session('key', 'Data deleted successfully'));
        }
        return redirect('admin/formtwos')->with('danger', 'Data deleted successfully.');
    }
}
