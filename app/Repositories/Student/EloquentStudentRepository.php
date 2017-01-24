<?php

namespace App\Repositories\Student;
use App\Repositories\Student\StudentContract;
use Sentinel;
use Activation;

class EloquentStudentRepository implements StudentContract
{

	public function create($request) {
        
        $studentDetails = [
            'email' => $request->email,
            
        ];
        
        $student = Sentinel::register($request->all(), true);
        
        $activation = Activation::create($student);
        
        $role = Sentinel::findRoleBySlug('student');
        $role->users()->attach($student);
        return $student;
    }
    
    /**
     * Returns all user records from the database
     */
    public function findAll() {
        return DB::table('students')->get();
    }
    
    public function remove($userId) {
        $user = Sentinel::findById($userId);
        $user->delete();
        return true;
    }
    
    
    
}
