<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pack;
use App\Ville;


class PackVilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newpacks=Pack::orderBy('created_at', 'desc')->take(4)->get();
        return response()->json(array('newpacks'=>$newpacks));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pack=new Pack;
        $pack->nom=$request->nom;
        $pack->du=$request->du;
        $pack->au=$request->au;
        $pack->type=$request->type;
        $pack->ville_id=$request->ville_id;
        $pack->description=$request->description;

          $pack->save();
          return response()->json($pack);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $packdetail = Pack::with('zone_pack')->find($id);
        $packdetail = Pack::find($id);
        $pc=$packdetail->zone_pack;
        foreach($pc as $pd)
        {
            $p=$pd->zone_touristique->image;

        }
        return response()->json(array('packdetail'=>$packdetail));
    }

    public function showPacksVille($id)
    {

        $packs = Ville::find($id)->packs;
        // dd($packs);
             return response()->json(array('packs'=>$packs));
    }


    public function search(Request $request)
    {
     $pack=new Pack();
     $packs=$pack
    ->where('ville_id', '=', $request->input('ville_id'))
     ->where('date_deb', '=', $request->input('date_deb'))
     ->where('vip', '=', $request->input('vip'))
    //  ->where('au', '=', $request->input('au'))
     
    //  ->where('ville_id', $pack->getKey())
  

    //  ->where('ville_id', '=', $request->input('SelectVille'))
    //  ->where('category_civil', '=', $request->input('SelectCategoryCivil'))
     ->get();
     
     
     return response()->json(array('packs'=>$packs));      
 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
