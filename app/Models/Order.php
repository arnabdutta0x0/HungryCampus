<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['status', 'customer_username', 'customer_email'];

    // Define a relationship with payments
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    // Define any additional methods or logic specific to orders
    // For example, you can define a method to calculate the total amount of the order
    public function getTotalAmount()
    {
        return $this->payments->sum('amount');
    }
}
