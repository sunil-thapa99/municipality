<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Nepal Municipality</title>
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/styles.css">
	</head>
	<body>
		<div class="container">
			<nav class="navbar">
				<img src="assets/img/img.jpg" style="float: left;">
				<img src="assets/img/nepal.gif" style="float: right;">
			</nav>
			<div class="section">
				<form class="form" method="POST" action="controller/displayController.php"  enctype="multipart/form-data">
					<fieldset>
						<legend>Personal Infomation </legend>
						<div class="form-row">
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
										<label>First Name</label>
										<input type="text" class="form-control input-md" placeholder="First Name" required="" name="fname">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
										<label>Middle Name</label>
										<input type="text" class="form-control input-md" placeholder="Middle Name" name="mname">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
										<label>SurName</label>
										<input type="text" class="form-control input-md" placeholder="Surname" required="" name="lname">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
										<label>Place Of Birth</label>
										<select class="form-control" name="birthPlace">
											<option value="Kathmandu">Kathmandu</option>
											<option value="Bhaktapur">Bhaktapur</option>
											<option value="Lalitpur">Lalitpur</option>
										</select>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
										<label>Nationality</label>
										<input type="text" class="form-control input-md" placeholder="Nationality" required="" name="nationality">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
										<label>Date Of Birth (A.D.)</label>
										<input type="date" class="form-control input-md" name="dobAD">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="form-group">
										<label>Date Of Birth (B.S.)</label>
										<input type="text" class="form-control input-md" placeholder="yyyy-mm-dd" required="" name="dobBS">
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-12">
								<div class="form-group">
									<label style="margin-right: 15px;">Gender</label>
									<label class="radio-inline" for="radios-0">
										<input type="radio" name="gender" id="radios-0" value="Male" checked="checked">
										Male
									</label> 
									<label class="radio-inline" for="radios-1">
										<input type="radio" name="gender" id="radios-1" value="Female">
										Female
									</label> 
									<label class="radio-inline" for="radios-2">
										<input type="radio" name="gender" id="radios-2" value="Others">
										Others
									</label> 
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<label>Citizenship No.</label>
									<input type="text" class="form-control input-md" placeholder="Citizenship Number" required="" name="citizenship">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<label>Citizenship Date of Issue (B.S)</label>
									<input type="text" class="form-control input-md" placeholder="yyyy-mm-dd" required="" name="citizenshipIssueDate">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<label>Place of Issue for Citizenship</label>
									<select class="form-control input-md" name="citizenshipIssuePlace">
										<option value="Kathmandu">Kathmandu</option>
										<option value="Bhaktapur">Bhaktapur</option>
										<option value="Lalitpur">Lalitpur</option>
									</select>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<label>Passport Number</label>
									<input type="text" class="form-control input-md" placeholder="Passport Number" name="passportNum">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<label>Date of Issue (A.D) for Passport Number</label>
									<input type="date" class="form-control input-md" placeholder="Date of Issue" name="passportIssueDate">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
								<div class="form-group">
									<label>Place of Issue for Passport</label>
									<input type="text" class="form-control input-md" placeholder="Place of Issue" name="passportIssuePlace">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>District</label>
		                            <select class="form-control" name="district">
		                                <option value="Kathmandu">Kathmandu</option>
		                                <option value="Bhaktapur">Bhaktapur</option>
		                                <option value="Lalitpur">Lalitpur</option>
		                            </select>
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Municipality/VDC</label>
		                            <input type="text" class="form-control  input-md" placeholder="Municipality/VDC" required="" name="municipality">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Ward</label>
		                            <input type="text" class="form-control  input-md" placeholder="Ward" required="" name="ward">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Town/Village</label>
		                            <input type="text" class="form-control input-md" placeholder="Town/Village" required="" name="townVillage">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>House Number</label>
		                            <input type="text" class="form-control input-md" placeholder="House Number" maxlength="5" required="" name="houseNumber">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Email</label>
		                            <input type="email" class="form-control input-md" placeholder="Email" name="email">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Phone Number</label>
		                            <input type="number" class="form-control input-md" placeholder="Phone Number" maxlength="10" name="phNumber">
		                        </div>
                			</div>
                			<div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Landline Number</label>
		                            <input type="number" class="form-control input-md" placeholder="Phone Number" maxlength="10" name="landline">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Occupation</label>
		                            <input type="text" class="form-control input-md" placeholder="Occupation" name="occupation">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Annual Income</label>
		                            <input type="number" class="form-control input-md" placeholder="Annual Income" name="annualIncome">
		                        </div>
		                    </div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Family Information </legend>
						<div class="form-row">
							<div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Father Name</label>
		                            <input type="text" class="form-control input-md" placeholder="Father Name" required="" name="fatherName">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Occupation</label>
		                            <input type="text" class="form-control input-md" placeholder="Occupation" required="" name="fatherOccupation">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Phone Number</label>
		                            <input type="number" class="form-control input-md" placeholder="Phone Number" maxlength="10" name="fatherPhNumber">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Mother Name</label>
		                            <input type="text" class="form-control input-md" placeholder="Mother Name" required="" name="motherName">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Occupation</label>
		                            <input type="text" class="form-control input-md" placeholder="Occupation" required="" name="motherOccupation">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>Phone Number</label>
		                            <input type="number" class="form-control input-md" placeholder="Phone Number" maxlength="10" name="motherPhNumber">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>GrandFather Name</label>
		                            <input type="text" class="form-control input-md" placeholder="GrandFather Name" required="" name="grandFatherName">
		                        </div>
		                    </div>
		                    <div class="col-xs-12 col-sm-6 col-md-4">
		                        <div class="form-group">
		                            <label>GrandMother Name</label>
		                            <input type="text" class="form-control input-md" placeholder="GrandMother Name" required="" name="grandMotherName">
		                        </div>
		                    </div>
		                    <input type="number" name="image_id" hidden="" value="<?php echo $_GET['id']; ?>">
						</div>
					</fieldset>	
					<input type="submit" name="submit" value="Submit" class="btn btn-primary center-block" >
				</form>
			</div>
		</div>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>