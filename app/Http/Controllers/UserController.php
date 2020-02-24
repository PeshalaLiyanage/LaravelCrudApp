<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
//        $this->middleware('auth')->only('create');
//        $this->middleware('auth')->only('store');
//        $this->middleware('auth')->only('create');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $users = DB::table('users')->orderBy('created_at', 'desc')->paginate(10);

        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('users.addNewUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'bail|required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'address' => 'required',
            'school' => 'required',
            'university' => 'required',
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);


        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->address = $request->address;
        $users->school = $request->school;
        $users->university = $request->university;
        $users->password = Hash::make($request->password);
        $users->save();

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {

        $user = User::find($id);
//      echo $user;

        return view('users.edit')->with('user',$user);
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
        $request->validate([
            'name' => 'bail|required',
            'email' => ['required', 'string', 'email', 'max:255'],
            'address' => 'required',
            'school' => 'required',
            'university' => 'required',
        ]);


        $users =User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->address = $request->address;
        $users->school = $request->school;
        $users->university = $request->university;
        $users->save();

      ;

        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();
        return $this->index();
    }
}
