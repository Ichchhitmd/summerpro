<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Item;





class ItemController extends Controller
{
    public function index(){
        
        $data=Item::all();
    
           
           return view('items',['items'=>$data]);
               
         } 


    public function pizza(){
        
        // $all=Item::all();
        
        $data = Item::where('type','pizza')->get();
           
           return view('items',['items'=>$data]);
               
         } 

         public function momo(){
        
            // $all=Item::all();
            
            $data = Item::where('type','momo')->get();
               
               return view('items',['items'=>$data]);
                   
             } 

             public function sandwich(){
        
                // $all=Item::all();
                
                $data= Item::where('type','sandwich')->get();
                   
                   return view('items',['items'=>$data]);
                       
                 } 
}