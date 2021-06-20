<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class formController extends Controller
{
    function addData (Request $req){
        try {
            $form = new form;
            $form -> name=$req->name;
            $form -> surname=$req->surname;
            $form -> company=$req->company;
            $form -> companyWebsite=$req->companyWebsite;
            $form -> phone=$req->phone;
            $form -> email=$req->email;
            $form -> requests=$req->requests;
            $form -> commentary=$req->commentary;
            $form -> save();
            return view('pages/formOk');  
        } 
        catch (Exception $e) {
            Log::error('');
            Log::error('Error: '.$e->getMessage().' ******* In '.Route::currentRouteAction());
            Log::error('Line:'.$e->getLine());
            Log::error('File: '.$e->getFile());
            Log::error('');
            return view('pages/formKo');
        }
    }
}
