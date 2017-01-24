<?php

namespace App\Repositories\Student;

interface StudentContract
{
	public function create($request);
	public function findAll();
	public function remove($userId);
}
