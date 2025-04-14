<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Jewel;
class Favourite extends Model
{
    public $table = 'favourites';

    protected $fillable = [

        'user_id',
        'jewel_id'
    ];

    public function jewels()
    {
        return $this->hasOne(Jewel::class);
    }
}
