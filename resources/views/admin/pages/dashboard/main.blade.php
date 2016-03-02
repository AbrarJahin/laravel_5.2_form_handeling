@extends('admin.master')

@section('title', 'Dashboard')

@section('header_styles')
    @parent
    <script src="{{ URL::asset('plugins/icheck/icheck.min.js') }}"></script>
    <link href="{{ URL::asset('plugins/icheck/skins/flat/flat.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('plugins/icheck/skins/flat/green.css') }}" rel="stylesheet">

	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
    <script src="{{ URL::asset('js/datatables.js') }}"></script>

@endsection

@section('footer_scripts')
    @parent
    <script src="{{ URL::asset('plugins/icheck/icheck.min.js') }}"></script>
@endsection

@section('header_nav')
    <header class="dashboard-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="list-inline pull-right nav-user">
                        <li><span>You are logged in as</span></li>
                        <li class="username"><a href=""><i class="fa fa-user"></i> Username</a></li>
                        <li class="logout"><a href="{{ URL::to('logout') }}">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('header_banner')

@endsection

@section('body_class')
	class="page-dashboard"
@endsection

@section('content')

	<section class="main-content dashboard-content">
	    <div class="container">
	        <h1 class="page-heading lighter text-uppercase">PROJECT DASHBOARD</h1>

	        <div class="row">
	            <div class="col-sm-6">
	            	<a href="{{ URL::to('add_new_project') }}">
	                <button class="btn btn-red btn-lg btn-has-icon bold text-uppercase">
	                    <span class="bicon">
	                        <img src="{{ URL::asset('images/file-add.png') }}" alt="Create New PROJECT">
	                    </span>
	                    <span class="btext">Create New PROJECT</span>
	                </button>
	                </a>
	            </div>
	            <div class="col-sm-6">
	                <div class="input-group input-group-eql search-group">
	                    <input type="text" class="form-control">
	                    <span class="input-group-btn">
	                        <button type="button" class="btn btn-black bold uppercase">Search</button>
	                    </span>
	                </div>
	            </div>
	        </div>

	        @include('admin.pages.dashboard.table')

	    </div>
	</section>

@endsection