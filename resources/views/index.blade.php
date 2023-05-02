@extends('master')
@section('title')
    index page
@endsection
@section('content')
    <h1>my name is {{ $firstName}} {{ $lastName}}</h1>
    <h1>home</h1>
    <h1>home</h1>
@endsection

@push('script')
    <script>
        console.log("index page push log")
    </script>
@endpush
@prepend('script')
    <script>
        console.log("index page prepend log")
    </script>
@endprepend