<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Setting extends Model
{

    use Translatable;
    protected $guarded = [];
    protected $with = ['translations'];

    public $translatedAttributes = ['value'];

    public static function setMany($settings)

    {

        foreach ($settings as $key => $value) {

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
