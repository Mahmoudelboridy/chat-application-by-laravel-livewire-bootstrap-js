<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class messages extends Model
{
    use HasFactory;
    public $table="messages";
    protected $fillable=[
        "id",
        "sender_id",
        "receiver_id",
        "body",
        "created_at"
    ];
    protected $hidden=[
        "updated_at"
    ];
    
    public function ston() : HasOne
    {
        return $this->hasOne(User::class,'id','sender_id');
    }
 
}
