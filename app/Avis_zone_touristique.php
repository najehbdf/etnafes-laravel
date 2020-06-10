<?php

namespace App;
use App\Ville;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Avis_zone_touristique extends Model
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
        
        'zone_touristique_id',
        'pack_id'
       
    ];
}
