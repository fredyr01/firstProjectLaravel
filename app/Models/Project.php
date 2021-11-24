<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = ['title', 'url', 'description'];
    // Cambiar para que en el navegador el proyecto seleccionado no aparezca en la barra de navegacion
    // el id sino el titulo

    public function getRouteKeyName()
    {
        return 'url';
    }

}
