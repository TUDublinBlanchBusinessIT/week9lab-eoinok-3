<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use \App\Models\Customer as Customer; 

class CustomerController extends Controller 
{ 
    public function new() 
    { 
        //echo "hello";
        return view('customers.new'); 
    } 

    public function create(Request $request) 
    { 
         //instantiate a new Customer object from the Model class
        $customer = new Customer();
        //call setter on the object passing values from the View
        $customer->setFirstname($request->firstname);
        $customer->setSurname($request->surname);
        //save the object which will create a new customer in the DB
        $customer->save(); 
    } 
} 
?> 