<?php

namespace App\Http\Controllers;

use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use App\Mail\SendEmail;
use App\Student;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class EmailController extends Controller
{
    public function sendEmail(Request $request, $id)
    {
        $students = Student::finddOrFail($id);
        Mail::to($request->email)->send(new SendEmail($students));
        return back();
    }

}
