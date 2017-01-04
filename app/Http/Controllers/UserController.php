<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * list users
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index', ['users' => DB::table('users')->paginate(3)]);
    }

    /**
     * show one user
     * @param $user
     * @return \Illuminate\Http\Response
     */

    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    /**
     * edit form for user
     * @param $user
     * @return \Illuminate\Http\Response
     */

    public function edit(User $user)
    {
        return view('user.edit', [
            'user' => $user,
            'url' => route('user.update', $user->id),
            'method' => 'PATCH',
            'action' => 'Update'
        ]);
    }

    public function update(User $user)
    {
        dd($user);

    }


}
