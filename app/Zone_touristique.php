<?php

namespace App;
use App\Ville;
use App\Image;
use App\Zone_pack;
use App\Avis_zone_touristique;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Zone_touristique extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function ville(){
        return $this->belongsTo('App\Ville','ville_id');
    }
    public function avis_zone_touristique(){
        return $this->hasMany('App\Avis_zone_touristique');
    }
    public function zone_pack(){
        return $this->hasMany('App\Zone_pack');
    }
    public function image(){
        return $this->hasMany('App\Image');
    }

    


    protected $fillable = [
        'nom',
        'description' ,
        'url_video' ,
        'id_ville' 
    ];
}
