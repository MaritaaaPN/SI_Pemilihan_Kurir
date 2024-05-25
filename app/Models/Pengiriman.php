<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;

    protected $table = 'pengiriman';

    protected $primaryKey = 'id_pengiriman';

    public $incrementing = false;

    public $timestamps = false;

    protected $guarded = [];

    public function kurir(){
        return $this->belongsTo(Kurir::class, 'id_kurir')->withDefault(['nama' => '-']);
    }
}
