<?php

use Illuminate\Database\Seeder;
use App\Admin;
use App\Roles;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();
        DB::table('admin_roles')->truncate();

        $adminRoles = Roles::where('name','admin')->first(); 
        $authorRoles = Roles::where('name','author')->first(); 

        $admin = Admin::create([

        'admin_name' => 'thienadmin',
        'admin_email' => 'thienadmin@gmail.com',
        'admin_phone' => '123456789',
        'admin_password' => md5('123456'),

        ]);

         $author = Admin::create([

        'admin_name' => 'thienauthor',
        'admin_email' => 'thienauthor@gmail.com',
        'admin_phone' => '123456789',
        'admin_password' => md5('123456'),

        ]);

        $admin->roles()->attach($adminRoles);
        $author->roles()->attach($authorRoles);

        factory(App\Admin::class,20)->create();
    }
       

}