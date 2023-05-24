<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description'

    ];
    public function type()
    {
        return $this->belongTo(Type::class, 'foreign_key');
    }
}