<?php

namespace App;
use App\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function avis_hebergement()
    {
        return $this->hasMany('App\Reservation');}
        protected $fillable = [
        
            'nom',
            'prenom',
            'telephone',
            'email',
            'gouvernorat',
            'civilité'
            
           
        ];
}
