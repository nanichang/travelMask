@extends('layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header text-center">
                        <h4 class="title">Your Course Catalog</h4>
                        <p class="category">A table for content management</p>
                        <br />
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-bigboy">
                            <thead>
                                <tr>
                                    <th class="text-center">Thumb</th>
                                    <th >Course Title</th>
                                    <th class="th-description">Description</th>
                                    <th class="text-right">Due Date</th>
                                    <!--<th class="text-right">Views</th>-->
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                     <td>
                                        <div class="img-container">
                                            <img src="../../assets/img/blog-2.jpg" alt="...">
                                        </div>
                                    </td>
                                    <td class="td-name">
                                        Back to School Offer
                                    </td>
                                    <td>
                                        Design is not just what it looks like and feels like. Design is how it works.
                                    </td>
                                   <td class="td-number">17/07/2016</td>
                                    <!--<td class="td-number">49,302</td>-->
                                    <td class="td-actions">
                                        <button type="button" rel="tooltip" data-placement="left" title="View Post" class="btn btn-info btn-simple btn-icon">
                                            <i class="fa fa-image"></i>
                                        </button>
                                        <button type="button" rel="tooltip" data-placement="left" title="Edit Post" class="btn btn-success btn-simple btn-icon">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" rel="tooltip" data-placement="left" title="Remove Post" class="btn btn-danger btn-simple btn-icon ">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="img-container">
                                            <img src="../../assets/img/blog-3.jpg" alt="...">
                                        </div>
                                    </td>
                                    <td class="td-name">
                                        First Dribbble Meetup in Romania
                                    </td>
                                    <td>
                                        A groundbreaking Retina display. All-flash architecture. Fourth-generation Intel processors.
                                    </td>
                                    <td class="td-number">23/06/2016</td>
                                    <!--<td class="td-number">1,799</td>-->
                                    <td class="td-actions">
                                        <button type="button" rel="tooltip" data-placement="left" title="View Post" class="btn btn-info btn-simple btn-icon">
                                            <i class="fa fa-image"></i>
                                        </button>
                                        <button type="button" rel="tooltip" data-placement="left" title="Edit Post" class="btn btn-success btn-simple btn-icon">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" rel="tooltip" data-placement="left" title="Remove Post" class="btn btn-danger btn-simple btn-icon ">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>                                        </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!--  end card  -->
            </div> <!-- end col-md-12 -->
        </div> <!-- end row -->
    </div>

@stop