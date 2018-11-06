<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * Data yang noleh di isi
     *
     * @var array
     */
    protected $fillable = ['user_id', 'value'];
}
