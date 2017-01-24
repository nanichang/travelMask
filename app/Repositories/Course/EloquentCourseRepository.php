<?php

namespace App\Repositories\Course;
use App\Repositories\Course\CourseContract;
use App\Course;

class EloquentCourseRepository implements CourseContract
{

	public function create($request) {
        $course = new Course;
        $this->setCourseProperties($course, $request);
        $course->user()->associate(Sentinel::getUser());
        $course->save();
	}
	
	public function findAll() {
        return Course::all();
        
    }
    
	
	private function setCourseProperties($course, $request) {
        $course->course_name = $request->course_name;
        $course->description = $request->description;
        $course->course_resourse_url = $request->course_resourse_url;
        $course->resource_file_1 = $request->resource_file_1;
        $course->resource_file_2 = $request->resource_file_2;
        $course->resource_file_3 = $request->resource_file_3;
    }
}
