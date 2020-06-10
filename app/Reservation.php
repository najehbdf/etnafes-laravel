<?php

namespace App;

use App\Client;
use App\Pack;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Reservation extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function client(){
        return $this->belongsTo('App\Client','client_id');
    }
    public function pack(){
        return $this->belongsTo('App\Pack','pack_id');
    }
    protected $fillable = [
        'date',
        'nbr_place',
        'prix_totale',
        'prix_remise',
        'client_id',
        'pack_id' 
       
    ];
    
}
