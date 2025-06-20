<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
    ];

    public function blogpost()
    {
       return $this->belongsTo('App\Models\BlogPost');
    }
}
