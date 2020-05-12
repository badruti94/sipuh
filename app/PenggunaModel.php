<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenggunaModel extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $fillable = ['nama', 'no_tlp', 'alamat'];
}
