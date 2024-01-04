<?php

namespace App\Http\Controllers;

use App\Models\Models\annonce;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
    
        $annonces =annonce::getAllAnnonce();
        $annonces_rows = array_chunk($annonces->toArray(), 4); // Ajoutez par adnan!!!!!!!!!!!!!!!!!!!!!!!!!!!
        return view('homePage',compact('annonces_rows'));
    } 



        
    public  function search(Request $request){


/*
        $query = $request->input('query');
        $categorie = $request->input('categorie');
        $city = $request->input('city');
        
        
        if (empty($query) && $categorie == "Choisir une catégorie" && $city == "Choisir une ville") {
                 
            $annonces =annonce::all();
            $annonces_rows = array_chunk($annonces->toArray(), 4); 
            return view('homePage',compact('annonces_rows'));
           
        }else if(!empty($query) && $categorie == "Choisir une catégorie" && $city == "Choisir une ville") {

            // Définir les colonnes de recherche
            $columns = ['Description', 'status'];
        
            // Effectuer la recherche dans la base de données
            $annonces = annonce::where(function ($queryBuilder) use ($query, $columns) {
                                foreach ($columns as $column) {
                                    $queryBuilder->orWhere($column, 'LIKE', '%' . $query . '%');
                                }
                            })
                            ->get();
        
            $annonces_rows = array_chunk($annonces->toArray(), 4); 
            return view('homePage', compact('annonces_rows'));
        } else {

        
            // Effectuer la recherche dans la base de données
            $annonces = annonce::where('Categorie', 'LIKE', '%' . $categorie . '%')
                            ->orWhere('ville', 'LIKE', '%' . $city . '%')
                            ->get();
        
            $annonces_rows = array_chunk($annonces->toArray(), 4); 
            return view('homePage', compact('annonces_rows'));
        }


       

        //return view('homePage', compact('query', 'categorie', 'city'));
*/
    }

    
    


/*


    public function searchByChoice(Request $request){
        $query = $request->input('query');

        echo $query."\n";
        echo $query."\n";
        echo $query."\n";

        return view('homePage')->with('query', $query);

    }


    
    public function searchByCategorie(Request $request){

        //la ou je suis????????????????????????????????????????????????????????????????
        $categorie = $request->input('categorie');
        
        echo $categorie."\n";
        echo $categorie."\n";
        echo $categorie."\n";
        

        return view('homePage',compact('categorie'));
    }

    public function searchByCity(Request $request){

        //la ou je suis????????????????????????????????????????????????????????????????
        $city = $request->input('city');
        
        echo $city."\n";
        echo $city."\n";
        echo $city."\n";
        

        return view('homePage',compact('city'));
    }

*/
}
