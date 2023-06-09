<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class DbController extends Controller
{
    
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
  public function delete($id)
    {
    Doctor::find($id)->delete();
    return redirect()->route('view_doctors')->with('success','deleted successfully');
  }
}
