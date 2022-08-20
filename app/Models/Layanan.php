<?php

namespace App\Models;

use App\Models\Jahit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'layanans';
    protected $guarded = 'id';

    protected $fillable = ['nama_toko','jahit_id','konveksi_id'];

    protected $with = ['jahit','konveksi'];

    /**
     * Get the jahit that owns the Layanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jahit(): BelongsTo
    {
        return $this->belongsTo(Jahit::class);
    }

    /**
     * Get the konveksi that owns the Layanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function konveksi(): BelongsTo
    {
        return $this->belongsTo(Konveksi::class);
    }
}
