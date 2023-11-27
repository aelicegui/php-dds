<?php

namespace App\Models;
class RepoIncidente
{
    function comunidad($id){
        return Comunidad::where('id', $id)->first();
    }

    function incidentesComunidad($id){
        return Incidente::where('comunidad_id', $id)->get();
    }
}
