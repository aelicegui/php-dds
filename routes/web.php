<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ComunidadController;
use App\Models\RepoIncidente;
use Illuminate\View\View;

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

Route::get('/comunidad/{id}', function (string $id):View{
    $repoIncidente = new RepoIncidente();
    $comunidad = $repoIncidente->comunidad($id);
    $incidentes = $repoIncidente->incidentesComunidad($id);

    return view('welcome', ["comunidad"=>$comunidad, "incidentes"=>$incidentes]);
});
