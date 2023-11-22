<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = User::create([
            'name'   => 'Admin', 
            'email'  => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    
        $role = Role::create(['name' => 'Admin']);
        
        // $role = Role::find(1);
     
        // $permissions = Permission::pluck('id','id')->all();
   
        // $role->syncPermissions($permissions);

        $user->syncRoles([$role->id]);
     
        $user->assignRole([$role->id]);
    }
}
