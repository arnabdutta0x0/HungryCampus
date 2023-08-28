<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodeValidation extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'code', 'expires_at', 'product_id'];
    protected $table = 'code_validations';

    protected $dates = ['expires_at'];

    public function isExpired()
    {
        return $this->expires_at->isPast();
    }
}