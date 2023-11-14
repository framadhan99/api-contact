<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $primaryKey = "id";
    protected $keyType = "int";
    protected $table = "contacts";
    public $incrementing = true;
    public $timestamps = true;

    public function user(): BelongsTo
    {
        return $this->belongsTo(Contact::class, "user_id", "id");
    }

    public function addresses() : HasMany
    {
        return $this->hasMany(Address::class, "contact_id", "id");
    }
}