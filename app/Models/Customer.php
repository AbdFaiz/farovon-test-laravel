<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // field mana saja yang bisa diisi 
    protected $fillable = [
        'name', 'email', 'phone', 'address'
    ];

    // atau bisa pakai guarded agar semua field bisa diisi:
    // protected $guarded = [];

    // relation one to many ke model contact
    public function contacts() {
        return $this->hasMany(Contact::class);
    }

    // relation to sales
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
