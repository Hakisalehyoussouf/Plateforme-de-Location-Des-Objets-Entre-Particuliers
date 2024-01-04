<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaires extends Model
{
    protected $table='commentaires'; 
    protected $fillable = ['id_client', 'id_annonce', 'note', 'commentaire', 'date_comment'];
    public $timestamps = false; 
    
    public function client(){
        return $this->belongsTo(Client::class, 'id_client');
    }
    
    public function annonce(){
        return $this->belongsTo(annonce::class, 'id_annonce');
    }

} 
