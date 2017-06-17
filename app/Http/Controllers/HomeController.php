<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $roleCount = \App\Role::count();
        if($roleCount != 0) {
            if($roleCount != 0) {
                return view('homepage');
            }
        } else {
            return view('errors.error', [
                'title' => 'Migration not completed',
                'message' => 'Please run command <code>php artisan db:seed</code> to generate required table data.',
            ]);
        }
    }
    public function sendEmail(Request $request)
    {
        $from = $request->input('email_id');
        $name=$request->input('name');
        //dd($name);
        $feedback=$request->input('feedback');
        Mail::send('email_swift/confirmation', ['name' => $name, 'feedback' => $feedback], function ($m) use ($from) { 
            $m->sender($from, '')->subject('Feedback@afewtaps');
            $m->to('ekta30121995@gmail.com', 'Ekta Tiwari');
        });
        return view('homepage');
    }
    public function loginEmail(Request $request)
    {
        $name=$request->input('name');
        $email=$request->input('email');
        $mobile_no=$request->input('mobile');
        $address=$request->input('address');
        Mail::send('email_swift/loginconfirmation', ['name' => $name, 'email' => $email, 'mobile_no' => $mobile_no, 'address' => $address], function ($m) use ($email) { 
            $m->sender($email, '')->subject('EstablishmentLogin@afewtaps');
            $m->to('ekta30121995@gmail.com', 'Ekta Tiwari');
        });
        return view('homepage');
    }
    public function restaurantContact(Request $request){
        $restaurant_name=$request->input('restaurants_name');
         $restaurant_address=$request->input('restaurants_address');
          $name=$request->input('contact_name');
           $number=$request->input('contact_num');
           $email="ekta30121995@gmail.com";
           Mail::send('email_swift/loginconfirmation', ['restaurant_name' => $restaurant_name, 'restaurant_address' => $restaurant_address, 'name' => $name, 'number' => $number], function ($m) use ($email) { 
            $m->sender($email, '')->subject('EstablishmentLogin@afewtaps');
            $m->to('ekta30121995@gmail.com', 'Ekta Tiwari');
        });
        return view('homepage');
    }
    public function view(){
        return view('loginestablishment');
    }
}
