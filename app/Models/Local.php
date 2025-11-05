<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;

    protected $fillable = ['name','description'];



    public function selectLocals(){
        
        $resource = $this::all()->where('ativo', '=', '1');
        $resource_lista = $resource->pluck('name','id');
      
     
        return  $resource_lista;
        
       

    }
    
}
