<?php

namespace App;
use App\Zone_touristique;
use App\Pack;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Image extends Model
{
   use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function zone_touristique(){
        return $this->belongsTo('App\Zone_touristique','zone_touristique_id');
    }
     
     protected $fillable = [
      
      'titre' ,
      'url_image' ,
      'zone_touristique_id' 
  ];
}
