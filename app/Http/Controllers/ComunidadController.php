<?php

namespace App\Http\Controllers;

class ComunidadController extends Controller
{
    public function show(string $id): View
    {
        $repoIncidente = new \RepoIncidente();
        $comunidad = $repoIncidente->comunidad($id);
        $incidentes = $comunidad->getIncidentes();

        return view('welcome', compact('comunidad', 'incidentes'));
    }
}
