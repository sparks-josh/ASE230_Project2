<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class IssueComment extends Model
{protected $fillable = ['comment', 'issue_id', 'user_id'];
    public function issue()
    {return $this->belongsTo(Issue::class);}
    public function user()
    {return $this->belongsTo(User::class);}}