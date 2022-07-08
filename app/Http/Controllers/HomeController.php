<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function hello()
    {
        return view('hello');
    }
    public function form()
    {
        return view('form');
    }
    public function save()
    {
      $name=request('na');
      $age=request('ag');
      $username=request('us');
      $password=request('pa');
      User::create([
        'name'=>$name,
        'age'=>$age,
        'username'=>$username,
        'password'=>$password,
      ]);
      return redirect()->route('table.user');
    }
    public function table()
    {
      $users=User::paginate(5);
      //return $users;
      return view('table',compact('users'));
    }
    public function deleteuser($id)
    {
      User::find(decrypt($id))->delete();
      return redirect()->route('table.user');
    }
    public function edituser($id)
    {
      $users=User::find(decrypt($id));
      #return $users;
    return view('edituser',compact('users'));
    }
    public function updateuser()
    {
      $uid=request('u_id');
      $users=User::find($uid);
      $users->update([
        'name'=>request('na'),
        'age'=>request('ag'),
        'username'=>request('us'),
        'password'=>request('pa')
      ]);
      return redirect(route('table.user'));
    }
}
