@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="chat-content">
                <ul>
                    {{-- <li>Chat 1</li>
                    <li>Chat 2</li> --}}
                </ul>
            </div>

            <div class="chat-form">
                <div class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-5">
                            <input type="text" name="email" id="text-name" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="col-sm-5">
                            <input type="text" name="email" id="text-chat" class="form-control" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <input type="submit" class="btn btn-dark btn-sm" id="submit-chat">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
