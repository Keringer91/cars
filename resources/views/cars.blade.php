<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @foreach($cars as $car)

       
            <p>
               Car ID: {{$car->id}} <br>
               Car title: {{$car->title}} <br>
               <a href="/cars/{{$car->id}}"> Link to the car<a><br><br>
            </p>
       

    @endforeach

</body>
</html>