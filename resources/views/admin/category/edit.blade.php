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
                                        aria-expanded="true">Edit category</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">

                                <div role="tabpanel" class="tab-pane fade" id="tab_content1"
                                    aria-labelledby="profile-tab">
                                    <div class="x_content">
                                        <br>
                                        <form id="demo-form2" data-parsley-validate=""
                                            class="form-horizontal form-label-left" novalidate="" method="POST"
                                            action="{{ route('admin.category.edit') }}">
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