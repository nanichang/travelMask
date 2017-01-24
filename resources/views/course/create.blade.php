@section('meta')
    <meta name="_token" content="{{ csrf_token() }}" />
@endsection

@extends('layouts.main')

@section('content')

   <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card card-wizard" id="wizardCard">
                    <form id="wizardForm" method="post" action="{{ route('store_course') }}">
                        {{ csrf_field() }}
                        <div class="header text-center">
                            <h3 class="title">Create a Course</h3>
                            <p class="category">Please note that items mark with <star>*</star> are required.</p>
                        </div>
                        
                        <div class="content">
                            <ul class="nav">
                                <li><a href="#tab1" data-toggle="tab">Course</a></li>
                                <li><a href="#tab2" data-toggle="tab">Resources</a></li>
                                <li><a href="#tab3" data-toggle="tab">Finish</a></li>
                            </ul>
                            
                            <div class="tab-content">
                                <div class="tab-pane" id="tab1">
                                    <!--<h5 class="text-center">items mark with <star>*</star> are required.</h5>-->
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="form-group">
                                                <label class="control-label">Course Name <star>*</star></label>
                                                <input class="form-control" type="text" name="course_name" placeholder="ex: PHP" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="form-group">
                                                <label class="control-label">Description</label>
                                                <textarea class="form-control"
                                                       name="description"
                                                       placeholder="Course Description"
                                                ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

        					    <div class="tab-pane" id="tab2">
                                    <!--<h5 class="text-center">Please give  more details about your platform.</h5>-->
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="form-group">
                                                <label class="control-label">Course Resource URL<star>*</star></label>
                                                <input class="form-control" type="text" name="course_resourse_url" url="true" placeholder="ex: http://www.nhubnigeria.com" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="form-group">
                                                <label class="control-label">Resource File</label>
                                                <input class="form-control"
                                                       type="file"
                                                       name="resource_file_1"
                                                       placeholder="ex: http://www.nhubnigeria.com"
                                                />
                                            </div>
                                        </div>    
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="form-group">
                                                <label class="control-label">Resource File</label>
                                                <input class="form-control"
                                                       type="file"
                                                       name="resource_file_2"
                                                       placeholder="ex: 19.00"
                                                />

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="form-group">
                                                <label class="control-label">Resource File</label>
                                                <input class="form-control"
                                                       type="file"
                                                       name="resource_file_3"
                                                       placeholder="ex: 19.00"
                                                />
                                            </div>
                                        </div>

                                    </div>

        					    </div>

        						<div class="tab-pane" id="tab3">
        							<h2 class="text-center text-space">Ready! <br><small> Click on "<b>Finish</b>" to complete your action</small></h2>
        					    </div>

        					</div>
        				</div>

        				<div class="footer">
                            <button type="button" class="btn btn-default btn-fill btn-wd btn-back pull-left">Back</button>

                            <button type="button" class="btn btn-info btn-fill btn-wd btn-next pull-right">Next</button>
                            <button class="btn btn-info btn-fill btn-wd btn-finish pull-right" >Finish</button>

                            <div class="clearfix"></div>
        				</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    
    @section('script')
        <script type="text/javascript">
            $().ready(function(){
    
                var $validator = $("#wizardForm").validate({
        		  rules: {
        		    description: {
                        required: false,
                        email: false,
                        minlength: 5
        		    },
        		    course_name: {
        		        required: true,
                        minlength: 2
        		    },
        		    course_resourse_url: {
        		        required: false,
                        minlength: 5,
                        url: false
        		    },
        		    resource_file_1: {
        		        required: false,
                        minlength: 5,
                        url: false
        		    },
        		    resource_file_2: {
            		    required: false,
            		    minlength: 4,
            		    url: false
        		    },
        		    resource_file_3: {
            		    required: false,
            		    url: false
        		    }
        		  }
        		});
    
    
    
                // you can also use the nav-pills-[blue | azure | green | orange | red] for a different color of wizard
    
                $('#wizardCard').bootstrapWizard({
                	tabClass: 'nav nav-pills',
                	nextSelector: '.btn-next',
                    previousSelector: '.btn-back',
                	onNext: function(tab, navigation, index) {
                		var $valid = $('#wizardForm').valid();
    
                		if(!$valid) {
                			$validator.focusInvalid();
                			return false;
                		}
                	},
                    onInit : function(tab, navigation, index){
    
                        //check number of tabs and fill the entire row
                        var $total = navigation.find('li').length;
                        $width = 100/$total;
    
                        $display_width = $(document).width();
    
                        if($display_width < 600 && $total > 3){
                           $width = 50;
                        }
    
                        navigation.find('li').css('width',$width + '%');
                    },
                    onTabClick : function(tab, navigation, index){
                        // Disable the posibility to click on tabs
                        return false;
                    },
                    onTabShow: function(tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index+1;
    
                        var wizard = navigation.closest('.card-wizard');
    
                        // If it's the last tab then hide the last button and show the finish instead
                        if($current >= $total) {
                            $(wizard).find('.btn-next').hide();
                            $(wizard).find('.btn-finish').show();
                        } else if($current == 1){
                            $(wizard).find('.btn-back').hide();
                        } else {
                            $(wizard).find('.btn-back').show();
                            $(wizard).find('.btn-next').show();
                            $(wizard).find('.btn-finish').hide();
                        }
                    }
    
                });
    
            });
    
            function onFinishWizard(){
                //here you can do something, sent the form to server via ajax and show a success message with swal
                
                $(function(){
    
                    $('#wizardForm').on('submit',function(e){
                        $.ajaxSetup({
                            header:$('meta[name="_token"]').attr('content')
                        })
                        e.preventDefault(e);
                    
                            $.ajax({
                    
                            type:"POST",
                            url:'/create-a-course',
                            data:$(this).serialize(),
                            dataType: 'json',
                            success: function(data){
                                console.log(data);
                            },
                            error: function(data){
                    
                            }
                        })
                        });
                    });
    
                swal("Success!", "Course Created!", "success");
            }
        </script>
    @endsection

@stop