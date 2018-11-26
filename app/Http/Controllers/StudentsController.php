<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Mail\SendEmail;
use App\Exports\StudentsExport;
use Maatwebsite\Excel\Exporter;
use App\Http\Requests\StudentsRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.list', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function create()
    {
        $students = Student::all();
        return view('students.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request, StudentsRequest $studentsRequest)
    {
        $student = new Student();
        $student->name = $studentsRequest->input('name');
        $student->age = $studentsRequest->input('age');
        $student->gender = $request->input('gender');
        $student->gender = $request->input('gender');
        $student->email = $request->input('email');
        $student->class = $request->input('class');
        $student->school = $request->input('school');
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $image = $request->image;
                $clientName = $image->getClientOriginalName();
                $path = $image->move(public_path('upload/images/'), $clientName);
                $student->image = $clientName;
            }
        }
        $student->dayOfBirth = $request->input('dayOfBirth');
        $student->phoneNumber = $request->input('phoneNumber');
        $student->address = $request->input('address');
        $student->hobbies = $request->input('hobbies');
        $student->favouriteSubject = $request->input('favouriteSubject');
        $student->favouriteDish = $request->input('favouriteDish');
        $student->favouriteSong = $request->input('favouriteSong');
        $student->description = $request->input('description');
        $student->nameOfDad = $request->input('nameOfDad');
        $student->nameOfMom = $request->input('nameOfMom');
        $student->nationality = $request->input('nationality');
        $student->idol = $request->input('idol');
        $student->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Tạo mới thành công');
        //tao moi xong quay ve trang danh sach
        return redirect()->route('students.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $students = Student::findOrFail($id);
        return view('students.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(Request $request, $id, StudentsRequest $studentsRequest)
    {
        $student = Student::findOrFail($id);
        $student->name = $studentsRequest->input('name');
        $student->age = $studentsRequest->input('age');
        $student->gender = $request->input('gender');
        $student->email = $request->input('email');
        $student->class = $request->input('class');
        $student->school = $request->input('school');
        if ($request->has('image')) {
            if ($request->file('image')->isValid()) {

                //xoa anh cu neu co
                $currentImg = $student->image;
                if ($currentImg) {
                    Storage::delete('upload/images/' . $currentImg);
                }
                // cap nhat anh moi
                $image = $request->image;
                $clientName = $image->getClientOriginalName();
                $path = $image->move(public_path('upload/images/'), $clientName);
                $student->image = $clientName;
            }
        }
        $student->dayOfBirth = $request->input('dayOfBirth');
        $student->phoneNumber = $request->input('phoneNumber');
        $student->address = $request->input('address');
        $student->hobbies = $request->input('hobbies');
        $student->favouriteSubject = $request->input('favouriteSubject');
        $student->favouriteDish = $request->input('favouriteDish');
        $student->favouriteSong = $request->input('favouriteSong');
        $student->description = $request->input('description');
        $student->nameOfDad = $request->input('nameOfDad');
        $student->nameOfMom = $request->input('nameOfMom');
        $student->nationality = $request->input('nationality');
        $student->idol = $request->input('idol');
        $student->save();
        
        Mail::to($request->email)->send(new SendEmail($request));
        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật thành công, email đã được gửi đi!');
        //cap nhat xong quay ve trang danh sach
        return redirect()->route('students.index');
    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int $id
//     * @return Response
//     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $image = $student->image;
        //delete image
        if ($image) {
            Storage::delete('upload/images/' . $image);
        }
        $student->delete();
        //dung session de dua ra thong bao
        Session::flash('success', 'Xóa thành công');

        //xoa xong quay ve trang danh sach khach hang
        return redirect()->route('students.index');
    }


    public function export()
    {
        return Excel::download(new StudentsExport(), 'users.xlsx');
    }
}
