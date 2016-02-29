@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{url('form/disposeForm')}}" method="POST">
                {!! csrf_field() !!}
                <label>Company Name</label>
                <input type="text" name="name">

                <h3>Employees</h3>
                <div class="add-employee">
                    <label>Employee Name</label>
                    <input type="text" name="employee[1][name]">
                    <label>Employee Title</label>
                    <input type="text" name="employee[1][title]">
                </div>
                <div class="add-employee">
                    <label>Employee Name</label>
                    <input type="text" name="employee[2][name]">
                    <label>Employee Title</label>
                    <input type="text" name="employee[2][title]">
                </div>

                <input type="submit">
            </form>
        </div>
    </div>
@endsection