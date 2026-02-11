<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualans';
    protected $primaryKey = 'PenjualanID';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'faktur',
        'NoPelanggan',
        'TanggalPenjualan'
    ];

    public function pelanggan()
    {
        return $this->belongsTo(
            Pelanggan::class,
            'NoPelanggan',
            'PelangganID'
        );
    }
}