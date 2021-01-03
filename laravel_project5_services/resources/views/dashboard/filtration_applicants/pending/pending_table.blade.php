@extends('layouts.master')


@section('main')
    <div class="text-center">
    <h3 > Pending Requests Table</h3>
    </div>
    <br>
    <br>
<table class="table">
    <br>
    <br>
    <thead>
    <tr>
        {{--//note: do not show all categories--}}
        <th scope="col">Number</th>
        <th scope="col">Request time</th>
        <th scope="col">Category </th>
        <th scope="col">Name</th>
        <th scope="col">Show</th>
        <th scope="col">Accept</th>
        <th scope="col">Reject</th>
    </tr>

    </thead>
    <tbody>
    {{--        for Number column use count like below--}}
    @php($count=0)
    @foreach( $pendings as $pending)
        @php($count++)
        <tr>
            <td>{{$count}}</td>
            <td>{{$pending->created_at}}</td>
            <td>{{$pending->category->cat_name}}</td>
            <td>{{$pending->pending_name}}</td>
            <td>
                <a href="singlepending/{{$pending->id}}">
                    <button class="btn btn-success" value="" > show </button>
                </a>
            </td>
            <td>
                {{-- Store this value in database in applicant table --}}
                <a href="add_to_applicant/{{$pending->id}}">
                    <button class="btn btn-primary" value="" > Accept </button>
                </a>
            </td>
            <td>
                <a href="add_to_rejected/{{$pending->id}}">
                    <button class="btn btn-danger" value="" > Reject </button>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>


@endsection
