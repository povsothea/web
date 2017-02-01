<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use Mail;
use Illuminate\HttpResponse;
use Input;

class EmailController extends Controller
{
    function sendMail(Request $req)
    {
    	/*Log::info("request cycle without Queues started");


    	

    	Log::info("Request cycle without Queses Finished");
    	return redirect()->back();
*/    	
    	//Log::info("request cycle without Queues started")
    	Mail::send('emailcontent', ['data'=>$req], function ($message){
    		$message->from('sotheait99@gmail.com', 'Customer Webkh')->subject('User Request');
    		$message->to('freedown2015@gmail.com');

    		//Log::info("End of mail processing ...");
    	});

    	return 1;
    }
}
