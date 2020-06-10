<?php

namespace App;
use App\Ville;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Avis_ville extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function ville(){
        return $this->belongsTo('App\Ville','ville_id');
    }
    protected $fillable = [
        'email',
        'nbr_etoile' ,
        'pack_id'
       
    ];
}
