<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class semaines extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'numero_semaine',
        'jour_semaine',
        
        
    ];

    
    public function emploi_temps()
    {
        return $this->belongsTo(emploi_temps::class);
    }
}
