@extends('layouts.main')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                
                    <h4 class="title text-center"><small>Welcome </small> {{ session('currentUser')->first_name }} {{ session('currentUser')->last_name }} </h4>
                
                    <br />
                    <div class="nav-container">
                    <ul class="nav nav-icons" role="tablist">
                        <li class="active">
                            <a href="#description-logo" role="tab" data-toggle="tab">
                                <i class="fa fa-book"></i><br>
                                Course Catalog
                            </a>
                        </li>
                        <li>
                            <a href="#map-logo" role="tab" data-toggle="tab">
                                <i class="fa fa-inbox"></i><br>
                                Inbox
                            </a>
                          </li>
                        <li class="">
                            <a href="#legal-logo" role="tab" data-toggle="tab">
                                <i class="fa fa-pencil"></i><br>
                                Compose
                            </a>
                        </li>
                        <li class="">
                            <a href="#help-logo" role="tab" data-toggle="tab">
                                <i class="fa fa-user-plus"></i><br>
                                Pending Invitation
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content">
                    <div class="tab-pane active" id="description-logo">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Course Catalog</h4>
                                <!--<p class="category">More information here</p>-->
                            </div>

                            <div class="content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                
                                            <div class="toolbar">
                                                <!--        Here you can write extra buttons/actions for the toolbar              -->
                                            </div>
                
                                            <table id="bootstrap-table" class="table">
                                                <thead>
                                                    <th data-field="state" data-checkbox="true"></th>
                                                    <th data-field="id" class="text-center">ID</th>
                                                	<th data-field="course_name" data-sortable="true">Course Name</th>
                                                	<th data-field="description" data-sortable="true">Description</th>
                                                	<th data-field="course_resourse_url">Resource URL</th>
                                                	<th data-field="resource_file_1">Resource File #1</th>
                                                	<th data-field="resource_file_2">Resource File #2</th>
                                                	<th data-field="resource_file_3">Resource File #3</th>
                                                	
                                                	<th data-field="actions" class="td-actions text-right" data-events="operateEvents" data-formatter="operateFormatter">Actions</th>
                                                </thead>
                                                <tbody>
                                                    @foreach($courses as $course)
                                                        <tr>
                                                            <td></td>
                                                    	    <td>{{ $course->id }}</td>
                                                    	    <td>{{ $course->course_name }}</td>
                                                    	    <td>{{ $course->description }}</td>
                                                    	    <td>{{ $course->course_resourse_url }}</td>
                                                    	    <td>{{ $course->resource_file_1 }}</td>
                                                    	    <td>{{ $course->resource_file_2 }}</td>
                                                    	    <td>{{ $course->resource_file_3 }}</td>
                                                    	    <td></td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div><!--  end card  -->
                                    </div> <!-- end col-md-12 -->
                                </div> <!-- end row -->
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane" id="map-logo">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Message Inbox</h4>
                                <!--<p class="category">Here is some text</p>-->
                            </div>

                            <div class="content">
                                <div class="card ">
                                    <div class="header">
                                        <!--<h4 class="title">Tasks</h4>-->
                                        <p class="category">All your messages</p>
                                    </div>
                                    <div class="content">
                                        <div class="table-full-width">
                                            <table class="table">
                                                <tbody>
                                                    
                                                    <tr>
                                                        <td>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                                            </label>
                                                        </td>
                                                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                            </label>
                                                        </td>
                                                        <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="View Mail" class="btn btn-info btn-simple btn-xs">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                            </label>
                                                        </td>
                                                        <td>Read "Following makes Medium better"</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="view mail" class="btn btn-info btn-simple btn-xs">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <label class="checkbox">
                                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                            </label>
                                                        </td>
                                                        <td>Unfollow 5 enemies from twitter</td>
                                                        <td class="td-actions text-right">
                                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr>
                                        <div class="stats">
                                            <i class="fa fa-history"></i> Updated 3 minutes ago
                                        </div>
                                    </div>
                
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane" id="legal-logo">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Compose a Message</h4>
                                <!--<p class="category">More information here</p>-->
                            </div>

                            <div class="content">
                                <form method="#" action="#">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" placeholder="Enter Subject" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Compose Message</label>
                                        <textarea id='compose_message' placeholder="Message" class="form-control"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-fill btn-info">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="help-logo">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Help center</h4>
                                <p class="category">More information here</p>
                            </div>

                            <div class="content">
                                <p>From the seamless transition of glass and metal to the streamlined profile, every detail was carefully considered to enhance your experience. So while its display is larger, the phone feels just right.</p>
                                <p>Another Text. The first thing you notice when you hold the phone is how great it feels in your hand. The cover glass curves down around the sides to meet the anodized aluminum enclosure in a remarkable, simplified design.</p>
                            </div>
                        </div>
                    </div>

                </div> <!-- end tab content -->

            </div> <!-- end col-md-8 -->

        </div> <!-- end row -->
        
        <div class="row">
            <div class="col-md-6">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">2014 Sales</h4>
                        <p class="category">All products including Taxes</p>
                    </div>
                    <div class="content">
                        <div id="chartActivity" class="ct-chart"></div>
                    </div>
                    <div class="footer">
                        <div class="legend">
                            <i class="fa fa-circle text-info"></i> Tesla Model S
                            <i class="fa fa-circle text-danger"></i> BMW 5 Series
                        </div>
                        <hr>
                        <div class="stats">
                            <i class="fa fa-check"></i> Data information certified
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card ">
                    <div class="header">
                        <h4 class="title">Tasks</h4>
                        <p class="category">Backend development</p>
                    </div>
                    <div class="content">
                        <div class="table-full-width">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            <label class="checkbox">
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                            </label>
                                        </td>
                                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkbox">
                                                <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                            </label>
                                        </td>
                                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkbox">
                                                <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                            </label>
                                        </td>
                                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                        </td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkbox">
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                            </label>
                                        </td>
                                        <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkbox">
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                            </label>
                                        </td>
                                        <td>Read "Following makes Medium better"</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="checkbox">
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                            </label>
                                        </td>
                                        <td>Unfollow 5 enemies from twitter</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                <i class="fa fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="footer">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-history"></i> Updated 3 minutes ago
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>

@stop

@section('script')

    <script type="text/javascript">
        var $table = $('#bootstrap-table');

        function operateFormatter(value, row, index) {
            return [
                '<a rel="tooltip" title="View" class="btn btn-simple btn-info btn-icon table-action view" href="javascript:void(0)">',
                    '<i class="fa fa-image"></i>',
                '</a>',
                '<a rel="tooltip" title="Edit" class="btn btn-simple btn-warning btn-icon table-action edit" href="javascript:void(0)">',
                    '<i class="fa fa-edit"></i>',
                '</a>',
                '<a rel="tooltip" title="Remove" class="btn btn-simple btn-danger btn-icon table-action remove" href="javascript:void(0)">',
                    '<i class="fa fa-remove"></i>',
                '</a>'
            ].join('');
        }

        $().ready(function(){
            window.operateEvents = {
                'click .view': function (e, value, row, index) {
                    info = JSON.stringify(row);

                    swal('You click view icon, row: ', info);
                    console.log(info);
                },
                'click .edit': function (e, value, row, index) {
                    info = JSON.stringify(row);

                    swal('You click edit icon, row: ', info);
                    console.log(info);
                },
                'click .remove': function (e, value, row, index) {
                    console.log(row);
                    $table.bootstrapTable('remove', {
                        field: 'id',
                        values: [row.id]
                    });
                }
            };

            $table.bootstrapTable({
                toolbar: ".toolbar",
                clickToSelect: true,
                showRefresh: true,
                search: true,
                showToggle: true,
                showColumns: true,
                pagination: true,
                searchAlign: 'left',
                pageSize: 4,
                clickToSelect: false,
                pageList: [4,8,10,25,50,100],

                formatShowingRows: function(pageFrom, pageTo, totalRows){
                    //do nothing here, we don't want to show the text "showing x of y from..."
                },
                formatRecordsPerPage: function(pageNumber){
                    return pageNumber + " rows visible";
                },
                icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
                }
            });

            //activate the tooltips after the data table is initialized
            $('[rel="tooltip"]').tooltip();

            $(window).resize(function () {
                $table.bootstrapTable('resetView');
            });


        });

    </script>
    
    <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: '#compose_message',
            theme: 'modern',
            // width: 600,
            // height: 300,
            plugins: [
              'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
              'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
              'save table contextmenu directionality emoticons template paste textcolor'
            ],
            // content_css: 'css/content.css',
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
          
        });
    </script>

@endsection