<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mail;
class MailController extends Controller
{
    //
    public function index() {

    }

    public function store(Request $request) {
        try {
            $input = $request->all();
            $mail = Mail::updateOrCreate(['id' => 1], $input);
            return response()->json(['status'=> true]);
        } catch(Exception $ex) {
            return response()->json(['status' => false]);
        }
    }
}
