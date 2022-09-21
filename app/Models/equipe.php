<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
class equipe extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'categorie',
        'nom_participantequipe',
    ];
       /**
     * Get the comments for the blog post.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
    
}
