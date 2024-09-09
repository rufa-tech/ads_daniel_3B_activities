<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	
    use HasFactory;
}

public function course()
{
	return $this->belongsTo(course::class);
}
Route::get('/course/{id}/students', function ($id){
	$course = course::find($id);
	return $course->students;
});