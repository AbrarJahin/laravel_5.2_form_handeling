<?php

namespace App\Http\Controllers\Admin;

use Request;
use App\Http\Controllers\Controller;
use App\ProjectType;
use App\User;
use App\Project;
use App\ProjectVisual;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Illuminate\Support\Facades\Input;

/*
	Functionality	-> Handel Project Edit
	Access			-> Only Admin
	Created At		-> 10/02/2016
	Created by		-> S. M. Abrar Jahin -> abrarjahin@outlook.com
*/

class PorjectVisualController extends Controller
{
	/*
		URL				-> No URL
		Functionality	-> Add default middleware to all functions into this class
		Access			-> Only Admin
		Created At		-> 09/02/2016
		Created by		-> S. M. Abrar Jahin -> abrarjahin@outlook.com
	*/
	public function __construct()
	{
		$this->middleware('admin');			//, ['except' => 'logout']
	}

    /*
        URL             -> get : /dashBoard
        Functionality   -> Project DashBoard
        Access          -> Only Admin
        Created At      -> 10/02/2016
        Updated At      -> 10/02/2016
        Created by      -> S. M. Abrar Jahin -> abrarjahin@outlook.com
    */
    public function viewPorjectVisual($proposal_no)
    {
        //return view('admin.pages.porject_visual.main');
         $projects = Project::where('proposal_no', $proposal_no)->first();         
         $projectvisual = ProjectVisual::where('project_id', $projects->id)->first(); 
       
          return view('admin.pages.porject_visual.main',
                                                        [
														 'projectvisual'			=> $projectvisual
														]);
    }

    public function addPorjectVisual($proposal_no)
     { // echo $proposal_no; die();
          
        $rules=[            
                    'sitemap'=> 'required|not_in:0',
                    'referance_websites'		=> 'required',
                    'referance_similarities'	=> 'required',
                    'preferred_color_1'		    => 'required',
                    'preferred_color_2'         => 'required',
                    'other_notes'	            => 'required'  
               ];

        $validator=Validator::make(Input::all(),$rules);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
           }
     	

        //Everything OK, So input the Data into DB or Update DB
            //Get Current Project - Start
              $project = Project::firstOrNew(array('proposal_no' => $proposal_no ));
              //dd($project);
            //Get Current Project - End

            //Update Project Details - Start
                $projectvisual = ProjectVisual::firstOrNew(array('project_id' => $project->id));


            //Update Project Details - Start
                //$projectvisual  = ProjectVisual();

                $projectvisual->sitemap   = Input::get('sitemap');
                $projectvisual->referance_websites   	= Input::get('referance_websites');
                $projectvisual->referance_similarities  = Input::get('referance_similarities');
                $projectvisual->preferred_color_1   	= Input::get('preferred_color_1');
                $projectvisual->preferred_color_2   	= Input::get('preferred_color_2');
                $projectvisual->other_notes   	= Input::get('other_notes');             

                $projectvisual->save();
           
           $projectvisual = ProjectVisual::where('project_id', $project->id)->first();
        
        return Redirect::back()
			                    ->withErrors(
			                                    [
			                                        'Project - "'.$proposal_no.'" Successfully Updated'
			                                    ]
			                                );


       }
                
} // end class
