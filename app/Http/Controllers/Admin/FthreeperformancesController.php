<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Fthreeperformance;
class FthreeperformancesController extends Controller
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
        $arr['fthreeperformances'] = Fthreeperformance::all();
        return view('admin.fthreeperformances.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fthreeperformances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Fthreeperformance $fthreeperformance)
    {
        $fthreeperformance -> id = $request -> id;
        $fthreeperformance -> mgrd      = $request -> mgrd;
        $fthreeperformance -> position      = $request -> position;
        $fthreeperformance -> clsp      = $request -> clsp;
        $fthreeperformance -> eng      = $request -> eng;
        $fthreeperformance -> kisw      = $request -> kisw;
        $fthreeperformance -> math     = $request -> math;
        $fthreeperformance -> chem      = $request -> chem;
        $fthreeperformance -> phy     = $request -> phy;
        $fthreeperformance -> bio     = $request -> bio;
        $fthreeperformance -> agr     = $request -> agr;
        $fthreeperformance -> bs     = $request -> bs;
        $fthreeperformance -> geo      = $request -> geo;
        $fthreeperformance -> cre     = $request -> cre;
        $fthreeperformance ->  ire    = $request -> ire;
        $fthreeperformance ->  gen    = $request -> gen;
        $fthreeperformance ->  hs    = $request -> hs;
        $fthreeperformance ->  hist    = $request -> hist;
        $fthreeperformance ->  ad    = $request -> ad;
        $fthreeperformance ->   ww   = $request -> ww;
        $fthreeperformance ->   mw   = $request -> mw;
        $fthreeperformance ->   bc   = $request -> bc;
        $fthreeperformance ->   ele   = $request -> ele;
        $fthreeperformance ->   dd   = $request -> dd;
        $fthreeperformance ->   at   = $request -> at;
        $fthreeperformance ->   cs   = $request -> cs;
        $fthreeperformance ->   french   = $request -> french;
        $fthreeperformance ->   german   = $request -> german;
        $fthreeperformance ->    arabic  = $request -> arabic;
        $fthreeperformance ->    ksl  = $request -> ksl;
        $fthreeperformance ->    music  = $request -> music;
        $fthreeperformance ->  marks     = $request -> marks;
        $fthreeperformance ->  point     = $request -> point;
        $fthreeperformance ->save();
        if (session('key', 'Marks added successfully')) {
            Alert::success('Success!', session('key', 'Marks added successfully'));
        }
        return view('admin.fthreeperformances.create');
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
        $fthreeperformance = fthreeperformance::findOrFail($id);
        return view('admin.fthreeperformances.edit', compact('fthreeperformance'));
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
        $form_fthreeperformance = array(
   
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
    
        fthreeperformance::whereid($id)->update($form_fthreeperformance);
        if (session('key', 'Marks updated successfully')) {
            Alert::success('Success!', session('key', 'Marks updated successfully'));
        }
        return redirect('admin/fthreeperformances')->with('success', 'Marks updated successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
        $fthreeperformance = Fthreeperformance::findOrFail($id);
        $fthreeperformance ->delete();
        if (session('key', 'Marks deleted successfully')) {
            Alert::error('Delete!', session('key', 'Marks deleted successfully'));
        }
        return redirect('admin/fthreeperformances')->with('danger', 'Marks deleted successfully.');
    
    }
}
