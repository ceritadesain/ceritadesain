<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
     protected $fillable = ['answer_id', 'user_id', 'discussion_id','reply_content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function answer()
{
    return $this->belongsTo(Answer::class);
}
}