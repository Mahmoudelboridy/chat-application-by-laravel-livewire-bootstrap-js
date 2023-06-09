<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Model
{
    use HasFactory;
   
    public $table="users";
    protected $fillable=[
        "name",
        "email",
        "password",
        "image",
        "role",
        "id"
    ];
    protected $hidden=[
        "created_at",
        "updated_at"
    ];
   
}