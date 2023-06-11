<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Factory\StudentFactory;
use Illuminate\Database\Seeder\StudentSeeder;



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
   // return view('welcome');

//    $user =  DB::table('students')->insert([
//     'name' => Str::random(10),
//     'email' => Str::random(10).'@gmail.com',
//     'address' => Str::random(10).', FUTA',
//     'department' => Str::random(10).' ,Department',
//     'level' => Str::random(1).'00 ,LEVEL',
//     'mobile'=> Str::random(10),
// ]);
//$users = Student::factory()->count(3)->make();


// 'name' => fake()->name(),
// 'email' => fake()->unique()->safeEmail(),
// 'address'=>Str::random(10).', address',
// 'department'=>Str::random(10).'Department',
// 'level'=>Str::random(1).'00 ,level',
// 'mobile'=>fake()->phone()

$user= Student::factory()->count(5)->create();
dd($user);
});
