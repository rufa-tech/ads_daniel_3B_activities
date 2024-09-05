<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/students/create', function(){
$student  = new student();
$student->first_name = 'Rufa Mae';
$student->last_name = 'Daniel';
$student->email = 'rufamaedaniel89gmail.com';
$student->save();
return 'Student Created!';
});	

Route::get('/students', function (){
	$students = student::all();
	return $students;
});

Route::get('/students/update', function (){
	$student = student::where('email', 'rufamaedaniel89@gmail.com')->first();
	$student->email = 'rufamaedaniel89@gmail.com';
	$student->save();
	return 'Student Updated!';
});

Route::get('/students/delete', function (){
	$student = Student::where('email', 'rufamaedaniel89')->first();
	$student->delete();
	return 'Student Deleted';


});

Route::get('/couirses/create', function (){
	$course = new Course();
	$course->course_name = 'Introduction od Databases';
	$course->save();
	return 'Course Created!';
});