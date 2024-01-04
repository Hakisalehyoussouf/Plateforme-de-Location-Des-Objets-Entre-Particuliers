<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class annonce extends Model
{
    protected $table='annonces';
    protected $fillable = ['id_objet','id_partenaire','date_dispo_start', 'date_sipo_end', 'jours_non_dispo', 'nbr_jour_min', 'Premium', 'status'];
    public $timestamps = false;
    //use HasFactory;



    public function objet(){
        return $this->belongsTo(Objet::class, 'id_objet', 'IdObjet');
    }

    
    public function user()
    {
        return $this->belongsTo(Users::class, 'id_partenaire', 'id');
    }

//recuperer toutes les annonces avec premium first
    public static function getAllAnnonce(){
       
        return self :: with('objet')
                    ->orderBy('Premium', 'desc')
                    ->get();
    }
// recuperer l'annonce avec son ID
    public static function getAnnonceByID($id){
        return self::with('objet.user')->where('id_annonce', $id)->first();
    }
 // recuperer l'annonce de memes categerie ;
 public static function getAllAnnoncesFromSameCat($cat){
    return self::with('objet')
                ->join('objet', 'annonces.id_objet', '=', 'objet.IdObjet')
                ->where('objet.CategorieObjet', $cat)
                ->orderBy('Premium', 'desc')
                
                ->get();
}




    
}