<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserRequest;

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
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */

    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    /**
     * edit form for user
     * @param \App\User $user
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

    /**
     * edit form for user
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */

    public function update(UserRequest $request, User $user)
    {
        $request->replace(['password' => $request->get('password')]);

        //we are putting old user password in case he left fields empty
        if (empty($request->get('password'))) {
            $request->replace(['password' => $user->password]);
        }

        $user->update($request->all());

    }


}
