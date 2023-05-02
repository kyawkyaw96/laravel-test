
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @php
    $a="hello";
    $myName="win Kyaw Kyaw";
    $fruits=["apple","orange","banana","mango"];


    class E{
        public function a(){
            return "hello";
        }
    }
    @endphp
    <h1>My name is {{$myName }}</h1>
    @if (false) <h1>I am true</h1>
        
    @else <h1>I am false</h1>
        
    @endif

    @foreach ($fruits as $fruit)
        <ul>
            <li  style="text-decoration: none">{{$fruit}}</li>
        </ul>
    @endforeach

    <script>
        console.log("{{$myName}}");
        
    </script>

</body>

</html>
