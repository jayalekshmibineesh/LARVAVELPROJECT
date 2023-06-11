<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class DbController extends Controller
{
 //Edit doctors   
    public function edit($id)
    {
        $data=Doctor::find($id);
        return view('admin.edit',compact('data'));
    }    

 public function update(Request $request,$id)
 {
    $data=Doctor::find($id);
    $request->validate([
        'email'=>'email',
        'contact'=>'max:10',
         'image'=>'mimes:jpg,jpeg,png,gif|max:2048',
    ]);
    $data->doctor_name=$request->input('doctor_name');
    $data->specialisation=$request->input('specialisation');
    $data->email=$request->input('email');
    $data->contact=$request->input('contact');
    if($request->hasfile('image')){
     $path='asset/storage/images/'.$data['image'];
       
    if(File::exists($path))
    {
        File::delete($path);
    }
     $fileName=time().$request->file('image')->getclientoriginalName();
     $path=$request->file('image')->storeAs('images',$fileName,'public');
     $datas["image"]='/storage/'.$path;
     $data->image=$fileName;
    
     $data->update();
}
   $data->update();
    return redirect()->route('view_doctors')->with('success',"updated successfully");
    
 }
 //Delete doctors
  public function delete($id)
  {
    Doctor::find($id)->delete();
    return redirect()->route('view_doctors')->with('success','deleted successfully');
  }
  //Edit Staff
  public function staff_edit($id)
  {
     $data=User::find($id);
     return view('staff.staff_edit',compact('data'));
  }
  public function deletestaff($id)
  {
    User::find($id)->delete();
    return redirect()->route('staff_view')->with('success','deleted successfully');
  }
  public function staff_update(Request $request,$id)
  {
    $data=User::find($id);
    $request->validate([
    'email'=>'email',
    'image'=>'mimes:jpg,jpeg,jif,png|max:2048'
     

   ]);
   $data->name=$request->input('name');
   $data->email=$request->input('email');
   $data->password=$request->input('password');
   $data->username=$request->input('username');
   $data->type=$request->input('type');
   if($request->hasfile('image'))
   {
    $path='asset/storage/images/'.$data['image'];
    if(File::exists($path))
    {
      File::delete($path);
    }
     $fileName=time().$request->file('image')->getclientoriginalName();
     $path=$request->file('image')->storeAs('images',$fileName,'public');
     $datas["images"]='/storage/' .$path;
     $data->image=$fileName;
     $data->update();

    }
    $data->update();
    return redirect()->route('staff_view')->with('success','updated succesfully');
  }
}
