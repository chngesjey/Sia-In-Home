<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mapel;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';

    protected $guarded = [];

    public function mapel(){
        return $this->belongsTo(Mapel::class);
    }
}
