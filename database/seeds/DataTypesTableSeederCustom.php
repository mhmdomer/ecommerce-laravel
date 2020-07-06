<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeederCustom extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'products');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'products',
                'display_name_singular' => 'Product',
                'display_name_plural'   => 'Products',
                'icon'                  => 'voyager-bag',
                'model_name'            => 'App\\Product',
                'policy_name'           => '',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'category');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'category',
                'display_name_singular' => 'Category',
                'display_name_plural'   => 'Categories',
                'icon'                  => 'voyager-categories',
                'model_name'            => 'App\\Category',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'coupons');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'coupons',
                'display_name_singular' => 'Coupon',
                'display_name_plural'   => 'Coupons',
                'icon'                  => 'voyager-buy',
                'model_name'            => 'App\\Coupon',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'tags');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'tags',
                'display_name_singular' => 'Tag',
                'display_name_plural'   => 'Tags',
                'icon'                  => 'voyager-tag',
                'model_name'            => 'App\\Tag',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'product_tag');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'product_tag',
                'display_name_singular' => 'Product Tag',
                'display_name_plural'   => 'Products Tags',
                'icon'                  => '',
                'model_name'            => 'App\\ProductTag',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'orders');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'orders',
                'display_name_singular' => 'Order',
                'display_name_plural'   => 'Orders',
                'icon'                  => 'voyager-documentation',
                'model_name'            => 'App\\Order',
                'policy_name'           => '',
                'controller'            => 'App\Http\Controllers\Voyager\OrdersController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'country_visits');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'visits',
                'display_name_singular' => 'Country Visit',
                'display_name_plural'   => 'Country Visits',
                'icon'                  => 'voyager-documentation',
                'model_name'            => 'App\\CountryVisits',
                'policy_name'           => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
