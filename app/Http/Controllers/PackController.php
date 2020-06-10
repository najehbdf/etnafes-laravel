<?php

namespace App\Http\Controllers;

use App\Pack;
use Illuminate\Http\Request;

class PackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

     public function pack_images()
    {
        $packimage=Pack::all();
         foreach($packimage as $p){
            $tt=$p->zone_pack;

            foreach($tt as $tp){
            $ta=$tp->zone_touristique;
            $ts=$ta->image;
        
        }
   
        } 
        return response()->json(array('packimage'=>$packimage));
    }

    public function pack_reservation()
    {
        // $pack= Pack::with('reservation')->get();

        $pack= Pack::withCount('reservation')->orderBy('reservation_count','desc')->take(4)->get();
         /* foreach($pack as $p){
            $res=$p->reservation;

            foreach($res as $r){
            $rr=count($res);
        } 
        }  */
        return response()->json(array('pack'=>$pack));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function show(Pack $pack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function edit(Pack $pack)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pack $pack)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pack $pack)
    {
        //
    }
}
