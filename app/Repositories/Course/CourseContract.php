<?php

namespace App\Repositories\Course;

interface CourseContract
{
	public function create($request);
	public function findAll();
}
