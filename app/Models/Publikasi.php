<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publikasi extends Model
{
    use HasFactory;
    protected $table = "publikasi";
    protected $guarded = [];
    protected $primaryKey   = 'pub_id';
    public    $incrementing = false;
    function getListDomainAttribute()
    {
        return array(
            '1600' => 'Provinsi Sumatera Selatan',
            '1601' => 'Ogan Komering Ulu',
        );
    }
    function getListStatusWebsiteAttribute()
    {
        return array(
            '0' => 'Belum Ada',
            '1' => 'Ada',
        );
    }
}
