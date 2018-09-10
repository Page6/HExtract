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
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div class="links panel-body">
                <form action="{{ url('/extractor') }}" method="POST">
                    {!! csrf_field() !!}
                    <label>开始日期：</label><input name="start_extract" type="date" value="2018-09-01"/>
                    <label>结束日期：</label><input name="end_extract" type="date" value="2018-09-01"/>
                    <input type="submit">
                    <!-- <a href="{{ url('/extractor') }}"><h1>Extractor</h1></a> -->
                    <!-- <a href="{{ url('/record') }}"><h1>Record</h1></a> -->
                    <!--<a href="https://github.com/laravel/laravel">GitHub</a>-->
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
