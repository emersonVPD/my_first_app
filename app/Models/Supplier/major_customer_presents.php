<?php

namespace App\Models\Supplier;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class major_customer_presents extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function major(){                       
        return $this->belongsTo(Supplier::class);
    }
}
