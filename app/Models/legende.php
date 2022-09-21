<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class legende extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'description',
        
    ];
    public function emploi_temps()
    {
        return $this->belongsTo(emploi_temps::class);
    }
   
}
