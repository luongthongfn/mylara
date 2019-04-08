@extends('layouts/admin-theme')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        @include('include.admin.page-header')

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                @dump($data)
                @if (session()->has('notify'))
                @php($notify = session('notify'))
                <div class="x_content">
                    @foreach ($notify['msg'] as $item)

                    <div class="alert alert-{{ $notify['lv'] }} alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">×</span>
                        </button>
                        {{ $item }}
                    </div>

                    @endforeach

                </div>
                @endif


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
                                                    <th style="width: 20%">Cate Name</th>
                                                    <th style="width: 20%">Parent category</th>
                                                    <th style="width: 20%">#Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 0 ?>
                                                @foreach ($data as $item)
                                                <?php $i++ ?>
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>
                                                        <a>{{ $item['name'] }}</a>
                                                        <br />
                                                        <small>Created 01.01.2015</small>
                                                    </td>
                                                    <td>
                                                        {{ isset($item['parent_name'] ) ? $item['parent_name'] : '-' }}
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-xs">
                                                            <i class="fa fa-folder"></i> View
                                                        </a>
                                                        <a href="#" class="btn btn-info btn-xs">
                                                            <i class="fa fa-pencil"></i> Edit
                                                        </a>
                                                        <a href="#" class="btn btn-danger btn-xs">
                                                            <i class="fa fa-trash-o"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
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
                                                        <option value=0
                                                            {{ old('slt_parent_id') == 0 ? 'selected' : '' }}></option>
                                                        {{-- {{-- <option value=1 {{ old('slt_parent_id') == 2 ? 'selected' : '' }}>asd
                                                        </option>--}}
                                                        {{-- <option value=2 {{ old('slt_parent_id') == 3 ? 'selected' : '' }}>asd
                                                        </option> --}}
                                                        <?php cate_parent($data); ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                    for="first-name"> Category Name <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="txt_name" name="txt_name" required="required"
                                                        value="{{ old('txt_name') }}"
                                                        class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                    for="first-name"> Category Order
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="number" id="num_order" name="num_order"
                                                        value="{{ old('num_order') }}"
                                                        class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                    for="first-name"> Category Keywords
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="txt_keywords" name="txt_keywords"
                                                        value="{{ old('txt_keywords') }}"
                                                        class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                    for="first-name"> Category Description
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <textarea type="text" id="txt_description" name="txt_description"
                                                        rows="6"
                                                        class="form-control col-md-7 col-xs-12">{{ old('txt_description') }}</textarea>
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