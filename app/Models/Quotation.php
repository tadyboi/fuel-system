<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quotation extends Model
{
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'quotations';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    /**
     * The attributes that are hidden.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quote_num',
        'client',
        'email',
        'email_cc',
        'price',
        'quantity',
        'currency',
        'amount',
        'notes',
        'done_by',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'                                => 'integer',
        'quote_num'                         => 'string',
        'client'                         => 'string',
        'email'                         => 'string',
        'email_cc'                         => 'string',
        'price'                         => 'double',
        'quantity'                         => 'double',
        'currency'                         => 'string',
        'amount'                         => 'double',
        'notes'                         => 'string',
        'done_by'                         => 'string',
    ];
}
