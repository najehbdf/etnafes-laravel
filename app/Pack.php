<?php

namespace App;
use App\Zone_pack;
use App\Pack_list_hebergement;
use App\Reservation;
use App\Avis_pack;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Pack extends Model

{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    public function zone_pack()
    {
        return $this->hasMany('App\Zone_pack');
     
    }
    public function reservation()
    {
        return $this->hasMany('App\Reservation');
     
    }

    public function pack_list_hebergement()
     {
        return $this->hasMany('App\Pack_list_hebergement');
     }
     public function avis_pack()
     {
        return $this->hasMany('App\Avis_pack');
     }
     protected $fillable = [
        'titre',
        'date_deb',
        'date_fin',
        'description', 
        'url_video',
        'nb_place_max',
        'nb_place_dispo',
        'vip',
        'prix_fix',
        'remise',
        'nb_place_remise',
        'taux_remise'
       
    ];
}
