<?php

namespace App;

use App\Zone_touristique;
use App\Hebergement;
use App\Avis_ville;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ville extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    public function zone_touristique()
    {
        return $this->hasMany('App\Zone_touristique');}
        
        public function hebergement()
    {
        return $this->hasMany('App\Hebergement');
    }
    public function avis_ville()
    {
        return $this->hasMany('App\Avis_ville');
    }
    protected $fillable = [
        'nom',
        'description' 
       
    ];
    
}
