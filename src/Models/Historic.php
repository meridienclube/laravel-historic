<?php

namespace ConfrariaWeb\Historic\Models;

use ConfrariaWeb\Historic\Scopes\HistoricOrderScope;
use ConfrariaWeb\Option\Traits\OptionTrait;
use Illuminate\Database\Eloquent\Model;

class Historic extends Model
{
    use OptionTrait;

    protected $fillable = [
        'user_id',
        'title',
        'data',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'data' => 'collection'
    ];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new HistoricOrderScope);
    }

    /**
     * Get all of the owning historicable models.
     */
    public function historicable()
    {
        return $this->morphTo();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
