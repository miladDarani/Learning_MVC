<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> </title>
</head>
<body>
    <h1>{{$title}}</h1>
  

    @foreach($students as $student)
        <p><img style= "width:200px; max-width:600px" src="images/{{$student->image}}" alt=""></p>
        <p>Student Number: {{$student->student_number}}</p>
        <p>Student Number: {{$student->first_name}}</p>
        <p>Student Number: {{$student->last_name}}</p>
        <p>Student Number: {{$student->email}}</p>

        <hr>
        
    @endforeach
    
  
</body>
</html>
