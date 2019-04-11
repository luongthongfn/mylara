@extends('layouts/admin-theme')

@section('content')

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
                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="{{route('admin.category.index')}}">List category</a>
                                </li>
                                <li role="presentation" class="">
                                    <a href="{{route('admin.category.create')}}"><span class="badge bg-green">+</span>
                                        Add new category</a>
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
                                                        <a>{{ $item->name }}</a>
                                                        <br />
                                                        <small>Created {{ date('d-m-Y', strtotime($item->created_at) ) }}</small>
                                                    </td>
                                                    <td>
                                                        {{ isset($item->parent_name ) ? $item->parent_name : '-' }}
                                                    </td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-xs">
                                                            <i class="fa fa-folder"></i> View
                                                        </a>
                                                        <a href="{{ route('admin.category.edit', $item->id) }}"
                                                            class="btn btn-info btn-xs">
                                                            <i class="fa fa-pencil"></i> Edit
                                                        </a>
                                                        <a href="{{ route('admin.category.destroy', $item->id) }}"
                                                            class="btn btn-danger btn-xs"
                                                            onclick="event.preventDefault();
                                                            if (confirm('Are you sure ?')) {
                                                                document.getElementById('delete-form-{{ $item->id }}').submit();}">

                                                            <i class="fa fa-trash-o"></i> Delete
                                                        </a>
                                                        <form id="delete-form-{{ $item->id }}"
                                                            action="{{ route('admin.category.destroy', $item->id) }}"
                                                            method="POST" style="display: none;">
                                                            @method('DELETE')
                                                            @csrf
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <!-- end project list -->

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