<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $timestamps = true;
    public $incrementing = true;

    // bisa di rubah
    protected $fillable = [
        'username',
        'password',
        'name',
    ];

    // Relasi kotak bisa
    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class, "user_id", "id");
    }
}