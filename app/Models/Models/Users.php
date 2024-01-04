<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    
    protected $table = 'users';
    protected $fillable  = ['name','email','phone','role','password'];
    public $timestamps = false; 


    public function objets(){
        return $this->hasMany(Objet::class, 'IdPartenaire', 'id');
    }
    
    public function annonces(){
        return $this->hasMany(annonce::class, 'id_partenaire', 'id');
    }


}
