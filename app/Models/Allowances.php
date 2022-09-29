<?php

namespace App\Models;

use App\Models\Employees;
use App\Models\EmpolyeeAllowances;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Allowances extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function Employees()
    {
        return $this->hasMany(Employees::class);
    }
    public function EmpolyeeAllowances()
    {
        return $this->hasMany(EmpolyeeAllowances::class);
    }
}
