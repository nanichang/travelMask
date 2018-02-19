<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => 'Nani Admin',
        //     'email' => 'nanipaul@gmail.com',
        //     'password' => bcrypt('secret'),
        // ]);
        
        
        $adminDetails = [
            'first_name' => 'Nani',
            'last_name' => 'admin',
            'phone_number' => '1234567890',
            'email' => 'admin@admin.com',
            'password' => 'secret',
            
        ];
        
        $admin = Sentinel::registerAndActivate($adminDetails, true);
        $role = Sentinel::findRoleBySlug('superadmin');
        $role->users()->attach($admin);
        
        $lecturerDetails = [
            'first_name' => 'Ohsie',
            'last_name' => 'Ohsie',
            'phone_number' => '1234567890',
            'email' => 'Ohsie@admin.com',
            'password' => 'secret',
            
        ];
        
        $lecturer = Sentinel::registerAndActivate($lecturerDetails, true);
        $role = Sentinel::findRoleBySlug('admin');
        $role->users()->attach($lecturer);
        
        $studentDetails = [
            'first_name' => 'Victor',
            'last_name' => 'Smilez',
            'phone_number' => '1234567890',
            'email' => 'victor@admin.com',
            'password' => 'secret',
            
        ];
        
        $student = Sentinel::registerAndActivate($studentDetails, true);
        $role = Sentinel::findRoleBySlug('users');
        $role->users()->attach($student);
        
        
    }
}
