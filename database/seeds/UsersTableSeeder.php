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
            'email' => 'admin@lms.com',
            'password' => 'secret',
            
        ];
        
        $admin = Sentinel::registerAndActivate($adminDetails, true);
        $role = Sentinel::findRoleBySlug('admin');
        $role->users()->attach($admin);
        
        $lecturerDetails = [
            'first_name' => 'Nani',
            'last_name' => 'Lecturer',
            'phone_number' => '1234567890',
            'email' => 'lecturer@lms.com',
            'password' => 'secret',
            
        ];
        
        $lecturer = Sentinel::registerAndActivate($lecturerDetails, true);
        $role = Sentinel::findRoleBySlug('lecturer');
        $role->users()->attach($lecturer);
        
        $studentDetails = [
            'first_name' => 'Nani',
            'last_name' => 'Student',
            'phone_number' => '1234567890',
            'email' => 'student@lms.com',
            'password' => 'secret',
            
        ];
        
        $student = Sentinel::registerAndActivate($studentDetails, true);
        $role = Sentinel::findRoleBySlug('student');
        $role->users()->attach($student);
        
        
    }
}
