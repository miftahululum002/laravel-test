<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Machine;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\WorkTransaction;

class WorkTransactionController extends Controller
{
    public function index(Request $request)
    {
        $data['machines'] = Machine::all();
        $data['activities'] = Activity::all();
        $data['users'] = User::all();
        $data['sites'] = Site::all();
        $data['months'] = $this->getMonths();
        return view('work', $data);
    }

    private function getMonths()
    {
        return [
            '01' => 'Januari',
            '02' => 'Februari',
            '03' => 'Maret',
            '04' => 'April',
            '05' => 'Mei',
            '06' => 'Juni',
            '07' => 'Juli',
            '08' => 'Agustus',
            '09' => 'September',
            '10' => 'Oktober',
            '11' => 'November',
            '12' => 'Desember',
        ];
    }

    public function data(Request $request)
    {
        if ($request->ajax()) {
            $where = null;
            $whereRaw = null;
            if (!empty($request->machine_id)) {
                $where['machine_id'] = $request->machine_id;
            }
            if (!empty($request->activity_id)) {
                $where['activity_id'] = $request->activity_id;
            }
            if (!empty($request->user_id)) {
                $where['user_id'] = $request->user_id;
            }
            if (!empty($request->month)) {
                $whereRaw = "month(created_at) = $request->month";
            }

            $data = WorkTransaction::where($where)
                ->where(function ($query) use ($whereRaw) {
                    if (!empty($whereRaw)) {
                        $query->whereRaw($whereRaw);
                    }
                })
                ->get();

            $datatable = DataTables::of($data)
                ->addColumn('submitted_by', function ($data) {
                    return $data->user->name;
                })
                ->addColumn('created_at', function ($data) {
                    return date('Y-m-d', strtotime($data->created_at));
                })
                ->addColumn('site_code', function ($data) {
                    return $data->site->name;
                })
                ->addColumn('activity', function ($data) {
                    return $data->activity->name;
                })
                ->addColumn('machine_id', function ($data) {
                    return $data->machine->name;
                })
                ->addColumn('action', function ($data) {
                    return '<button type="button" class="btn btn-primary btn-sm">Edit</button>';
                });
            return $datatable->make(true);
        }
    }

    private
    function scriptMinifields($selector)
    {
        // Script to minified the ajax
        return <<<CDATA
    var formData = $("$selector").serializeArray();
    $.each(formData, function(i, obj){
        data[obj.name] = obj.value;
    });
CDATA;
    }

}
