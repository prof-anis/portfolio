<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //

    public function index()
    {
    	$projects = $this->getProjects();
     

    	return view("index" , compact("projects"));
    }


    private function getProjects()
    {
    	//load projects 

    	$projects = file_get_contents(base_path()."/projects.json");
		
    	$projects = json_decode($projects,true);
 
    	return ($projects);
    	 

    }

    public function contact(Request $request)
    {
    	$contact = Contact::create([
    		"name"=>$request->name,
    		"message"=>$request->message,
    		"email"=>$request->email
    	]);

    	return response()->json(['code'=>200,"msg"=>"success"]);
    }
}
