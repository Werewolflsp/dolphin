@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Chart
                </div>

                <div class="panel-body">
                    <div id="stocks-chart"/>
                    @columnchart('Finances', 'stocks-chart')
                </div>
            </div>
        </div>
    </div>
@endsection
