<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class toBePurchased extends Model
{
    public $table = 'tobepurchased';

    protected $fillable = [

        'user_id',
        'jewel_id'
    ];

    public function jewel()
    {
        return $this->belongsTo(Jewel::class, 'jewel_id');
    }
}


