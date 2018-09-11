<!DOCTYPE html>
<html>
<head>
	<title> Framer Registration  form </title>
	<style >
		body{
			background: #00000e;
		}
			.warp{
				width: 720px;
				margin-top: 50px;
				background: #F2F3F4;
				padding: 10px;
				margin:auto;
				
			}
			form{
				padding: 15px;
				font-family: arial;
				border: 1px dotted white;

			}
			h2{
				text-align: center ;
				background: darkblue;
				color: white;
				padding: 12px;
				width: 400px;

				border-radius: 12px;
			}
			input{
				padding-left: 100px;
				padding: 10px;
				margin:5px;
				border-radius: 5px;
				border:100px;

			}

			input[type=text], input[type=email],input[type=text],input[type=text],input[type=text],input[type=text]{
				width:	77%;
				padding:center;
				border: 1px solid black;
					}
				input[type=submit]{
					margin-top: 50px;
					width:35%;
					margin-left: 100px;
					background: green;
					cursor: pointer;
					font-size: 18px;
					font-weight: bold;
					color: white;

				}
			select{padding-left: 100px;
				padding: 10px;
				margin:5px;
				border-radius: 5px;
				border:100px;
				border: 1px solid black;
			}

		}
	</style>
</head>
<div class="warp">
	<form>
		<h2>Framer Registration  form </h2>
		<label for="party">Full Name: </label></br>
		<input type="text" name="Name" placeholder="Enter Your Name" required> </br>
		<label for="party">Email:     </label></br>
		<input type="email" name="Email" placeholder="Enter Your Email" required></br>
		<label for="party">Address:   </label></br>
		<input type="text" name="Address" placeholder="Enter Your Address" required></br>
		<label for="party">Birthday:</label>
    	<input type="date" id="party" name="party" min="1920-04-01" max="2018-12-31" required></br>
		<label for="party">Mobile Number :</label></br>
		<input type="text" name="" placeholder="Enter Your Number" required></br>
		<label for="party">Nic :</label></br>
		<input type="text" name="" placeholder="Enter Your Nic" required></br>
		<label for="party">Occupation :</label></br>
		<input type="text" name="" placeholder="Occupation" required></br>
		
    
 
		<br>
		<label for="party">Male/Female:
		<select name="Male" >
			<option>Male</option>
			<option>Female</option>
			
		</select>
		<label for="party">Select Product type:</label>
		<select name="Vegitable" mutiple size="=2">
			<option>Vegitable</option>
			<option>Beans</option>
			<option>Animal Product</option>
		</select></br>
		<input type="checkbox" > O/L
		<input type="checkbox" > A/L</br>
		<label for="party">Note :</label></br>
		<input type="text" name=""></br>
	</br>
		<input type="checkbox" required> I Agree to the Terms of Use
		<input type="submit" value="Submit Now">
	</form>

</div>