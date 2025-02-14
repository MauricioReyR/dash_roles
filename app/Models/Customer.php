<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $fillable = [
        'document_type',
        'document',
        'name',
        'last_name',
        'phone',
    ];

    public function sales()
    {
        return $this->hasMany(SaleOrder::class);
    }
}
