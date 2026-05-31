<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = ['service_name', 'amount', 'currency', 'payment_method', 'status', 'card_holder_name', 'transaction_id'];
}
