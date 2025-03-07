<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Language;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $employees = Employee::all();
        $languages = Language::all();
        return view('home', compact('employees', 'languages'));
    }

    public function create()
    {
        $languages = Language::all();
        return view('create', compact('languages'));
    }

    public function store(Request $request)
    {
        $employee = Employee::create($request->all());
        return redirect()->route('home');
    }

    public function edit($id)
    {
        $employee = Employee::find($id);
        $languages = Language::all();
        return view('edit', compact('employee', 'languages'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->update($request->all());
        return redirect()->route('home');
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('home');
    }
}
