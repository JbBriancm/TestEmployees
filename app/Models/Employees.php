<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'start_date',
        'position_id',
        'company_id'
    ];

    public function company(){

        return $this->hasOne(Companies::class, 'id', 'company_id');
    }

    public function position(){

        return $this->hasOne(Positions::class, 'id', 'position_id');
    }
}
