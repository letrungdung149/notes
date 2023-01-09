<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'note_id'
    ];

    protected $casts = [
      'note_id' => 'array',
    ];

    public function note()
    {
        return $this->belongsTo(Note::class,'id');
    }
}
