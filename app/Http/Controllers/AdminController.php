<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\annonce;
use App\Models\Models\Client;
use App\Models\Models\partenaire;

class AdminController extends Controller
{
    public function index(Request $request){

    
        return view('admin/dashboard');
    }


    //La gestion des clients
    public function annonces(Request $request){

        $annonces =annonce::all();
        return view('admin/annonces',compact('annonces'));
    }
    public function supprimerAnnonce($id_annonce){

        annonce::where('id_annonce',$id_annonce)->delete();
        return redirect()->back(); 
    }



    //La gestion des clients
    public function clients(Request $request){

        $clients =client::all();
        return view('admin/clients',compact('clients'));
    }
    public function supprimerClient($email_cli){

        Client::where('EMAIL',$email_cli)->delete();
        return redirect()->back();  
    }



    //La gestion des partenaires
    public function partenaires(Request $request){
        
        $partenaires =partenaire::all();
        return view('admin/partenaires',compact('partenaires'));
    }
    public function supprimerPartenaire($email_par){

        partenaire::where('EMAIL',$email_par)->delete();
        return redirect()->back();  
    }


    //La gestion des avis
    public function avisClients(Request $request){
        echo 'Bonjour! C est avisClients';
    }

        
    public function avisPartenaires(Request $request){
        echo 'Bonjour! C est avisPartenaires';
    }


}
