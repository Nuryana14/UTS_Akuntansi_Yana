<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TabelAkuntansiMaster extends Model
{
    protected $table = 'tabel_akuntansi_master';
    protected $primaryKey = 'id_perkiraan';
    public $timestamps = false;

    protected $fillable = [
        'nomor_perkiraan',
        'nama_perkiraan',
        'tipe',
        'induk',
        'level',
        'kelompok',
        'normal',
        'awal_debet',
        'awal_kredit',
        'mut_debet',
        'mut_kredit',
        'sisa_debet',
        'sisa_kredit',
        'rl_debet',
        'rl_kredit',
        'nrc_debet',
        'nrc_kredit',
    ];
}
