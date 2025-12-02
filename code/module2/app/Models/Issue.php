<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{public function board()
    {return $this->belongsTo(Board::class);}
    public function user()
    {return $this->belongsTo(User::class);}
    public function comments()
    {return $this->hasMany(IssueComment::class);}
}