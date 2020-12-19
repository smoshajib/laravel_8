<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employees;
session_start();
//use Session;

class EmployeesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $content = view('employees.add_employees');
        return view('admin_master')->with('admin-content', $content);
    }

    public function save_employees(Request $request) {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:tbl_employees|max:255',
            'nid' => 'required|unique:tbl_employees|max:255',
            'phone' => 'required|max:14',
            'address' => 'required',
            'photo' => 'required',
            'salary' => 'required',
            'vacation' => 'required',
            'city' => 'required',
        ]);


        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['experience'] = $request->experience;
        $data['salary'] = $request->salary;
        $data['vacation'] = $request->vacation;
        $data['city'] = $request->city;
        $data['address'] = $request->address;
        $data['nid'] = $request->nid;
        
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
//            echo 'file name' . $file->getClientOriginalName();

            $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $img_url='public/employees/';
            $file->move($img_url, $fileName);
            $data['photo'] = $img_url.$fileName;
        }
      DB::table('tbl_employees')->insert($data);

      $noti=array(
          'msg'=>'Employees Information Save  Successfully',
          'type'=>'success'
      );

      return redirect('/add-employees')->with($noti);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
