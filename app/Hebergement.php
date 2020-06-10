<?php

namespace App;
use App\Avis_hebergement;
use App\Pack_list_hebergement;
use App\Proprietaire;
use App\Ville;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Hebergement extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    public function avis_hebergement()
    {
        return $this->hasMany('App\Avis_hebergement');}

        public function ville(){
            return $this->belongsTo('App\Ville','ville_id');
        }
        public function proprietaire(){
            return $this->belongsTo('App\Proprietaire','proprietaire_id');
        }

        public function pack_list_hebergement()
    {
        return $this->hasMany('App\Pack_list_hebergement');

    }
    protected $fillable = [
        'nom',
        'nbr_etoile',
        'nbr_chambre_dispo',
        'description',
        'wifi',
        'night_club',
        'celebataire' ,
        'burkini',
        'proprietaire_id',
        'ville_id'
       
    ];

}
