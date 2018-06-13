<?php

namespace App;

use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Freshbitsweb\LaravelCartManager\Traits\Cartable;

class Product extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait, Cartable;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];

    /**
     * Image path for the cart
     *
     * @return string Image path
     */
    public function getImage()
    {
        return $this->getFirstMediaUrl('products');
    }
}
