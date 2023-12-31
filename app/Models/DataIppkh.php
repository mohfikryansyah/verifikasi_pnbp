<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataIppkh extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function history()
    {
        return $this->hasMany(HistoryIppkh::class);
    }
}
