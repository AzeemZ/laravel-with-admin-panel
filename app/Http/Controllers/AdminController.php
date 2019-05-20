<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function index2()
    {
        return view('admin.index2');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function register()
    {
        return view('admin.register');
    }

    public function charts()
    {
        return view('admin.charts');
    }

    public function error403()
    {
        return view('admin.error-403');
    }

    public function error404()
    {
        return view('admin.error-404');
    }

    public function error405()
    {
        return view('admin.error-405');
    }

    public function error500()
    {
        return view('admin.error-500');
    }

    public function formBasic()
    {
        return view('admin.form-basic');
    }

    public function formWizard()
    {
        return view('admin.form-wizard');
    }

    public function grid()
    {
        return view('admin.grid');
    }

    public function fontAwesomeIcons()
    {
        return view('admin.icon-fontawesome');
    }

    public function materialIcons()
    {
        return view('admin.icon-material');
    }

    public function buttons()
    {
        return view('admin.buttons');
    }

    public function calendar()
    {
        return view('admin.calendar');
    }

    public function chat()
    {
        return view('admin.chat');
    }

    public function elements()
    {
        return view('admin.elements');
    }

    public function gallery()
    {
        return view('admin.gallery');
    }

    public function invoice()
    {
        return view('admin.invoice');
    }

    public function tables()
    {
        return view('admin.tables');
    }

    public function widgets()
    {
        return view('admin.widgets');
    }
}
