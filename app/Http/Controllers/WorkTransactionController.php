<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\WorkTransaction;

class WorkTransactionController extends Controller
{
    public function index()
    {
        return DataTables::make(WorkTransaction::all())->toJson();
        return view('work');
    }
}
