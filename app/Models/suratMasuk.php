<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratMasuk extends Model
{
    use HasFactory;
    // protected $table = "surat_masuks";
    protected $fillable = ['jenis_surat','tanggal','nomor','asal','hal','fileUpload'];
    
    
}
