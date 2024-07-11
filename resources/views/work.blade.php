@extends('layouts.app')
@section('content')
    <h1>Operator Work Transaction</h1>
    <div>
        <div class="d-flex">
            <div class="col">
                <label>Mesin ID</label>
                <select class="form-select" onchange="setFilter('#machine_id')" name="machine_id" id="machine_id">
                    <option value="">Pilih</option>
                    @if($machines)
                        @foreach($machines as $m => $ma)
                            <option value="{{$ma->id}}">{{$ma->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="col">
                <label>Month</label>
                <select class="form-select" onchange="setFilter('#month')" name="month" id="month">
                    <option value="">Pilih</option>
                    @if($months)
                        @foreach($months as $m => $ma)
                            <option value="{{$m}}">{{$ma}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="col">
                <label>Site</label>
                <select class="form-select" onchange="setFilter('#site_id')" name="site_id" id="site_id">
                    <option value="">Pilih</option>
                    @if($sites)
                        @foreach($sites as $m => $ma)
                            <option value="{{$ma->id}}">{{$ma->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="col">
                <label>Operator</label>
                <select class="form-select" onchange="setFilter('#user_id')" name="user_id" id="user_id">
                    <option value="">Pilih</option>
                    @if($users)
                        @foreach($users as $m => $ma)
                            <option value="{{$ma->id}}">{{$ma->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="col">
                <label>Activity</label>
                <select class="form-select" onchange="setFilter('#activity_id')" name="activity_id" id="activity_id">
                    <option value="">Pilih</option>
                    @if($activities)
                        @foreach($activities as $m => $ma)
                            <option value="{{$ma->id}}">{{$ma->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
    </div>
    <div class="table-responsive mt-3">
        <table id="table-data" class="dt-advanced-search table">
            <thead>
            <tr>
                <th class="text-center">Action</th>
                <th class="text-center">Submitted By</th>
                <th class="text-center">Submitted When</th>
                <th class="text-center">Site Code</th>
                <th class="text-center">Activity</th>
                <th class="text-center">UOM</th>
                <th class="text-center">Block</th>
                <th class="text-center">Task</th>
                <th class="text-center">Start</th>
                <th class="text-center">End</th>
                <th class="text-center">Machine ID</th>
                <th class="text-center">Fuel</th>
                <th class="text-center">Check By</th>
                <th class="text-center">Check When</th>
                <th class="text-center">Verified By</th>
                <th class="text-center">Verified Whene</th>
                <th class="text-center">Duty</th>
                <th class="text-center">Reason</th>
            </tr>
            </thead>
        </table>
        {{--        {!! $html->table(['class' => 'table table-sm table-hover table-borderless', 'id' => 'table-data']) !!}--}}
    </div>
@endsection
@section('scripts')
    <script>
        var tableData;
        $(document).ready(function () {
            tableData = $("#table-data").DataTable({
                processing: true,
                serverSide: true,
                searching: true,
                ajax: {
                    url: "{{route('data')}}",
                    data: function (d) {
                        d.machine_id = $('#machine_id').val();
                        d.activity_id = $('#activity_id').val();
                        d.user_id = $('#user_id').val();
                        d.month = $('#month').val();
                        d.site_id = $('#site_id').val();
                    }
                },
                columns: [
                    {data: "action", name: "action"},
                    {data: "submitted_by", name: "submitted_by"},
                    {data: "created_at", name: "created_at"},
                    {data: "site_code", name: "site_code"},
                    {data: "activity", name: "activity"},
                    {data: "uom", name: "uom"},
                    {data: "block", name: "block"},
                    {data: "task", name: "task"},
                    {data: "start", name: "start"},
                    {data: "end", name: "end"},
                    {data: "machine_id", name: "machine_id"},
                    {data: "fuel", name: "fuel"},
                    {data: "check_by", name: "check_by"},
                    {data: "check_at", name: "check_at"},
                    {data: "verified_by", name: "verified_by"},
                    {data: "verified_at", name: "verified_at"},
                    {data: "duty", name: "duty"},
                    {data: "reason", name: "reason"},
                ],
            });
        });

        function setFilter(selector) {
            // $(selector).change(function () {
            tableData.draw();
            // })
        }
    </script>
@endsection