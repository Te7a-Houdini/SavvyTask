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
        return view('user.index', ['users' => User::paginate(3)]);
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
     * @param \App\Http\Requests\UserRequest $request
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */

    public function update(UserRequest $request, User $user)
    {

        $request_array = $request->all();
        $request_array['password'] = $request->get('password');

        //we are putting old user password in case he left fields empty
        if (empty($request->get('password'))) {
            $request_array['password'] = $user->password;
        }

        $user->update($request_array);

        return redirect()->route('user.index');
    }

    /**
     * delete user
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }


}
