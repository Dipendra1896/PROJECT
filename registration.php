<!DOCTYPE html>
<html>
  <head>
    <title>Sign up for Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style type="text/css">
      
        body{
        padding:50px;
      }
       .container{
        max-width:600px;
        margin:10px auto;
        padding:5px;
        box-shadow:-2px 2px 15px;
      } 
      .form-group{
        margin-bottom:30px;
        margin-top:5px;
        margin-left:10px;
      
      }
        #submit{
        margin-top:20px;
        margin-left:150px;
       }
         #btn1{
        background-color:green;
       }

       #btn2{
        background-color:red;
       }
       div p{
        text-align:center;
       }
       h1{
        text-align:center;
       } 
       .formerror {
        color: red;
        font-size: 0.8em;
        font-style: italic;
       }


    </style>
  </head>
  <body>
    <h1>Registration for Dashboard</h1>
  <div class="container">
    <form action="../create/dbconnection.php" onsubmit="return validateForm()" method="post">
      <div class="form-group">
        <label for="name"> First Name:</label>
        <input type="text" id="first-name" class="form-control" name="firstname" required>
        <b><span id="first-name-error" class="formerror"></span></b>
      </div>
      <div class="form-group">
        <label for="middlename">Middle Name:</label>
        <input type="text" id="middle-name"  class="form-control"name="middlename" required>
        <b><span  id="middle-name-error"class="formerror"></span></b>
      </div>
      <div class="form-group">
        <label for="lastname">Last Name:</label>
        <input type="text" id="last-name"  class="form-control"name="lastname" required>  
         <b><span id="last-name-error"class="formerror"></span></b>
      </div>
      <div class="form-group">
		   <label for="nationality">Nationality:</label>
		  <select id="nationality" class="form-control" name="nationality" required>
       <option value="">--Please choose an option--</option>
			 <option value="nepal">Nepal</option>
			 <option value="india">India</option>
			 <option value="china">China</option>
			 <option value="JPN">Japan</option>
			 <option value="IN">Indonesia</option>
			 <option value="USA">United State</option>
			 <option value="BH">Bhutan</option>
			 <option value="PAK">Pakistan</option>
			 <option value="BANG">Bangaladesh</option>
			 <option value="SK">South Korea</option>
			 <option value="NK">North Korea</option>
			 <option value="RSS">Russia</option>
			 <option value="UK">United Kingdom</option>
       <option value="ANTC">Antarctica</option>
       <option value="CND">Canada</option>
       <option value="BRZ">Brazil</option>
       <option value="ASTL">Australia</option>
       <option value="ARGTN">Argentina</option>
       <option value="KZTN">Kazakhstan</option>
       <option value="ALG">Algeria</option>
       <option value="DC">DR Congo</option>
       <option value="KD">Kingdom of Denmark</option>
       <option value="GL">Greenland</option>
       <option value="SA">Saudi Arabia</option>
       <option value="MXC">Mexico</option>
       <option value="SDN">Sudan</option>
       <option value="LBY">Libya</option>
       <option value="IRN">Iran</option>
       <option value="MGA">Mongolia</option>
       <option value="PR">Peru</option>
       <option value="CD">Chad</option>
       <option value="NGR">Niger</option>
       <option value="AGL">Angola</option>
       <option value="ML">Mali</option>
       <option value="SAF">South Africa</option>
       <option value="CLBA">Colombia</option>
       <option value="ETHPA">Ethipia</option>
       <option value="BLVA">Bolivia</option>
       <option value="MRTNA">Mauritania</option>
       <option value="EGPT">Egypt</option>
       <option value="TNZA">Tanzania</option>
       <option value="NGRA">Nigeria</option>
       <option value="VNZLA">Venezuela</option>
       <option value="NMBA">Namibia</option>
       <option value="MZQ">Mozambique</option>
       <option value="TRKY">Tureky</option>
       <option value="CHL">Chile</option>
       <option value="ZMBS">Zambia</option>
       <option value="MNYR">Myanmar</option>
       <option value="AFGTN">Afghanistan</option>
       <option value="STHSDN">South Sudan</option>
       <option value="FRNC">France</option>
       <option value="SMA">Somalia</option>
       <option value="CAR">Central African Republic</option>
       <option value="UKRN">Ukrain</option>
       <option value="MDGCR">Madagascar</option>
       <option value="BTWN">Botswana</option>
       <option value="KNYA">Kenya</option>
       <option value="YMN">yemen</option>
       <option value="FRNC">France</option>
       <option value="THLND">Thailand</option>
       <option value="SPN">Spain</option>
       <option value="TRKMSTN">Turkmenistan</option>
       <option value="CMRN">Cameroon</option>
       <option value="PNG">Papua Nem Guinea</option>
       <option value="SWDN">Sweden</option>
       <option value="UZSTN">Uzbekistan</option>
       <option value="MRCO">Morocco</option>
       <option value="IRN">Iraq</option>
       <option value="PRGY">Paraguay</option>
       <option value="BRNL">Brunel</option>
       <option value="PLSTN">Palestine</option>
       <option value="LBNN">Lebanon</option>
       <option value="TAT">Trinidad and Tobago</option>
       <option value="CV">Cape Verde</option>
       <option value="SMA">Samoa</option>
       <option value="LXBRG">Luxembourg</option>
       <option value="CMRS">Comoros</option>
       <option value="KRBT">Kiribati</option>
       <option value="BHRN">Bahrain</option>
       <option value="DMCA">Domicia</option>
       <option value="TNGO">Tonga</option>
       <option value="SNGPR">Singapore</option>
       <option value="MCRNSA">Micronesia</option>
       <option value="SL">Saint Lucia</option>
       <option value="ANDR">Andorra</option>
       <option value="PLU">Palau</option>
       <option value="SYSL">Seychelles</option>
       <option value="ANTA_BRBD">Antigua and Barbuda</option>
       <option value="BRBDS">Barbados</option>
       <option value="GRND">Grenada</option>
       <option value="MLTA">Malta</option>
       <option value="MLDVS">Maldives</option>
       <option value="MRIS">Marshall Islands</option>
       <option value="LCHSTNYA">Liechtenstein</option>
       <option value="MRNO">San Marino</option>
       <option value="TLVU">Tuvalu</option>
       <option value="NRU">Nauru</option>
       <option value="VTCT">Vatican City</option>
		</select>
    <b><span id="nationality-error" class="formerror"></span></b> 
    
	</div>
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" id="address" class="form-control" name="address" required> 
        <b><span id="address-error" class="formerror"></span></b>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" class="form-control" name="email" required> 
        <b><span id="email-error"class="formerror"></span></b>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" class="form-control" name="password"required> 
        <b><span id="password-error"class="formerror"></span></b>
      </div>
      <div class="form-group">
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm-password"  class="form-control"name="confirm_password" required> 
        <b><span id="password-confirm-error" class="formerror"></span></b>
      </div>
      <div class="form-group">
        <label for="gender" id="gender">Gender:</label>  
			  <label for="male">Male</label>
			  <input type="radio" id="male"  name="gender" value="male">
			  <label for="female">Female</label>
			  <input type="radio" id="female"  name="gender" value="female">
			  <label for="other">Other</label>
			  <input type="radio" id="other" name="gender" value="other">
        <div></div>
        <b><span id="gender-error" class="formerror"></span></b>
      </div>
      <div class="form-group">
		    <label for="date_of_birth">Date Of Birth:</label>
		    <input type="date" id="date_of_birth" class="form-control" name="date_of_birth" required>  
        <b><span id="dob-error" class="formerror"></span></b>
    	</div>
      <div class="form-group">
		   <label for="profession">Profession:</label>
		  <select id="profession" class="form-control" name="profession" required>
        <option value="">--Please choose your profession--</option>
        <option value="Student">Student</option>
        <option value="Doctor">Doctor</option>
        <option value="Engineer">Engineer</option>
        <option value="Businessman">Businessman</option>
        <option value="Teacher">Teacher</option>
        <option value="Farmar">Farmer</option>
        <option value="Politician">Politician</option>
        <option value="Others">Others</option>
      </select>
      <div><b><span id="profession-error" class="formerror"></span></b></div>
      </div>
      <div class="form-group">
		    <label for ="hobbies" id="hobbies"> Hobbies:</label>
		    <input type="checkbox" id="traveling" value="traveling" name="hobbies[]" />
		    <label for="traveling">Traveling</label>
		    <input type="checkbox" id="dancing" value="dancing"  name="hobbies[]" />
        <label for="dancing">Dancing</label>
		    <input type="checkbox" id="singing" value="singing"  name="hobbies[]" />
		    <label for="singing">Singing</label>
        <input type="checkbox" id="others" value="others" name="hobbies[]" />
		    <label for="Other">Others</label>
        <div><b><span id="hobbies-error" class="formerror"></span></b></div>
	    </div>
      <div class="form-group">
		   <label for="favorite_color">Favorite Color:</label>
		  <select id="favorite-color"  class="form-control" name="favorite_color" required>
      <option value="">--Please choose your favorite color.--</option>
			 <option value="Red">Red</option>
			 <option value="Green">Green</option>
			 <option value="Yellow">Yellow</option>
			 <option value="Blue">Blue</option>
			 <option value="Pink">Pink</option>
			 <option value="White">White</option>
			 <option value="Gray">Gray</option>
       <option value="Black">Black</option>
       <option value="Orange">Orange</option>
       <option value="Others">others</option>
      </select>
      <div>  <b><span id="favorite-color-error" class="formerror"></span></b></div>
      </div>
      <div class="form-group"  id=submit>
      <input type="submit" class="btn btn-primary" value="Register" id="btn1" name="register">
      <input type="reset"  class="btn btn-primary" value="Cancel" id="btn2" name="cancel">
  </div>
      <div><p>Have you already Registered? <a href="../create/loginpage.php">Log in</a></p>
    </div>
    </form>
    <script src="../create/register.js"></script>
  </body>
</html>
