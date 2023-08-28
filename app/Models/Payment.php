<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['payment_id', 'amount', 'currency', 'status', 'customer_username', 'customer_email', 'payment_method', 'transaction_details'];

    // Define a relationship with the order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Define any additional methods or logic specific to payments
    // For example, you can define a method to retrieve the formatted amount
    public function getFormattedAmount()
    {
        return '₹' . number_format($this->amount / 100, 2);
    }
}
