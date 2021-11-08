<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class UserLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lat',
        'long'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
