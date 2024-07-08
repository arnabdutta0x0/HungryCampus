<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForgotPass extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'code', 'expires_at'];
    protected $table = 'forgot_pass';

    protected $dates = ['expires_at'];

    public function isExpired()
    {
        return $this->expires_at->isPast();
    }
}