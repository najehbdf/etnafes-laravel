<?php

namespace App;

use App\Hebergement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Proprietaire extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    public function hebergement()
    {
        return $this->hasMany('App\Hebergement');}
        protected $fillable = [
            'nom',
            'prenom',
            'telephone',
            'email',
            'gouvernorat',
            'civilite' ,
            'image',
            'cin',
            'code_postale',
            'mot_passe'
           
        ];


}
