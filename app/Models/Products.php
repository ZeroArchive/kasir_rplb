<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    //mendaftarkan nama table yang ada di database ke model
    protected $table = 'products';

    // kolom yang akan di isi dari form input
    protected $fillable = [
        'nama_produk',
        'stok',
        'harga'
    ];

    /**
     * Get the showkategori that owns the Products
     *
     * @return
     *  \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function showkategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }
}

