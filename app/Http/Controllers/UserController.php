<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use App\Models\Department;
use App\Models\User;
use App\Models\Position;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('department')->get();
        $departments = Department::all();
        return view('dashboard.user-list', compact('users', 'departments'));
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $departments = Department::all(); // Fetch all departments from the database
        $positions = Position::all();
        return view('dashboard.create-user', compact('departments','positions'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|unique:users,username',
            'position_id' => 'required',
            'department_id' => 'required',
            'role' => 'required|exists:roles,name',
            'location'=>'required|string',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Create a new user
        //REVIEW TO ADD CONTACT
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->position_id = $request->position_id;
        $user->department_id = $request->department_id;
        $user->location= $request->location;
        $user->password = bcrypt($request->password);
        $user->save();

        $assign=$user->assignrole($request->role);
        if($assign){

        return redirect()->back()->with('success', 'User created successfully');

        }else{
            return redirect()->back()->with('error', 'Creating User Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function update(Request $request, $id)
    {
        // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required',
        'username' => 'required',
        'position' => 'required',
        'email' => 'required|email',
        'department_id' => 'required|exists:departments,id',
        'roles' => 'required|array',
    ]);

    // Find the user by ID
    $user = User::findOrFail($id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->username = $request->username;
    $user->position = $request->position;
    $user->department_id = $request->department_id;
    $user->password = bcrypt($request->password);
    $user->save();
    // Update the user's details

    // Update the user's roles
    $roles = Role::whereIn('name', $request->roles)->get();
    $role= $user->syncRoles($roles);

    if($role){

        return redirect()->back()->with('success', 'User updated successfully');

        }else{
            return redirect()->back()->with('error', 'Updating User Failed');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully.');
    }

}
