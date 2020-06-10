<?php

namespace App;

use App\Zone_touristique;
use App\Pack;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Zone_pack extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function zone_touristique(){
        return $this->belongsTo('App\Zone_touristique','zone_touristique_id');
    }
    public function pack(){
        return $this->belongsTo('App\Pack','pack_id');
    }
    protected $fillable = [
        'id_pack',
        'id_zone_touristique' 
       
    ];
}
