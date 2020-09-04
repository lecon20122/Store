<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;


class Category extends Model
{
    use Translatable;

    protected $fillable = ['parent_id', 'slug', 'is_active'];
    protected $with = ['translations'];
    protected $hidden = ['translations'];
    public $translatedAttributes = ['name'];
    protected $casts = [
        'is_active' => 'boolen',
    ];


    public static function setMany($category)

    {

        foreach ($category as $key => $value) {

            self::set($key, $value);
        }
    }

    public static function set($key, $value)

    {

        if ($key === 'translatable') {

            return static::setTranslatableSettings($value);
        }

        $isArray = is_array($value);

        if ($isArray) {

            $value = json_encode($value);
        }

        static::updateOrCreate(['key' => $key, 'plain_value' => $value]);
    }

    public static function setTranslatableSettings($settings = [])

    {

        foreach ($settings as $key => $value) {

            static::updateOrCreate(['key' => $key], [

                'is_translatable' => true,

                'value' => $value

            ]);
        }
    }
}
