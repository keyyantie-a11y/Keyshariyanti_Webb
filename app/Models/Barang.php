<?php

namespace App\Models;
use illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';
    protected $primaryKey = 'BarangID';
    protected $fillable = [
        'Kode_Barang',
        'Nama_Barang',
        'Harga_Barang',
    ];
}