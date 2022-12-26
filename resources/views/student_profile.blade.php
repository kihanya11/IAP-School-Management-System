<!DOCTYPE html>
<html lang="en">
<link href="{{('https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap')}}" rel="stylesheet">
<link rel="stylesheet"
  href="{{('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css')}}">

<link rel="stylesheet" href="{{('css/student.css')}}">

<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student Profile</title>

</head>

<body>
  <div>
    <div class="shoplogo"> MIDDLEVIEW</div>
    <div class="comment"> UNIVERSITY</div>
  </div>
  <hr>
  <div class="st_reg fix">
    <div>
      <h1>DETAILS</h1>
    </div>

    <table border=3px>
      <thead>

        <th><u>ID</u></th>
        <th><u>Email</u></th>
        <th><u>Name</u></th>
        <th><u>Username</u></th>







      </thead>
      <tbody>

        @foreach ($student_profile as $cos)

        <tr>
          <td>{{$cos['id']}}</td>
          <td>{{$cos['email']}}</td>
          <td>{{$cos['name']}}</td>
          <td>{{$cos['username']}}</td>



        </tr>

      </tbody>
      @endforeach
    </table>
  
  </div>

</body>

</html>