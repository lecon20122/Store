<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @param array $settings
     * @return void
     */
    public function run()
    {
        Setting::setMany([
         'default_locale'=>'ar',
         'default_timezone' => 'Africa/Cairo',
         'reviews_enabled' => true,
         'auto_approve_reviews' => true,
         'supported_currencies' =>['USD','EGP','SAR'],
         'default_currency' => 'USD',
         'store_email' => 'admin@ecommerce.test',
         'search_engine'=>'mysql',
         'local_shipping_cost' => 0,
         'outer_shipping_cost' => 0,
         'free_shipping_cost' => 0,
         'translatable' => [
             'store_name'=>'Modern Store',
             'free_shipping_label'=>'Free Shipping',
             'outer_shipping_label'=>'Outer Shipping',
             'local_shipping_label'=>'Local Shipping',
         ]
        ]);
    }
}


