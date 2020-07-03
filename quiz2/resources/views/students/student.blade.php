<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title}} </title>
</head>
<body>
         <nav>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/students">Students</a></li>
          
        </ul>
      </nav>
    
    <h1>{{$title}}</h1>
    <p><img style="width:200px;" src="/images/{{$student->image}}" alt="{{$student->first_name}}"></p>
    <h3>{{$student->first_name}} {{$student->last_name}}</h3>
    <p>Student #: {{$student->student_number}}</p>
    <p>Email : {{$student->email}}</p>
    <p></p>

    <p></p>
</body>
</html>
