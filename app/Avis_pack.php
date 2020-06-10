<?php

namespace App;

use App\Pack;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Avis_pack extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function pack(){
        return $this->belongsTo('App\Pack','pack_id');
    }
    protected $fillable = [
        'email',
        'nbr_etoile',
        'pack_id'
        
       
    ];
}
