<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employees extends Model
{
    use HasFactory ,SoftDeletes;
    protected $dates =['deleted_at'], $guarded = [];
    protected $casts = [
        'attache' => 'array'
    ];

        public function salary()
        {
            return $this->belongsTo(Salary::class);
        }
        public function branch()
        {
            return $this->belongsTo(Branch::class);
        }
        public function department()
        {
            return $this->belongsTo(Department::class);
        }
        public function position()
        {
            return $this->belongsTo(Position::class);
        }
        public function getnamestateAttribute()
            {
                if($this->state==0){
                    return 'يعمل';
                }else{
                    return 'استقالة';
                }

            }

}
