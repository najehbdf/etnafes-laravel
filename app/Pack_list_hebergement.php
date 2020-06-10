<?php

namespace App;
use App\Hebergement;
use App\Pack;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Pack_list_hebergement extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function hebergement(){
        return $this->belongsTo('App\Hebergement','hebergement_id');
    }
    public function pack(){
        return $this->belongsTo('App\Pack','pack_id');
    }
    protected $fillable = [
        
        'hebergement_id',
        'pack_id' 
       
    ];
}
