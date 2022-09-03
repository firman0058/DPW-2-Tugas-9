<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';

    function seller()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    function getHargaStringAttribute(){
        return "Rp. ". number_format($this->attributes['harga']);
    }

    // function getTanggalProduksiAttribute(){
    //     $tanggal = $this->created_at;
    //     return strftime ("%d %b %Y", strtotime($this->created_at));
    // }
}
