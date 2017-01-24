<?php

namespace App\Repositories\Lecturer;
use App\Repositories\Lecturer\LecturerContract;
use App\User;

class EloquentLecturerRepository implements LecturerContract
{

	public function findById($id) {
        return User::find($id);
    }
}
