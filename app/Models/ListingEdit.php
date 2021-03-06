<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class ListingEdit extends Model implements SluggableInterface
{
    use SluggableTrait;

	protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];

    public function listingCategory()
    {
    	return $this->hasOne('\App\Models\ListingCategory', 'id', 'category');
    }

    public function package()
    {
    	return $this->hasOne('\App\Models\Package', 'id', 'package_id');
    }

    public function listingStatus()
    {
        return $this->hasOne('App\Models\ListingStatus', 'id', 'status');
    }

    public function customer()
    {
        if ($this->user_category == 1){
            return $this->hasOne('App\Models\User', 'user_id', 'customer_id');
        } elseif ($this->user_category == 2){
            return $this->hasOne('App\Models\Customer', 'customer_id', 'customer_id');
        }else {
            return $this->hasOne('App\Models\NonSubscriber', 'nonsub_id', 'customer_id');
        }
    }
}
