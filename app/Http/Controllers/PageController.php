<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function index2()
    {
        return view('layout.index2');
       
    }
    //Admin Home
    public function adminhome()
        {
          $user=Auth::user();
          return view('admin.adminhome',compact('user'));
        }
  //Register Staff
  public function Staff_register()
  {
    return view('admin.Staff_register');

  }
  public function staff_reg(Request $request)

  {
   $request->validate([
    'name'=>'required',
    'username'=>'required',
    'email'=>'required',
    'password'=>'required',
    'type'=>'required',
    'image'=>'mimes:jpeg,jpg,png,gif|max:2048'
   ]);
   $data=$request->all();
   $path='asset/storage/images/'.$data['image'];
   $fileName=time().$request->file('image')->getclientoriginalName();
   $PATH=$request->file('image')->storeAs('images',$fileName,'public');
   $datas["image"]='/storage/'.$path;
   $data['image']=$fileName;
   $data["password"]=bcrypt($data["password"]);

   User::create($data);
   return redirect()->route('Staff_register')->with('success','Registered Successfully');
     
  }
  //view staff
  public function staff_view()
   {
    $view=User::all();
    return view('staff.staff_view',compact('view'));
   }
   //Register Doctors
  public function doctor_register()
  {
    return view('admin.doctor_register');
  }
 public function doctor_reg(Request $request)
  {
   $request->validate([
    'doctor_name'=>'required',
    'specialisation'=>'required',
    'contact'=>'required',
    'email'=>'required',
    'image'=>'mimes:jpeg,jpg,png,gif|max:2048',
     'time'=>'required'
   ]);
   $data=$request->all();
   $path='asset/storage/images/'.$data['image'];
   $fileName=time().$request->file('image')->getclientoriginalName();
   $PATH=$request->file('image')->storeAs('images',$fileName,'public');
   $datas["image"]='/storage/'.$path;
   $data['image']=$fileName;

   Doctor::create($data);
   return redirect()->route('doctor_register')->with('success',' Doctor registered successfully');
   }
   //View Doctrs
   public function view_doctors()
   {
     $view=Doctor::all();
     return view('admin.view_doctors',compact('view'));
     
   }
   public function logout()
   {

    Auth::logout();
    return redirect()->route('login');
   }  
     
}
