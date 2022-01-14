<?php

namespace App\Http\Controllers;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\giver;
use App\school;
use App\User;
use App\stud;
class student extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $school=school::all();

     $giver=giver::latest()->paginate(5);
     return view('student.giverr',['give'=>$giver]);



    }
/**صفحة التعديل **/
public function edit($id)
{


    $school=school::all();
  $giver=giver::where('id',$id)->get();
return view('student.edit',['giver'=>$giver,'school'=>$school]);

}
//االتعديل
public function edit4(Request $request )
{

    $data=giver::find($request->id);
     $data->name = $request->name;
    $data->jawal = $request->jawal;

    $data->bank_number = $request->bank_number;
    $data->bank_name = $request->bank_name;
    $data->transfer = $request->transfer;
    $data->day = $request->day;
    $data->Month = $request->Month;
    $data->Year = $request->Year;
    $data->student = $request->student;
    $data->date_k = $request->date_k;
    $data->school = $request->school;
    $data->save();
    return redirect('student/giverr')->with('ms','تم التعديل بنجاج');
}
//SELECT `id`, `name`, `jawal`, `bank_number`, `bank_name`, `transfer`, `day`, `Month`, `Year`, `student`, `date_k`,
//`school`, `created_at`, `updated_at` FROM `givers` WHERE 1
  /**صفحة التعديل **/
public function add_giver1()
{


    $school=school::all();

return view('student.add_giver',['school'=>$school]);

}
public function add_giver(Request $request)
{

   // $name= $_POST['name'] مثل هذا القديم بالاسفل قيمة الريقوست
    $data=new giver();
    $data->name = $request->name;
    $data->jawal = $request->jawal;

    $data->bank_number = $request->bank_number;
    $data->bank_name = $request->bank_name;
    $data->transfer = $request->transfer;
    $data->day = $request->day;
    $data->Month = $request->Month;
    $data->Year = $request->Year;
    $data->student = $request->student;
    $data->date_k = $request->date_k;
    $data->school = $request->school;
    $data->email = $request->email;
   // $data->user_name = Auth::user()->name;
    //$data->user_id = Auth::user()->id;
    $data->save();
    $User=new User();
    $User->name = $request->name;
    $User->email = $request->email;
    $User->password = Hash::make($request->password) ;
    $User->save();
    return redirect('student/giverr')->with('success','تم الادخال بنجاج');
}
/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //give
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file=$request->file('file');
        Excel::import(new UsersImport,$file);
        return redirect('student/importsdb')->with('msg', "تم الرفع بنجاح");

    }
    public function one_sc($id)
    {
      $giver=giver::where('id',$id)->get();
    return view('student/oness',['giver'=>$giver]);

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
        giver::destroy($id);
        return redirect('student/giverr')->with('msg', "تم الحذف بنجاح");
    }


    public function stud()
    {

        $stud=stud::all();

     $giver=stud::orderBy('Type','asc','School')->latest()->paginate(20);
     return view('student.stud',['stud'=>$giver]);

    //  $school=school::where('user_id',Auth::user()->id)->orderBy('id', 'DESC')->latest()->paginate(5);

    }






}
