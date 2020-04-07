<?php

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('slug','Admin')->first();
        $user = Role::where('slug', 'User')->first();
        $createTasks = Permission::where('slug','create-tasks')->first();
        $manageUsers = Permission::where('slug','manage-users')->first();
        $user1 = new User();
        $user1->surname = 'Deo';
        $user1->name = 'Jhon';
        $user1->phone = '80995555550';
        $user1->email = 'jhon@deo.com';
        $user1->password = bcrypt('secret');
        $user1->avatar = '';
        $user1->save();
        $user1->roles()->attach($admin);
        $user1->permissions()->attach($createTasks);
        $user2 = new User();
        $user2->surname = 'Thomas';
        $user2->name = 'Mike';
        $user2->phone = '80995555551';
        $user2->email = 'mike@thomas.com';
        $user2->password = bcrypt('secret');
        $user2->avatar = '';
        $user2->save();
        $user2->roles()->attach($user);
        $user2->permissions()->attach($manageUsers);
    }

}
