<?php

namespace App;
use App\Hebergement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Avis_hebergement extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
   /*  public function uxtest(){*/
    public function hebergement(){
        return $this->belongsTo('App\Hebergement','hebergement_id');
    }
   
    //fin...Etapes-question-scenario...
    protected $fillable = [
        'email',
        'nbr_etoile',
        'hebergement_id'
        
    ];
}
