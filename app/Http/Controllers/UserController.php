<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; // مثل الامبورت


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $users = User::get();
        //    dd($users); بس حتى اعرضهم و اتاكد
        return view('users', compact('users')); // حتى اكدر اعرضها بفيو لازم اسويلها ريتيرن للفيو
    }// الكوباكت هي بالحقيقة بارسنك

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('users-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $usersData = $request->all(); // هاي تجيب اليوزر الي توة انظاف
        // dd($usersData);  // بس حتى اعرضة 
        // ممكن يدز المصفوفة رأسا بس ممكن تسوي خلل انها تدز كلمة السر غير مشفرة
        $user           = new User;
        $user->name     = $request->input('name');
        $user->email    = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        // dd($user);
        $user->save();
// bcrypt للتشفير
 return redirect('users');
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
        //
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
        return redirect('users');


        // $user::destroy([1,2,3])   // ممكن تمسح اكثر من واحد

        // $user::where('name','Full name')->delete();   // بدون  id 
    }
}
