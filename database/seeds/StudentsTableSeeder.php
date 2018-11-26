<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = new Student();
        $student->name = 'Huỳnh Văn An';
        $student->age = '15';
        $student->gender = 'Nam';
        $student->email = 'abc@codegym.com';
        $student->class = '10/5';
        $student->school = 'Hoa Vang';
        $student->image = '';
        $student->dayOfBirth = '1999-12-27';
        $student->phoneNumber = '0935806852';
        $student->address = 'Đà Nẵng';
        $student->hobbies = 'Sports';
        $student->favouriteSubject = 'Math';
        $student->favouriteDish = 'Chicken';
        $student->favouriteSong = 'Forever';
        $student->description = "I am a good boy!!!";
        $student->nameOfDad = 'Huỳnh Văn Xao';
        $student->nameOfMom = 'Huỳnh Thị Xuyến';
        $student->nationality = 'Việt Nam';
        $student->idol = 'Maria';
        $student->save();
    }
}
