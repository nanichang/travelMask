<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Repositories\Course\CourseContract;

	class CourseController extends Controller {
		protected $repo;
		public function __construct(CourseContract $courseContract) {
			$this->repo = $courseContract;
		}
		
		/**
		 * Display a listing of the resource.
		 *
		 * @return \Illuminate\Http\Response
		 */
		 
		public function index() {
			return view('course.index');
			
		}
		 
		/*
		*  Show the form for creating a new resource.
		*
		* @return \Illuminate\Http\Response
		*/
		public function create() {
			return view('course.create');
			
		}
		
		/**
		* Store a newly created resource in storage.
		*
		* @param  \Illuminate\Http\Request  $request
		* @return \Illuminate\Http\Response
		*/
		
		public function store(Request $request) {
			$this->validate($request, [
				'course_name' => 'required',
				'course_resourse_url' => 'required'
			]);
			
			// if ($request->isMethod('post')){ 
				
				try {
					
					$course = $this->repo->create($request);
					// return response()->json(['response' => 'This is post method']);
					if ($course) {
						return redirect()->back()
						->with('success', 'Course successfully added');
						
					} else {
						return back()->withInput()
						->with('error', 'Could not add Course. Try again!');
						
					}
					
				} catch (QueryException $e) {
					if ($e->errorInfo[1] == 1062) {
						return back()->withInput()
						->with('error', 'Course exists!');
					}
					
				}
				
			// }
			
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
