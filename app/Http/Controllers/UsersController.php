<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller {

    public function index() {
        $users = [
            0 => ['first_name' => 'SM Farhad',
                'last_name' => 'Hossain',
                'location' => 'Bangladesh'],
            1 => ['first_name' => 'Donald J',
                'last_name' => 'Trump',
                'location' => 'USA'],
            2 => ['first_name' => 'Angela',
                'last_name' => 'Merkel',
                'location' => 'Germany']
        ];
        return view('admin.users.index', compact('users'));
    }

    public function create() {
        return view('admin.users.create');
    }

    public function store(Request $request) {
        User::create($request->all());
        return 'success';
        return $request->all();
    }

}
