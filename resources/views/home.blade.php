@extends('layouts.app')



@section('content')

<p> WELCOME  user</p>
<p></p>
 {{ (Auth::user()->name) }}
@endsection