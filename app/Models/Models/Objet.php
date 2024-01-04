<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objet extends Model
{

    protected $table='objet';
    protected $fillable = ['NomObjet','descritpion_objet','CategorieObjet','nbr_image','PrixObjet','VilleObjet','IdPartenaire',];
    public $timestamps=false;
    //use HasFactory;


    public function user(){
        return $this->belongsTo(Users::class, 'IdPartenaire', 'id');
    }


    public function annonces(){
        return $this->hasMany(annonce::class, 'id_objet', 'IdObjet');
    }
   
}
