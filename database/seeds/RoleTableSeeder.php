<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $role_employee = new Role();
    $role_employee->name = 'admin';
    $role_employee->description = 'an admin user';
    $role_employee->save();

    $role_manager = new Role();
    $role_manager->name = 'adminResto';
    $role_manager->description = 'an adminResto user';
    $role_manager->save();

    $role_manager = new Role();
    $role_manager->name = 'simpleUser';
    $role_manager->description = 'a simpleUser user';
    $role_manager->save();
    }
}
