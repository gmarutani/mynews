<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WwController extends Controller
{
public function add()
  {
    return view('admin.news.create');
}
}
