<?php

namespace App\Models\Supplier;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class business_registries extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function business(){
        return $this->belongsTo(Supplier::class);
    }

    // protected $fillable = [
    //     'id',
    //     'type_of_permit_1',
    //     'type_of_permit_2',
    //     'type_of_permit_3',
    //     'type_of_permit_4',

    //     'br_permit_no_1',
    //     'br_permit_no_2',
    //     'br_permit_no_3',
    //     'br_permit_no_4',

    //     'br_date_issued_1',
    //     'br_date_issued_2',
    //     'br_date_issued_3',
    //     'br_date_issued_4',

    //     'br_expi_date_1',
    //     'br_expi_date_2',
    //     'br_expi_date_3',
    //     'br_expi_date_4',
    // ];
}
