<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function () {
    $data = [
        'students' => [
            ['name' => 'John Doe', 'age' => 20],
            ['name' => 'Jame Smith', 'age' => 30],
            ['name' => 'Sam Brown', 'age' => 19]
        ]
    ];
    
    return response()->json($data);
});


Route::get('/teachers', function () {
    $data = [
        'teachers' => [
            ['name' => 'Mr. Smith', 'Subject' => 'Math'],
            ['name' => 'Mr. Johnson', 'Subject' => 'Science'],
            ['name' => 'Mrs. Brown', 'Subject' => 'English']
        ]
    ];
    
    return response()->json($data);
});

Route::get('/teachers', function () {
    $data = [
        'teachers' => [
            ['name' => 'Mr. Smith', 'Subject' => 'Math', 'id' => 1],
            ['name' => 'Mr. Johnson', 'Subject' => 'Science', 'id' => 2],
            ['name' => 'Mrs. Brown', 'Subject' => 'English', 'id' => 3]
        ]
    ];
    
    return response()->json($data);
});

Route::get('/students/{id}', function ($id) {
    $data = [
        'student' => [
            'name' => 'John Doe',
            'age' => 20,
            'id' => $id
        ]
    ];
    
    return response()->json($data);
});
