<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class BookController extends Controller
{
    /**
* GET /books
*/
public function index() {
    return App::environment();
}
}
