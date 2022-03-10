<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Traits\Seedable;

class VoyagerDatabaseSeederCustom extends Seeder
{
    use Seedable;

    protected $seedersPath = __DIR__ . '/';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DataTypesTableSeederCustom::class);
        $this->call(DataRowsTableSeederCustom::class);
        $this->call(MenusTableSeederCustom::class);
        $this->call(MenuItemsTableSeederCustom::class);
        $this->call(PermissionsTableSeederCustom::class);
        $this->call(PermissionRoleTableSeederCustom::class);
        $this->call(SettingsTableSeederCustom::class);
    }
}
