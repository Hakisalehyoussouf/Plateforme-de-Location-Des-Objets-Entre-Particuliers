<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Models\annonce;
// haki ce controller pour l'affichage du product page
class ProductController extends Controller
{
    //
    public function show($id){
        $annonce=annonce::getAnnonceByID($id);
        
         $annonceOfcategorie=annonce::getAllAnnoncesFromSameCat($annonce['objet']['CategorieObjet']);
         
        return view('productPage',['mainAnnonce' => $annonce, 'annonceDememecateg' => $annonceOfcategorie]);


    }
}
