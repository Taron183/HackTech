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
                            <td><button type="button"  data-id = {!! $user['id'] !!} class="btn btn-success chat">Open Box Chat</button></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="wrapper" style="display: none">
    <div class="chat-box">
        <div class="chat-head">
            <h2>Chat Box</h2>
            <img src="https://maxcdn.icons8.com/windows10/PNG/16/Arrows/angle_down-16.png" title="Expand Arrow" width="16">
        </div>
        <div class="chat-body">
            <div class="msg-insert">
                <div class="msg-send"> Send message </div>
                <div class="msg-receive"> Received message </div>
            </div>
            <div class="chat-text">
                <textarea placeholder="Send"></textarea>
            </div>
        </div>
    </div>
</div>
@endsection
