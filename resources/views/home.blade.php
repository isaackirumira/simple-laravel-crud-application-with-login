@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="tasks"><button  name="task" class="btn btn-primary">Manage Tasks</button></a>
                    <a href="tasks/index_employees"><button  name="index_employees" class="btn btn-primary">Manage Employees</button></a>
                    <a href="tasks/index_employees_payroll"><button  name="index_employees_payroll" class="btn btn-primary">Manage Employees_payroll</button></a>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
