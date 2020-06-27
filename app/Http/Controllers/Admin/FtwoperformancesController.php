<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Ftwoperformance;
class FtwoperformancesController extends Controller
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
        $arr['ftwoperformances'] = Ftwoperformance::all();
        return view('admin.ftwoperformances.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ftwoperformances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Ftwoperformance $ftwoperformance)
    {
        $ftwoperformance -> id = $request -> id;
        $ftwoperformance -> mgrd      = $request -> mgrd;
        $ftwoperformance -> position      = $request -> position;
        $ftwoperformance -> clsp      = $request -> clsp;
        $ftwoperformance -> eng      = $request -> eng;
        $ftwoperformance -> kisw      = $request -> kisw;
        $ftwoperformance -> math     = $request -> math;
        $ftwoperformance -> chem      = $request -> chem;
        $ftwoperformance -> phy     = $request -> phy;
        $ftwoperformance -> bio     = $request -> bio;
        $ftwoperformance -> agr     = $request -> agr;
        $ftwoperformance -> bs     = $request -> bs;
        $ftwoperformance -> geo      = $request -> geo;
        $ftwoperformance -> cre     = $request -> cre;
        $ftwoperformance ->  ire    = $request -> ire;
        $ftwoperformance ->  gen    = $request -> gen;
        $ftwoperformance ->  hs    = $request -> hs;
        $ftwoperformance ->  hist    = $request -> hist;
        $ftwoperformance ->  ad    = $request -> ad;
        $ftwoperformance ->   ww   = $request -> ww;
        $ftwoperformance ->   mw   = $request -> mw;
        $ftwoperformance ->   bc   = $request -> bc;
        $ftwoperformance ->   ele   = $request -> ele;
        $ftwoperformance ->   dd   = $request -> dd;
        $ftwoperformance ->   at   = $request -> at;
        $ftwoperformance ->   cs   = $request -> cs;
        $ftwoperformance ->   french   = $request -> french;
        $ftwoperformance ->   german   = $request -> german;
        $ftwoperformance ->    arabic  = $request -> arabic;
        $ftwoperformance ->    ksl  = $request -> ksl;
        $ftwoperformance ->    music  = $request -> music;
        $ftwoperformance ->  marks     = $request -> marks;
        $ftwoperformance ->  point     = $request -> point;
        $ftwoperformance ->save();
        if (session('key', 'Marks added successfully')) {
            Alert::success('Success!', session('key', 'Marks added successfully'));
        }
        return view('admin.ftwoperformances.create');
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
        $ftwoperformance = ftwoperformance::findOrFail($id);
        return view('admin.ftwoperformances.edit', compact('ftwoperformance'));
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
        $form_ftwoperformance = array(
   
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
    
        ftwoperformance::whereid($id)->update($form_ftwoperformance);
        if (session('key', 'Marks updatedsuccessfully')) {
            Alert::success('Success!', session('key', 'Marks updated successfully'));
        }
        return redirect('admin/ftwoperformances')->with('success', 'Marks updated successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ftwoperformance = Ftwoperformance::findOrFail($id);
        $ftwoperformance ->delete();
        if (session('key', 'Marks deleted successfully')) {
            Alert::error('Delete!', session('key', 'Marks deleted successfully'));
        }
        return redirect('admin/ftwoperformances')->with('danger', 'Marks deleted successfully.');
    
    }
}
