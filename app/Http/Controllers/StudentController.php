<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class StudentController extends Controller
{
    public function index()
    {
        $students = [
            [
                'name' => 'Kerin',
                'major' => 'Informatika',
                'age' => 22,
                'courses' => ['Pemrograman Web', 'Database', 'Cloud Computing'],
            ],
            [
                'name' => 'Kai',
                'major' => 'Sistem Informasi',
                'age' => 21,
                'courses' => ['UI\UX Design', 'Manajemen Proyek', 'IoT'],
            ]
            ];

            return view('students.index', compact('students'));
    }
}