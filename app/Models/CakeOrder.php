<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CakeOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'description',
        'slug',
        'image',
        'delivery',
        'address',
        'user_id',
        
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
