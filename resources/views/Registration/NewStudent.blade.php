@extends('master')

@section("main_content")
    <form method="post"  action="{{route('postAddStudent')}}">
        <div>
            <label>First Name</label>
            <input type="text" name="firstName">
        </div>
        <div>
            <label>Last Name</label>
            <input type="text" name="lastName">
        </div>
        <div>
            <label>Gender</label>
            <select>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div>
            <input type="submit">
        </div>

        <input type="hidden" name="_token" value="{{Session::token()}}">
    </form>
@stop