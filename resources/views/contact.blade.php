@extends('master')

@section('content')
    <h1>contact {{$phoneNumber}}</h1>
@endsection
@prepend('script')
    <script>
        console.log("contact page prepend log");
    </script>
@endprepend