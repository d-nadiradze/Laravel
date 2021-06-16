
@extends('layout')

@section('links')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
@endsection

@section('content')
    <div class="flex">
        <div class="flex1">
            <div class="textbox">
                <div class="subtext">hello friend!</div>
                <div class="text">Enter your personal details and start journey with us!</div>
            </div>
        </div>

        <div class="flex2">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="subtext second">add a user</div>
            <div class="f2text">Type in your info</div>
            <form class="form" action="{{route('contacts')}}" method="post">
                @csrf
                <input type="text" placeholder="Name" name="name">
                <div class="select">
                    <select name="country" id="Country">
                        <option value="0" disabled selected>Country</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Russia">Russia</option>
                        <option value="USA">USA</option>
                        <option value="German">German</option>
                        <option value="Japan">Japan</option>
                    </select>
                </div>
                <div class='input-group date' id='datetimepicker4'>
                    <input type='text' placeholder="Date of birth" name="dateofbirth">
                    <span class="input-group-addon">
                        <span class="calendarImg"></span>
                    </span>
                </div>

                    <button class="sub_btn" type="submit" >Save</button>

            </form>
        </div>
    </div>

    <script>
        $(function() {
            $('#datetimepicker4').datetimepicker({
                format: 'YYYY-MM-DD'
            });
        });
    </script>
@endsection
