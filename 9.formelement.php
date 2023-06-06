<html>
<head>
	<title>Form Elements</title>
</head>
<body>

	<fieldset>
		<legend align="center">This is Simple of Run Free Class</legend>
		<legend align="right">WDF001</legend>
	<form action="" method="" enctype="">
		<label for="fn">First Name</label>
		<input type="text" name="firstname" id="fn" class="" placeholder="First Name" maxlength="10" minlength="4" autocomplete="off"/>

		<br/><br/>

		<label for="ln">Last Name</label>
		<input type="text" name="lastname" id="ln" placeholder="Last Name" maxlength="5" readonly /> <!-- stand alone attribute -->

		<br/><br/>

		<label for="pw">Password</label>
		<input type="password" name="password" id="pw" class="" placeholder="Enter your password" required />

		<br/><br/>

		<label for="ag">Age</label>
		<input type="number" name="age" id="ag" class="" placeholder="Age" min="15" max="99" />

		<br/><br/>

		<label for="em">Email</label>
		<input type="email" name="email" id="em" class="" placeholder="Enter your mail" autocomplete="off"/>

		<br/><br/>

		<label>Gender</label>
		<br/>
		<input type="radio" name="gender" id="genderm" class="" value="1"/><label for="genderm">Male</label>
		<br/>
		<input type="radio" name="gender" id="genderf" class="" value="2"/><label for="genderf">Female</label>
		<br/>
		<input type="radio" name="gender" id="gendero" class="" value="3"/><label for="gendero">Other</label>

		<br/><br/>

		<label>Salary</label>
		<br/>
		<input type="radio" name="salary" id="salaryc" class="" value="1"/><label for="salaryc">Cash</label>
		<input type="radio" name="salary" id="salarym" class="" value="2"/><label for="salarym">Mobile Banking</label>
		

		<br/><br/>

		<label>Colours</label>
		<br/>
		<input type="checkbox" name="colour" id="colourr" class="" value="1"/><label for="colourr">Red</label>
		<input type="checkbox" name="colour" id="colourg" class="" value="2"/><label for="colourg">Green</label>
		<input type="checkbox" name="colour" id="colourp" class="" value="1"/><label for="colourp">Pink</label>
		<input type="checkbox" name="colour" id="coloury" class="" value="2"/><label for="coloury">Yellow</label>
		
		<br/><br/>

		<label for="sel"> Country</label>
		<select id="sel" class="">
			<option selected disabled> Choosen your country</option>
			<option value="mm">Myanmar</option>
			<option value="sg">Singapore</option>
			<option value="th">Thailand</option>
			<option value="in">India</option>
		</select>


		<br/><br/>
		<label for="jr">Job Role</label>
		<select id="jr" class="" multiple>
			<option value="gm">General Manager</option>
			<option value="sg">Operation Manager</option>
			<option value="mg">Manager</option>
			<option value="su">Supervisor</option>
		</select>


		<br/><br/>
		<label for="dob">Date of Birth</label>
		<input type="date" name="dob" id="dob" class=""/>


		<br/><br/>
		<label for="dt">Booking Time</label>
		<input type="time-local" name="time" id="tm" class=""/>


		<br/><br/>
		<label for="dt">Datetime</label>
		<input type="datetime-local" name="datetime" id="dt" class=""/>

		<br/><br/>
		<label for="vm">Volume</label>
		<input type="range" name="volume" id="vm" class="" step="10" min="0" max="100" value="100" />

		<br/><br/>
		<label for="rev">Review</label>
		<textarea name="review" id="rev" class="" placeholder="Write Something" rows="10"></textarea>

		<br/><br/>
		<label for="nrc">Volume</label>
		<input type="file" name="nrc" id="nrc" class="" multiple />

		<br/><br/>
		<input type="hidden" name="test" id="test" class=""/>

		<br/><br/>
		<input type="submit" name="regesister" id="regesister" class="" value="Submit" />

		<input type="reset" name="reset" id="reset" class="" value="Cancle" />

		<button type="submit" name="login" id="login" class="" disabled="">Log in</button>

	</form>
	</fieldset>

</body>
</html>