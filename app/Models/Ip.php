<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Ip extends Model
{
    use HasFactory;
    protected $fillable = ['name','description', 'ip','mac','user_id','local_id','tipo_id'];
    public function locals(): BelongsTo
    {
        
        return $this->belongsTo(Local::class);
    }


  
}
