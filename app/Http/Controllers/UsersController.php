<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UsersController extends BaseController
{
    public function index() {
        $users = [
                0=> ['first_name'=>'SM Farhad',
                     'last_name'=>'Hossain',
                     'location'=>'Bangladesh'],
                1=> ['first_name'=>'Donald J',
                     'last_name'=>'Trump',
                     'location'=>'USA'],
                2=> ['first_name'=>'Angela',
                     'last_name'=>'Merkel',
                     'location'=>'Germany']
        ];
        return view('admin.users.index', compact('users'));
    }
}
