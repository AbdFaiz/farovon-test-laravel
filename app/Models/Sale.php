<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id', 'sale_date', 'qty', 'address'
    ];

    protected $casts = [
        'sale_date' => 'date:Y-m-d',
    ];    

    // atau bisa pakai guarded agar semua field bisa diisi:
    // protected $guarded = [];

    public function customer() {
        return $this->belongsTo(Customer::class);
    }
}
