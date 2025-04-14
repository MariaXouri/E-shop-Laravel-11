<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Illuminate\Http\Request;
use Spatie\Searchable\SearchResult;
// use Laravel\Scout\Searchable;

class Jewel extends Model
{
    use Searchable;
    public $fillable = ['name', 'description'];


    public $table = 'jewels';

    // $index = $client->initIndex('contacts');

    public function favourites()
    {
        return $this->hasMany(Favourite::class);
    }

    public function tobepurchased()
    {
        return $this->hasMany(toBePurchased::class);
    }
    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('jewels', $this->id);

        return new SearchResult($this, $this->name, $this->description, $url);
    }

    public function searchableAs()
    {
        return 'jewels_index';
    }


}
