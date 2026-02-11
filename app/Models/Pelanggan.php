<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggans';
    protected $primaryKey = 'PelangganID';

    protected $fillable = [
        'No_Pelanggan',
        'Nama_Pelanggan',
        'Alamat',
    ];

    public function penjualans()
    {
        return $this->hasMany(Penjualan::class, 'PelangganID');
    }
}