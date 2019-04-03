@extends('layouts/admin-theme')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        @include('include.admin.page-header')

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">

                    @include('include.admin.page-title')

                    <div class="x_content">
                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab"
                                        aria-expanded="true">List category</a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab"
                                        aria-expanded="false"><span class="badge bg-green">+</span> Add new category</a>
                                </li>

                            </ul>
                            <div id="myTabContent" class="tab-content">

                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1"
                                    aria-labelledby="home-tab">
                                    <div class="x_content">

                                        <p>Simple table with project listing with progress and editing options</p>

                                        <!-- start project list -->
                                        <table class="table table-striped projects">
                                            <thead>
                                                <tr>
                                                    <th style="width: 1%">#</th>
                                                    <th style="width: 20%">Project Name</th>
                                                    <th>Team Members</th>
                                                    <th>Project Progress</th>
                                                    <th>Status</th>
                                                    <th style="width: 20%">#Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#</td>
                                                    <td>
                                                        <a>Pesamakini Backend UI</a>
                                                        <br />
                                                        <small>Created 01.01.2015</small>
                                                    </td>
                                                    <td>
                                                        <ul class="list-inline">
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="project_progress">
                                                        <div class="progress progress_sm">
                                                            <div class="progress-bar bg-green" role="progressbar"
                                                                data-transitiongoal="57"></div>
                                                        </div>
                                                        <small>57% Complete</small>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-success btn-xs">Success</button>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-xs"><i
                                                                class="fa fa-folder"></i> View
                                                        </a>
                                                        <a href="#" class="btn btn-info btn-xs"><i
                                                                class="fa fa-pencil"></i> Edit </a>
                                                        <a href="#" class="btn btn-danger btn-xs"><i
                                                                class="fa fa-trash-o"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>
                                                        <a>Pesamakini Backend UI</a>
                                                        <br />
                                                        <small>Created 01.01.2015</small>
                                                    </td>
                                                    <td>
                                                        <ul class="list-inline">
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="project_progress">
                                                        <div class="progress progress_sm">
                                                            <div class="progress-bar bg-green" role="progressbar"
                                                                data-transitiongoal="47"></div>
                                                        </div>
                                                        <small>47% Complete</small>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-success btn-xs">Success</button>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-xs"><i
                                                                class="fa fa-folder"></i> View
                                                        </a>
                                                        <a href="#" class="btn btn-info btn-xs"><i
                                                                class="fa fa-pencil"></i> Edit </a>
                                                        <a href="#" class="btn btn-danger btn-xs"><i
                                                                class="fa fa-trash-o"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>
                                                        <a>Pesamakini Backend UI</a>
                                                        <br />
                                                        <small>Created 01.01.2015</small>
                                                    </td>
                                                    <td>
                                                        <ul class="list-inline">
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="project_progress">
                                                        <div class="progress progress_sm">
                                                            <div class="progress-bar bg-green" role="progressbar"
                                                                data-transitiongoal="77"></div>
                                                        </div>
                                                        <small>77% Complete</small>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-success btn-xs">Success</button>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-xs"><i
                                                                class="fa fa-folder"></i> View
                                                        </a>
                                                        <a href="#" class="btn btn-info btn-xs"><i
                                                                class="fa fa-pencil"></i> Edit </a>
                                                        <a href="#" class="btn btn-danger btn-xs"><i
                                                                class="fa fa-trash-o"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>
                                                        <a>Pesamakini Backend UI</a>
                                                        <br />
                                                        <small>Created 01.01.2015</small>
                                                    </td>
                                                    <td>
                                                        <ul class="list-inline">
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="project_progress">
                                                        <div class="progress progress_sm">
                                                            <div class="progress-bar bg-green" role="progressbar"
                                                                data-transitiongoal="60"></div>
                                                        </div>
                                                        <small>60% Complete</small>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-success btn-xs">Success</button>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-xs"><i
                                                                class="fa fa-folder"></i> View
                                                        </a>
                                                        <a href="#" class="btn btn-info btn-xs"><i
                                                                class="fa fa-pencil"></i> Edit </a>
                                                        <a href="#" class="btn btn-danger btn-xs"><i
                                                                class="fa fa-trash-o"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>
                                                        <a>Pesamakini Backend UI</a>
                                                        <br />
                                                        <small>Created 01.01.2015</small>
                                                    </td>
                                                    <td>
                                                        <ul class="list-inline">
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="project_progress">
                                                        <div class="progress progress_sm">
                                                            <div class="progress-bar bg-green" role="progressbar"
                                                                data-transitiongoal="12"></div>
                                                        </div>
                                                        <small>12% Complete</small>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-success btn-xs">Success</button>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-xs"><i
                                                                class="fa fa-folder"></i> View
                                                        </a>
                                                        <a href="#" class="btn btn-info btn-xs"><i
                                                                class="fa fa-pencil"></i> Edit </a>
                                                        <a href="#" class="btn btn-danger btn-xs"><i
                                                                class="fa fa-trash-o"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>
                                                        <a>Pesamakini Backend UI</a>
                                                        <br />
                                                        <small>Created 01.01.2015</small>
                                                    </td>
                                                    <td>
                                                        <ul class="list-inline">
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="project_progress">
                                                        <div class="progress progress_sm">
                                                            <div class="progress-bar bg-green" role="progressbar"
                                                                data-transitiongoal="35"></div>
                                                        </div>
                                                        <small>35% Complete</small>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-success btn-xs">Success</button>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-xs"><i
                                                                class="fa fa-folder"></i> View
                                                        </a>
                                                        <a href="#" class="btn btn-info btn-xs"><i
                                                                class="fa fa-pencil"></i> Edit </a>
                                                        <a href="#" class="btn btn-danger btn-xs"><i
                                                                class="fa fa-trash-o"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>
                                                        <a>Pesamakini Backend UI</a>
                                                        <br />
                                                        <small>Created 01.01.2015</small>
                                                    </td>
                                                    <td>
                                                        <ul class="list-inline">
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="project_progress">
                                                        <div class="progress progress_sm">
                                                            <div class="progress-bar bg-green" role="progressbar"
                                                                data-transitiongoal="87"></div>
                                                        </div>
                                                        <small>87% Complete</small>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-success btn-xs">Success</button>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-xs"><i
                                                                class="fa fa-folder"></i> View
                                                        </a>
                                                        <a href="#" class="btn btn-info btn-xs"><i
                                                                class="fa fa-pencil"></i> Edit </a>
                                                        <a href="#" class="btn btn-danger btn-xs"><i
                                                                class="fa fa-trash-o"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>
                                                        <a>Pesamakini Backend UI</a>
                                                        <br />
                                                        <small>Created 01.01.2015</small>
                                                    </td>
                                                    <td>
                                                        <ul class="list-inline">
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="project_progress">
                                                        <div class="progress progress_sm">
                                                            <div class="progress-bar bg-green" role="progressbar"
                                                                data-transitiongoal="77"></div>
                                                        </div>
                                                        <small>77% Complete</small>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-success btn-xs">Success</button>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-xs"><i
                                                                class="fa fa-folder"></i> View
                                                        </a>
                                                        <a href="#" class="btn btn-info btn-xs"><i
                                                                class="fa fa-pencil"></i> Edit </a>
                                                        <a href="#" class="btn btn-danger btn-xs"><i
                                                                class="fa fa-trash-o"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#</td>
                                                    <td>
                                                        <a>Pesamakini Backend UI</a>
                                                        <br />
                                                        <small>Created 01.01.2015</small>
                                                    </td>
                                                    <td>
                                                        <ul class="list-inline">
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                            <li>
                                                                <img src="{{ asset('theme/production/images/user.png') }}"
                                                                    class="avatar" alt="Avatar">
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="project_progress">
                                                        <div class="progress progress_sm">
                                                            <div class="progress-bar bg-green" role="progressbar"
                                                                data-transitiongoal="77"></div>
                                                        </div>
                                                        <small>77% Complete</small>
                                                    </td>
                                                    <td>
                                                        <button type="button"
                                                            class="btn btn-success btn-xs">Success</button>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-xs"><i
                                                                class="fa fa-folder"></i> View
                                                        </a>
                                                        <a href="#" class="btn btn-info btn-xs"><i
                                                                class="fa fa-pencil"></i> Edit </a>
                                                        <a href="#" class="btn btn-danger btn-xs"><i
                                                                class="fa fa-trash-o"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- end project list -->

                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="tab_content2"
                                    aria-labelledby="profile-tab">
                                    <div class="x_content">
                                        <br>
                                        <form id="demo-form2" data-parsley-validate=""
                                            class="form-horizontal form-label-left" novalidate="" method="POST"
                                            action="{{ route('admin.category.store') }}">
                                            @csrf
                                            @method('post')

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                    for="first-name"> Category Parent
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <select type="text" id="slt_parent_id" name="slt_parent_id"
                                                        required="required" class="form-control col-md-7 col-xs-12">
                                                        <option value=0></option>
                                                        <option value=1>asd</option>
                                                        <option value=2>asd</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                    for="first-name"> Category Name <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="txt_name" name="txt_name" required="required"
                                                        class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                    for="first-name"> Category Order
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="number" id="num_order" name="num_order"
                                                        class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                    for="first-name"> Category Keywords
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="txt_keywords" name="txt_keywords"
                                                        class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                    for="first-name"> Category Description
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <textarea type="text" id="txt_description" name="txt_description"
                                                        rows="6" class="form-control col-md-7 col-xs-12"></textarea>
                                                </div>
                                            </div>

                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                    <button class="btn btn-primary" type="reset">Reset</button>
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

@endsection