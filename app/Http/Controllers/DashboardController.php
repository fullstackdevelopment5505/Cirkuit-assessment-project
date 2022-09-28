<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail;
class DashboardController extends Controller
{
    //
    public function index() {
        $uspsUserId = env("USPS_USER_ID", null);
        $mail = Mail::first();
        return view('welcome', compact('uspsUserId', 'mail'));
    }
}
