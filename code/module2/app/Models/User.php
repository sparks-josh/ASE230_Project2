<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model
{protected $fillable = ['name', 'email', 'password'];
    public function boards()
    {return $this->hasMany(Board::class);}
    public function issues()
    {return $this->hasMany(Issue::class);}
    public function comments()
    {return $this->hasMany(IssueComment::class);}}