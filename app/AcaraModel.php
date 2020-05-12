<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcaraModel extends Model
{
    protected $table = 'acara';
    protected $primaryKey = 'id_acara';
    protected $fillable = ['nama_acara','keterangan','tempat','tanggal'];
}
