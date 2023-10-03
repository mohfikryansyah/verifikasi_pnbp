<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryIppkh extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function dataippkh()
    {
        return $this->hasMany(DataIppkh::class);
    }
}