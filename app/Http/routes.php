<?php

// Auth Routes
Route::group(array('prefix' => '/','middleware' => 'web','as' => 'auth'), function()
{
	//Login Routes
	Route::get('/', [
		'uses'			=> 'LoginController@userLoginView',
		'middleware'	=> 'before_loggedin',
		'as'			=> 'login.view'
		]);

	Route::get('login', [
		'uses' 			=> 'LoginController@userLoginView',
		'middleware'	=> 'before_loggedin',
		'as' 			=> 'login.view'
		]);

	Route::post('login', [
			'uses' => 'LoginController@userLoginProcess',
			'as' => 'login.process'
		]);

	//Register Routes
	Route::get('register', [
			'uses' => 'LoginController@UserRegisterView',
			//'middleware' => 'admin',
			'as' => 'register.view'
		]);

	Route::post('register', [
			'uses' => 'LoginController@userRegisterProcess',
			'as' => 'register.process'
		]);

	Route::get('logout', [
			'uses' => 'LoginController@userLogout',
			'as' => 'logout'
		]);
});

//Admin Routes
Route::group(array('prefix' => '/','namespace' => 'Admin','middleware' => 'web','as' => 'admin'), function()
{
	//Project DashBoard - Start
		Route::get('dashboard', [
			'uses' => 'DashBoardController@viewDashBoard',
			'as' => 'admin.viewDashBoard'
			]);
		Route::post('dashboard', [
			'uses' => 'DashBoardController@datatablesDashBoard',
			'as' => 'admin.viewDashBoard'
			]);
	//Project DashBoard - END

	//Adding New Project - Start
		Route::get('add_new_project', [
			'uses' => 'AdminController@showAddProject',
			'as' => 'admin.add_project_show'
			]);

		Route::post('add_new_project', [
			'uses' => 'AdminController@addProjectPost',
			'as' => 'admin.addProjectPost'
			]);
	//Adding New Project - END

	//Project Edit - Start
		Route::get('porject_edit/{proposal_no}', [
			'uses' => 'PorjectEditController@editProject',
			'as' => 'admin.detailsProject'
			]);

		Route::post('porject_edit/{proposal_no}', [
			'uses' => 'PorjectEditController@editProjectPost',
			'as' => 'admin.detailsProjectPost'
			]);
	//Project Edit - END

	//Project Opportunity - Start
		Route::get('project_opportunity/{proposal_no}', [
			'uses' => 'AdminController@opportunityProject',
			'as' => 'admin.opportunityProject'
			]);

		Route::post('project_opportunity/{proposal_no}', [
			'uses' => 'AdminController@opportunityProjectPost',
			'as' => 'admin.opportunityProjectPost'
			]);
	//Project Opportunity - END

	//Project Details - Start
		Route::get('porject_details/{proposal_no}', [
			'uses' => 'PorjectDetailsController@detailsProject',
			'as' => 'admin.detailsProject'
			]);

		Route::post('porject_details/{proposal_no}', [
			'uses' => 'PorjectDetailsController@detailsProjectPost',
			'as' => 'admin.detailsProjectPost'
			]);
	//Project Details - END

	//Look and Feel - Start
		Route::get('porject_visual/{proposal_no}', [
			'uses' => 'PorjectVisualController@viewPorjectVisual',
			'as' => 'admin.viewDashBoard'
			]);
		Route::post('porject_visual/{proposal_no}', [
			'uses' => 'PorjectVisualController@addPorjectVisual',
			'as' => 'admin.addPorjectVisual'
			]);
	//Look and Feel - END

	//Project Costing - Start
		Route::get('porject_costing/{proposal_no}', [
			'uses' => 'PorjectCostingController@viewPorjectCosting',
			'as' => 'admin.viewProjectCosting'
			]);
	//Project Costing - END

	//Project Hosting - Start
		Route::get('porject_hosting/{proposal_no}', [
			'uses' => 'PorjectHostingController@viewPorjectHosting',
			'as' => 'admin.viewProjectCosting'
			]);

		Route::post('porject_hosting/{proposal_no}', [
			'uses' => 'PorjectHostingController@porjectHostingPost',
			'as' => 'admin.porjectHostingPost'
			]);
	//Project Hosting - END
});

//User Routes
Route::group(array('prefix' => '/','namespace' => 'User','middleware' => 'web','as' => 'user'), function()
{
	Route::get('active', [
		'uses' => 'UserController@showAvailableWorks',
		'as' => 'user.available_works'
		]);
});

