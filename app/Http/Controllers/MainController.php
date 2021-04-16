<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;

class MainController extends Controller
{
    
    public function welcome() {
        
        return view('welcome');
        
    }
    
    public function greeting($name) {
        
        return view('greeting',compact('name'));
        
    }
    
    public function index() {
        
        return view('index');
    }
    
    public function recipeCategories() {
        
        return view('recipe-categories');
    }
    
    public function about(Request $request) {
        
        $id = 0;
        if(!empty($request->id)){
            $id = $request->id;
            Contact::whereId($id)->delete();
        }
        $contacts = Contact::where('id','>', 0)->get();
        
        return view('about', compact('contacts','id'));
    }
    
    public function contactUs() {
        
        return view('contact');
    }
    
    public function contactUsPost(Request $request){
        $this->validate($request, [
                        'name' => 'required',
                        'email' => 'required|email',
                        'comment' => 'required'
                ]);
        
            
        
        
        
        $contact =new Contact();
        $contact->name = $request['name'];
        $contact->email = $request->email;
        $contact->message = $request->comment;
        
        $contact->save();
        
        Mail::to('nwiforemmanuella@gmail.com')->send(new ContactUs($contact));
        
        try{
            
            
            
        } catch (\Exception $ex){
            
        }
        
        return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');
    }
}
