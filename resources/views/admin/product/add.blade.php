@extends('layouts/admin-theme')

@section('content')
{{-- @dd($data) --}}
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        @include('include.admin.page-header')

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">

                @if (session()->has('notify'))
                @php($notify = session('notify'))
                <div class="x_content">
                    @foreach ($notify['msg'] as $noti)

                    <div class="alert alert-{{ $notify['lv'] }} alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">×</span>
                        </button>
                        {{ $noti }}
                    </div>

                    @endforeach

                </div>
                @endif


                <div class="x_panel">

                    @include('include.admin.page-title')


                    <div class="x_content">
                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                            <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="home-tab" href="{{route('admin.product.index')}}" role="tab"
                                        aria-controls="home" aria-selected="true">List Products</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{route('admin.product.create')}}">
                                        <span class="badge bg-green">+</span>
                                        Add new Product
                                    </a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">

                                <div role="tabpanel" class="tab-pane fade active show" id="tab_content2"
                                    aria-labelledby="profile-tab">
                                    <div class="x_content">
                                        <br>
                                        <form id="demo-form2" data-parsley-validate=""
                                            class="form-horizontal form-label-left" novalidate="" method="POST"
                                            action="{{ route('admin.product.store') }}" enctype="multipart/form-data">

                                            @csrf
                                            @method('post')

                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12 label-align"
                                                    for="first-name"> Category
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <select type="text" id="slt_cate_id" name="slt_cate_id"
                                                        required="required" class="form-control col-md-7 col-xs-12">
                                                        <option value=0 {{ old('slt_cate_id') == 0 ? 'selected' : '' }}>
                                                        </option>
                                                        <?php cate_parent($data); ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12 label-align"
                                                    for="first-name"> Product Name <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="txt_name" name="txt_name" required="required"
                                                        value="{{ old('txt_name') }}"
                                                        class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12 label-align"
                                                    for="first-name"> Product Price <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="number" id="num_price" name="num_price"
                                                        value="{{ old('num_price') }}"
                                                        class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12 label-align"
                                                    for="first-name"> Product image <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="file" id="file_image" name="file_image"
                                                        value="{{ old('file_image') }}"
                                                        class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12 label-align"
                                                    for="first-name"> Product slide
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="file" id="file_slide[]" name="file_slide[]" multiple
                                                        value="{{ old('file_image') }}"
                                                        class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>

                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12 label-align"
                                                    for="first-name"> Product intro
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <textarea type="text" id="txt_intro" name="txt_intro" rows="6"
                                                        class="form-control col-md-7 col-xs-12">{{ old('txt_intro') }}</textarea>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12 label-align"
                                                    for="first-name"> Product content
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <textarea type="text" id="txt_content" name="txt_content" rows="6"
                                                        class="form-control col-md-7 col-xs-12">{{ old('txt_content') }}</textarea>
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12 label-align"
                                                    for="first-name"> Product Keywords
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="txt_keywords" name="txt_keywords"
                                                        value="{{ old('txt_keywords') }}"
                                                        class="form-control col-md-7 col-xs-12">
                                                </div>
                                            </div>
                                            <div class="item form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12 label-align"
                                                    for="first-name"> Product Description
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