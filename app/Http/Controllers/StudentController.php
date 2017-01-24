<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Repositories\Student\StudentContract;
	use Sentinel;
	use Activation;
	use App\Student;
	use Mail;

	class StudentController extends Controller
	{

		protected $repo;
		
		public function __construct(StudentContract $studentContract) {
			$this->repo = $studentContract;
		}
		
		/**
		* Display a listing of the resource.
		*
		* @return \Illuminate\Http\Response
		*/
		
		public function index() {
			return view('student.index');
			
		}
		
		/**
		* Show the form for creating a new resource.
		*
		* @return \Illuminate\Http\Response
		*/
		
		public function create() {
			return view('student.create');
			
		}
		
		/**
		* Store a newly created resource in storage.
		*
		* @param  \Illuminate\Http\Request  $request
		* @return \Illuminate\Http\Response
		*/
		
		public function store(Request $request) {
			$adminDetails = [
				
				'email' => $request->email,
				'password' => 'secret'
				
			];
			
			$student = Sentinel::register($adminDetails, true);
			$sentinelUser = Sentinel::findById($student->id);
			
			$activation = Activation::create($student);
			$role = Sentinel::findRoleBySlug('student');
			$role->users()->attach($student);
			$this->sendEmail($student, $activation->code);
			return $student;
			
		}
		
		public function activate($email, $activationCode) {
			
			$student = Student::whereEmail($email)->first();
			$sentinelUser = Sentinel::findById($student->id);
			if(Activation::complete($sentinelUser, $activationCode)) {
				return redirect()->route('student_update');
			}else {
				// return redirect()->back();
			}
		}
		
		private function SendEmail($student, $code) {
			Mail::send('student.activation', [
				'student'	=> $student,
				'code' => $code
			], function($message) use ($student) {
				$message->to($student->email);
				$message->subject("Hello $student->first_name, activate your account");
			});
		}
	    
	    

	    /**
	     * Display the specified resource.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function show($id)
	    {
	        //
	    }

	    /**
	     * Show the form for editing the specified resource.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function edit($id)
	    {
	        //
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
