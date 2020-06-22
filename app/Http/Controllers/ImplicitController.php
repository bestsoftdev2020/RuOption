<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImplicitController extends Controller
{
    //
    private $myclass;
    
    public function __construct(\MyClass $myclass){
        $this->myclass = $myclass;
    }

    public function index(\MyClass $myclass) {
        dd( $myclass );
    }
}
