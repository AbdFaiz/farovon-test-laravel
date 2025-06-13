<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id', 'name', 'email', 'phone'
    ];

    // atau bisa pakai guarded agar semua field bisa diisi:
    // protected $guarded = [];

    // relation one to many ke model customer
    public function customers() {
        return $this->belongsTo(Customer::class);
    }
}
