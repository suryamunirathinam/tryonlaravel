@extends('layouts.app')

@section('content')
{{-- two ways of passing title --}}
<h1>{{$title}}</h1> 

<h1><?php echo "About Us" ?></h1>
        <p>this is the about page</p>      

@endsection