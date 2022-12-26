

    <link href="{{('https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap')}}" rel="stylesheet"><link rel="stylesheet" href="{{('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css')}}">
    
        <link rel="stylesheet" href="{{('css/student.css')}}">

<div class="st_reg fix">
		<h2>Course Registration Form</h2>
		<p class="msg">
      
			
			</p>
		<form action="" method="post" id="st_form">
			@csrf
		<table>

		<tr>
					<th>Username </th>
					<td><input type="text" name="username" required /></td>
				</tr>

				<tr>
					<th>Course Name: </th>
					<td><input type="text" name="coursename" required /></td>
				</tr>
				<tr>
				<tr>
					<th>Course ID: </th>
					<td><input type="text" name="cid" required /></td>
				</tr>
				<tr>
					<th>Student ID </th>
					<td><input type="text" name="sid"  required /></td>
				</tr>
				
					<td colspan="2"><input type="submit" value="Register" /></td>
				</tr>
			</table>
		</form>
    
	</div>

