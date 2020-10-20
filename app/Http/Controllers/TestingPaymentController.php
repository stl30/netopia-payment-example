<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingPaymentController extends Controller
{
    public function formForPaymentData()
    {
        return view('card');

    }

    public function cardRedirect(Request $request)
    {
        return view('card-redirect')->with([
            'request' => $request
        ]);

    }

    public function cardConfirm()
    {

    }

    public function cardReturn()
    {

    }

}
