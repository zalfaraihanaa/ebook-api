<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

        public function me (){
            return [
                'Nis' => 3103120238,
                'Name' => 'Zalfa Raihana Fauziah',
                'Phone' => '089530121520',
                'Class' => 'XII RPL 7'
            ];
        }
       
}

   