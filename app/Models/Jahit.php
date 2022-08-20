<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jahit extends Model
{
    use HasFactory;

    protected $table = 'jahits';
    protected $guarded = 'id';

    protected $fillable = ['nama_toko','harga','ukuran','jenis'];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'nama_toko';
    }

    /**
     * Get the layanan that owns the Konveksi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function layanan(): BelongsTo
    {
        return $this->belongsTo(Layanan::class);
    }
}
