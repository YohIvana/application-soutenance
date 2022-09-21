<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pointage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'signature',
        'heure_A',
        'heure_D',
        'date'
    ];
     /**
     * Get the comments for the blog post.
     */
    public function user()
    {
        return $this->belongsTo(users::class);
    }
}
