<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Formthree;
use DB;
class formthreesController extends Controller
{
    
    public function _construct()
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
        $formthrees = Formthree::latest()->paginate(50);
        return view('admin.formthrees.index', compact('formthrees'))
        ->with('i', (request()->input('page', 1) - 1) * 50);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('admin.formthrees.create');
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
        $form_formthree = array(
   
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
   
        Formthree::create($form_formthree);
        if (session('key', 'Data saved successfully')) {
            Alert::success('Success!', session('key', 'Data saved successfully'));
        }
        return redirect('admin/formthrees/create')->with('success', 'Data saved successfully.');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formthree = Formthree::findOrFail($id);
        $performs = DB::select("select * from fthreeperformances where id='$id'");
        $fees = DB::select("select * from formthreefees where id='$id'");
        return view('admin.formthrees.profile', compact('formthree','performs','fees'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formthree = Formthree::findOrFail($id);
        return view('admin.formthrees.edit', compact('formthree'));
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
        $form_formthree = array(
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
    
        Formthree::whereid($id)->update($form_formthree);
        if (session('key', 'Data updatedsuccessfully')) {
            Alert::success('Updated!', session('key', 'Data updated successfully'));
        }
        return redirect('admin/formthrees')->with('success', 'Data updated successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from formthrees where id = ?',[$id]);
        DB::delete('delete from formthreefees where id = ?',[$id]);
        DB::delete('delete from fthreeperformances where id = ?',[$id]);
        if (session('key', 'Data deleted successfully')) {
            Alert::error('Delete!', session('key', 'Data deleted successfully'));
        }
        return redirect('admin/formthrees')->with('danger', 'Data deleted successfully.');
    
    }
}
