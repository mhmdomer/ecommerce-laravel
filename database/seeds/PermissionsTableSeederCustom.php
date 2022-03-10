<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;

class PermissionsTableSeederCustom extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $keys = [
            'browse_admin',
            'browse_bread',
            'browse_database',
            'browse_media',
            'browse_compass',
        ];

        foreach ($keys as $key) {
            Permission::firstOrCreate([
                'key'        => $key,
                'table_name' => null,
            ]);
        }

        Permission::generateFor('products');

        Permission::generateFor('category');

        Permission::generateFor('coupons');

        Permission::generateFor('tags');

        Permission::generateFor('product_tag');

        Permission::generateFor('orders');

        Permission::generateFor('country_visits');

    }
}
