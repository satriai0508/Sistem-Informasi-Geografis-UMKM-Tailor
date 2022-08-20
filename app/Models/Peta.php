<?php

namespace App\Models;

use App\Models\Jahit;
use App\Models\Konveksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Peta extends Model
{
    use HasFactory;

    protected $table = 'tokos';
    protected $guarded = 'id';

    protected $fillable = ['x','y','nama','image','pemilik','no_hp','jam_buka','jam_tutup'];

    protected $with = ['jahit','konveksi'];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'nama';
    }

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
