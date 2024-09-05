<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\emp_info;
use Carbon\Carbon;



class EmpController extends Controller
{
    public function create(Request $request){
        // echo "dssdg";
        // dd($request);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|min:11|numeric',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        // else{
        //     echo "no error";
        // }

        $emp = new emp_info;
        $emp->name = $request->name;
        $emp->email = $request->email;
        $emp->phone = $request->phone;
        $emp->address = $request->address;
        $emp->created_at = Carbon::now();;
        $emp->save();
        return redirect('emplist')->with('status', 'Employee Information Has Been inserted');

    }

    public function list (){
        $emps = _emp::all();

        return view('emplist', compact('emps'));
    }
}
