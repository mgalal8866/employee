<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpolyeeAllowances extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function allowances()
    {
        return $this->belongsTo(Allowances::class);
    }

}
