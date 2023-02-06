<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    private static $student, $image, $imageUrl, $imageName, $extension, $directory,$message;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newStudent($request)
    {
        self::$student = new Student();
        self::$student->name         = $request->name;
        self::$student->email        = $request->email;
        self::$student->course       = $request->course;
        self::$student->image        = self::getImageUrl($request);
        self::$student->save();
    }

}
