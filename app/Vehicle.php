<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];


    /**
     * @var array
     */
    protected $fillable =
    [
        'user_id',
        'maintenance_id',
        'vehicle_type',
        'automakers',
        'model',
        'year',
        'color',
        'odometer',
        'chassi',
        'plate'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->BelongsTo('App\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function maintenance()
    {
        return $this->BelongsTo('App\Maintenance');
    }
}
