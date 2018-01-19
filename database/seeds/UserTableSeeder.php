<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $role_admin = Role::where('name', 'admin')->first();
    $role_adminResto  = Role::where('name', 'adminResto')->first();
    $role_simpleUser  = Role::where('name', 'simpleUser')->first();

    $admin = new User();
    $admin->name = 'Safwane Ettih';
    $admin->email = 'Safwane.Ettih@esprit.tn';
    $admin->password = bcrypt('123456');
    $admin->save();
    $admin->roles()->attach($role_admin);


    $restoAdmin = new User();
    $restoAdmin->name = 'Ghaith Hammadi';
    $restoAdmin->email = 'Ghaith.Hammadi@esprit.tn';
    $restoAdmin->password = bcrypt('123456');
    $restoAdmin->save();
    $restoAdmin->roles()->attach($role_adminResto);

    $simpleUser = new User();
    $simpleUser->name = 'Chedli Lakhdar';
    $simpleUser->email = 'Chedli.Lakhdar@esprit.tn';
    $simpleUser->password = bcrypt('123456');
    $simpleUser->save();
    $simpleUser->roles()->attach($role_simpleUser);
    }
}
