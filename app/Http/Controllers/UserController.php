<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Auth;
use App\Helpers\SitemapHelper;
use App\User;
use Bican\Roles\Models\Role;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function __construct() {
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::latest()->paginate(15);
        SitemapHelper::push("使用者列表", 'user');
        return view('user.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return redirect('auth/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request, $id)
    {
        $user = User::findOrFail($id);
		return view('user.show', [
			'user' => $user,
            'nobreadcrumb' => true,
			'isHome' => (Auth::check() && $id == Auth::user()->id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::orderBy('level', 'asc')->get();
        return view('user.edit', [
            'user' => $user,
            'roles' => $roles,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $user = User::findOrFail($id);
        $user->student_id = $request->student_id;
        $pwValidator = Validator::make($request->all(), [
            'password' => 'required|confirmed|min:6',
        ]);
        if ($pwValidator->fails()) {
            if ($request->has('password')) {
                return back()
                    ->withErrors($pwValidator)
                    ->withInput();
            }
        } else {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        if ($request->has('role')) {
            $newRole = Role::findOrFail($request->role);
            $user->detachAllRoles();
            $user->attachRole($newRole);
        }
        
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if (!$user->hasRole('admin')) {
            $user->delete();
        }
        return redirect('user');
    }
}
