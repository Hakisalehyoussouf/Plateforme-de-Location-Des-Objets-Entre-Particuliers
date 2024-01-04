<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PrintProduct;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Juste pour l'avenir(Ne la touche pas adnan)

Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route:: get('/contact',function(){
    return view('contact');
});
Route::get('/carriere',function(){
    return view('carriere');
});



//*******************C'est ici qu'il faut ajouter les routes que tu veux les ajouter****************************** */

//Route::get('/homePage',[HomePageController::class,'homepage']);

Route::resource('/',PostsController::class);

Route::post('/search',[PostsController::class,'search'])->name('/search');
Route::get('/product',[PrintProduct::class,'printProduct'])->name('/product');
Route::get('/redirectProduct',[PrintProduct::class,'redirectPrintProduct'])->name('/redirectProduct');






//Specialement pour l'admin(adnan, Ne la touches pas)
Route::prefix('admini')->group(function () {
    Route::get('/dashboard', [AdminController::class,'index'])->name('/admindashboard');
    
    Route::get('/annonces', [AdminController::class,'annonces'])->name('/adminannonces');
    Route::get('/suprimerannonce/{id_annonce}', [AdminController::class,'supprimerAnnonce'])->name('/supprimerannonce');

    Route::get('/partenaires', [AdminController::class,'partenaires'])->name('/adminpartenaires');

    Route::get('/clients', [AdminController::class,'clients'])->name('/adminclients');
    Route::get('/supprimerclient/{email_cli}', [AdminController::class,'supprimerClient'])->name('/supprimerclient');
    Route::get('/supprimerpartenaire/{email_par}', [AdminController::class, 'supprimerPartenaire'])->name('/supprimerpartenaire');

    Route::get('/avisClients', [AdminController::class,'avisClients'])->name('/adminavisclients');
    Route::get('/avisPartenaires', [AdminController::class,'avisPartenaires'])->name('/adminavispartenaires');
    Route::get('/avisPartenaires', [AdminController::class,'avisPartenaires'])->name('/adminavispartenaires');
});









//Juste pour les tests(Adnan, Ne les touches adnan)
Route::post('/searchByChoice',[PostsController::class,'searchByChoice'])->name('/searchByChoice');
Route::post('/searchByCategorie',[PostsController::class,'searchByCategorie'])->name('/searchByCategorie');
Route::post('/searchByCity',[PostsController::class,'searchByCity'])->name('/searchByCity');





//ou bien 

//Route::get('/homePage',['\App\Http\Controllers\HomePageController','homepage']);

// pour l'affichage du produit 
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product');


