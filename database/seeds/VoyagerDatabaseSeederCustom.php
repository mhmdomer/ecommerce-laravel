<?php

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
        $this->seed('DataTypesTableSeederCustom');
        $this->seed('DataRowsTableSeederCustom');
        $this->seed('MenusTableSeederCustom');
        $this->seed('MenuItemsTableSeederCustom');
        $this->seed('PermissionsTableSeederCustom');
        $this->seed('PermissionRoleTableSeederCustom');
        $this->seed('SettingsTableSeederCustom');
    }
}
