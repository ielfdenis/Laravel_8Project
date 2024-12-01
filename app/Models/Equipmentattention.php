<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipmentattention extends Model
{
    use HasFactory;

    protected $table = 'equipmentattentions';

    protected $guarded = [];



    public function task()
    {
        return $this->belongsTo(Task::class);
    }








}
