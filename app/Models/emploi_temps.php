<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emploi_temps extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nom_emploi',
        
    ];
       /**
     * Get the comments for the blog post.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function semaines()
    {
        return $this->hasMany(semaine::class);
    }
    public function legende()
    {
        return $this->hasMany(legende::class);
    }  
}
