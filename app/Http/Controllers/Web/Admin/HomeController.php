<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getDashboardPage() {
        return view ('admin.pages.others.dashboard');
    }
}
