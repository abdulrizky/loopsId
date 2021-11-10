<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function (Request $request) {
    # A.
    $_5a = response()->json(Post::all());

    # B.
    $_5b = response()->json(Post::with('comments')->get());

    # C. Untuk soal point C tidak bisa karena semua komen mempunyai user ID
    # maka saya menyimpulkan menampilkan semua komen
    $_5c = response()->json(Comment::all());

    # Untuk menampilkan jalankan fungsi return dari variabel di atas
    // return $_5a;
    $data['user'] = User::all();
    $data['status'] = "User Ditemukan";
    return view('welcome',['data'=>$data]);
});
