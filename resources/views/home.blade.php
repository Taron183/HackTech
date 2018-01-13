@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

       
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Send message</th>
                    </tr>
                    </thead>
                    <tbody>

                    @php
                        $i=0
                    @endphp

                    @foreach ($users as $user)

                        <tr>
                            <th scope="row">{{$i+=1}}</th>
                            <td>{!! $user['name'] !!}</td>
                            <td>{!! $user['email'] !!}</td>
                            <td><button type="button" class="btn btn-success">Open Box Chat</button></td>
                        </tr>
                    @endforeach








                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
