<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSettings extends Model
{
    use HasFactory;

    protected $table = 'user_settings';

    protected $fillable = [
        'user_id',
        'nickname',
        'work_length',
        'short_break',
        'long_break',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
