<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Repositories\Lecturer\LecturerContract;
	use App\Repositories\Course\CourseContract;
	use App\Repositories\Student\StudentContract;
	use App\Repositories\Admin\AdminContract;
	use Sentinel;

	class LecturerController extends Controller
	{

		protected $repo;
		protected $adminRepo;
		protected $courseRepo;
		protected $studentRepo;
		
		public function __construct(LecturerContract $lecturerContract, AdminContract $adminContract,  CourseContract $courseContract, StudentContract $studentContract)
		{
				
			$this->repo = $lecturerContract;
			$this->adminRepo = $adminContract;
			$this->courseRepo = $courseContract;
			$this->studentRepo = $studentContract;
		}
			
		/**
		* Display a listing of the resource.
		*
		* @return \Illuminate\Http\Response
		*/
		public function index() {
			
			$courses = $this->courseRepo->findAll();
			// $admin = $this->adminRepo->findById();
			// $students = $this->StudentRepo->findAll();
			return view('lecturer.index')->with('courses', $courses);
			
		}
		
		/**
		* Show the form for creating a new resource.
		*
		* @return \Illuminate\Http\Response
		*/
		
		public function create() {
			//
		}
		
		/**
		* Store a newly created resource in storage.
		*
		* @param  \Illuminate\Http\Request  $request
		* @return \Illuminate\Http\Response
		*/
		
		public function store(Request $request) {
			//
		}
		
		/**
		* Display the specified resource.
		*
		* @param  int  $id
		* @return \Illuminate\Http\Response
		*/
		
		public function show($id) {
			//
		}
		
		/**
		* Show the form for editing the specified resource.
		*
		* @param  int  $id
		* @return \Illuminate\Http\Response
		*/
		
		public function edit()
	    {
	        return view('lecturer.edit');
	    }

	    /**
	     * Update the specified resource in storage.
	     *
	     * @param  \Illuminate\Http\Request  $request
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function update(Request $request, $id)
	    {
	        //
	    }

	    /**
	     * Remove the specified resource from storage.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function delete($id)
	    {
	        //
	    }
	}
