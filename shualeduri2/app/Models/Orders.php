<?php


namespace App\Models;


use http\Client\Curl\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_unique_code',
        'paid_amount',
        'user_id',
    ];

    public function users() {
        return $this->belongsTo(User::class,'user_id');
    }
}
