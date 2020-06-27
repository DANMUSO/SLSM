<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Foneperformance;
class FoneperformancesController extends Controller
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
        $arr['foneperformances'] = Foneperformance::all();
        
        return view('admin.foneperformances.index')->with($arr);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('admin.foneperformances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Foneperformance $foneperformance)
    {
        $foneperformance -> id = $request -> id;
        $foneperformance -> mgrd      = $request -> mgrd;
        $foneperformance -> position      = $request -> position;
        $foneperformance -> clsp      = $request -> clsp;
        $foneperformance -> eng      = $request -> eng;
        $foneperformance -> kisw      = $request -> kisw;
        $foneperformance -> math     = $request -> math;
        $foneperformance -> chem      = $request -> chem;
        $foneperformance -> phy     = $request -> phy;
        $foneperformance -> bio     = $request -> bio;
        $foneperformance -> agr     = $request -> agr;
        $foneperformance -> bs     = $request -> bs;
        $foneperformance -> geo      = $request -> geo;
        $foneperformance -> cre     = $request -> cre;
        $foneperformance ->  ire    = $request -> ire;
        $foneperformance ->  gen    = $request -> gen;
        $foneperformance ->  hs    = $request -> hs;
        $foneperformance ->  hist    = $request -> hist;
        $foneperformance ->  ad    = $request -> ad;
        $foneperformance ->   ww   = $request -> ww;
        $foneperformance ->   mw   = $request -> mw;
        $foneperformance ->   bc   = $request -> bc;
        $foneperformance ->   ele   = $request -> ele;
        $foneperformance ->   dd   = $request -> dd;
        $foneperformance ->   at   = $request -> at;
        $foneperformance ->   cs   = $request -> cs;
        $foneperformance ->   french   = $request -> french;
        $foneperformance ->   german   = $request -> german;
        $foneperformance ->    arabic  = $request -> arabic;
        $foneperformance ->    ksl  = $request -> ksl;
        $foneperformance ->    music  = $request -> music;
        $foneperformance ->  marks     = $request -> marks;
        $foneperformance ->  point     = $request -> point;
        $foneperformance ->save();
        if (session('key', 'Marks added successfully')) {
            Alert::success('Success!', session('key', 'Marks added successfully'));
        }
        return view('admin.foneperformances.create');
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
        $foneperformance = Foneperformance::findOrFail($id);
        return view('admin.foneperformances.edit', compact('foneperformance'));
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
        $form_foneperformance = array(
   
            'mgrd' => $request->mgrd,
            'position' => $request->position,
            'clsp' => $request->clsp,
            'marks' => $request->marks,
            'point' => $request->point,
            'eng' => $request->eng,
            'kisw' => $request->kisw,
            'math' => $request->math,
            'chem' => $request->chem,
            'phy' => $request->phy,
            'bio' => $request->bio,
            'agr' => $request->agr,
            'bs' => $request->bs,
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
            'french' => $request->french,
            'german' => $request->german,
            'arabic' => $request->arabic,
            'ksl' => $request->ksl,
            'music' => $request->music,
            
         );
    
        Foneperformance::whereid($id)->update($form_foneperformance);
        if (session('key', 'Marks updateed successfully')) {
            Alert::success('Success!', session('key', 'Marks updated successfully'));
        }
        return redirect('admin/foneperformances')->with('success', 'Marks updated successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foneperformance = Foneperformance::findOrFail($id);
        $foneperformance ->delete();
        if (session('key', 'Marks deleted successfully')) {
            Alert::error('Delete!', session('key', 'Marks deleted successfully'));
        }
        return redirect('admin/foneperformances')->with('danger', 'Marks deleted successfully.');
    
    }
}
