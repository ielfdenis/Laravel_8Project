<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';

    protected $guarded = [];



    public function equipmentAttention()
    {
        return $this->hasOne(EquipmentAttention::class);
    }








}
