<head>
    <meta charset="utf-8">
    <title>elearning</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
 <?php require 'javascripts.php'; ?>

<body  background="">
      <?php require 'topbar.php'; ?>
       <?php require 'elearningmenu.php'; 
       require 'connectelearning.php'; ?>  

       <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <?php  if (isset($_GET['confirm']))echo "<br><h5 class='display-6 text-white text-uppercase'>application update successful!</h5>";
            ?>
                <h3 class="display-4 text-white text-uppercase"> edit student application</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Update application</p>

                </div>
            </div>
        </div>
    </div>


<script language="javascript" src="studentapplval.js"></script>

<?php 

require 'connectelearning.php';

$sn=$_GET['num'];

$query="SELECT * FROM `applications` WHERE `appl_id`=$sn";

$result=mysqli_query($connection,$query);
$applup=mysqli_fetch_array($result);



 ?>

 <form action="studentapplupdate.php" method="post" enctype="multipart/form-data">
    <table  border="2" align="center">
<tr><th align="left">Appl. No</th><td> <input type="number" name="number" value="<?php echo $applup['appl_id'];?>" readonly></td></tr>
<tr><th align="left" bgcolor=""><font color="">First Name</font></th><td><input type="text" name="firstname" required value="<?php echo $applup['first_name'];?>"></td></tr>
<tr><th align="left" bgcolor=""><font>Last Name</font></th><td><input type="text" name="lastname" required value="<?php echo $applup['last_name'];?>"></td></tr>
<tr><th align="left" bgcolor=""><font color="">Date of Birth</font></th><td><input type="date" name="dob" required value="<?php echo $applup['dob'];?>"></td></tr>
<tr><th align="left" bgcolor=""><font>Email</font></th><td><input type="email" name="email" required value="<?php echo $applup['email'];?>"></td></tr>
<tr><th align="left">Gender</th><td>Male<input type="radio" name="sex" value="<?php echo $applup['gender'];?>" checked>Female<input type="radio" name="sex" value="<?php echo $applup['gender'];?>"></td></tr>
<tr><th align="left" bgcolor=""><font color="">Nationality</font></th><td>
<select id="country" name="nationality" required value="<?php echo $applup['nationality'];?>">
    <option value="<?php echo $applup['nationality'];?>" ></option>
   <option value="1">Afghanistan</option>
   <option value="2">Albania</option>
   <option value="3">Algeria</option>
   <option value="4">American Samoa</option>
   <option value="5">Andorra</option>
   <option value="6">Angola</option>
   <option value="7">Anguilla</option>
   <option value="8">Antigua & Barbuda</option>
   <option value="9">Argentina</option>
   <option value="10">Armenia</option>
   <option value="11">Aruba</option>
   <option value="12">Australia</option>
   <option value="13">Austria</option>
   <option value="14">Azerbaijan</option>
   <option value="15">Bahamas</option>
   <option value="16">Bahrain</option>
   <option value="17">Bangladesh</option>
   <option value="18">Barbados</option>
   <option value="19">Belarus</option>
   <option value="20">Belgium</option>
   <option value="21">Belize</option>
   <option value="22">Benin</option>
   <option value="23">Bermuda</option>
   <option value="24">Bhutan</option>
   <option value="25">Bolivia</option>
   <option value="26">Bonaire</option>
   <option value="27">Bosnia & Herzegovina</option>
   <option value="28">Botswana</option>
   <option value="29">Brazil</option>
   <option value="30">British Indian Ocean Ter</option>
   <option value="31">Brunei</option>
   <option value="32">Bulgaria</option>
   <option value="33">Burkina Faso</option>
   <option value="34">Burundi</option>
   <option value="35">Cambodia</option>
   <option value="36">Cameroon</option>
   <option value="37">Canada</option>
   <option value="38">Canary Islands</option>
   <option value="39">Cape Verde</option>
   <option value="40">Cayman Islands</option>
   <option value="41">Central African Republic</option>
   <option value="42">Chad</option>
   <option value="43">Channel Islands</option>
   <option value="44">Chile</option>
   <option value="45">China</option>
   <option value="46">Christmas Island</option>
   <option value="47">Cocos Island</option>
   <option value="48">Colombia</option>
   <option value="49">Comoros</option>
   <option value="50">Congo</option>
   <option value="51">Cook Islands</option>
   <option value="52">Costa Rica</option>
   <option value="53">Cote DIvoire</option>
   <option value="54">Croatia</option>
   <option value="55">Cuba</option>
   <option value="56">Curacao</option>
   <option value="57">Cyprus</option>
   <option value="58">Czech Republic</option>
   <option value="59">Denmark</option>
   <option value="60">Djibouti</option>
   <option value="61">Dominica</option>
   <option value="62">Dominican Republic</option>
   <option value="63">East Timor</option>
   <option value="64">Ecuador</option>
   <option value="65">Egypt</option>
   <option value="66">El Salvador</option>
   <option value="67">Equatorial Guinea</option>
   <option value="68">Eritrea</option>
   <option value="69">Estonia</option>
   <option value="70">Ethiopia</option>
   <option value="71">Falkland Islands</option>
   <option value="72">Faroe Islands</option>
   <option value="73">Fiji</option>
   <option value="74">Finland</option>
   <option value="75">France</option>
   <option value="76">French Guiana</option>
   <option value="77">French Polynesia</option>
   <option value="78">French Southern Ter</option>
   <option value="79">Gabon</option>
   <option value="80">Gambia</option>
   <option value="81">Georgia</option>
   <option value="82">Germany</option>
   <option value="83">Ghana</option>
   <option value="84">Gibraltar</option>
   <option value="85">Great Britain</option>
   <option value="86">Greece</option>
   <option value="87">Greenland</option>
   <option value="88">Grenada</option>
   <option value="89">Guadeloupe</option>
   <option value="90">Guam</option>
   <option value="91">Guatemala</option>
   <option value="92">Guinea</option>
   <option value="93">Guyana</option>
   <option value="94">Haiti</option>
   <option value="95">Hawaii</option>
   <option value="96">Honduras</option>
   <option value="97">Hong Kong</option>
   <option value="98">Hungary</option>
   <option value="99">Iceland</option>
   <option value="100">Indonesia</option>
   <option value="101">India</option>
   <option value="102">Iran</option>
   <option value="103">Iraq</option>
   <option value="104">Ireland</option>
   <option value="105">Isle of Man</option>
   <option value="106">Israel</option>
   <option value="107">Italy</option>
   <option value="108">Jamaica</option>
   <option value="109">Japan</option>
   <option value="110">Jordan</option>
   <option value="111">Kazakhstan</option>
   <option value="112">Kenya</option>
   <option value="113">Kiribati</option>
   <option value="114">Korea North</option>
   <option value="115">Korea South</option>
   <option value="116">Kuwait</option>
   <option value="117">Kyrgyzstan</option>
   <option value="118">Laos</option>
   <option value="119">Latvia</option>
   <option value="120">Lebanon</option>
   <option value="121">Lesotho</option>
   <option value="122">Liberia</option>
   <option value="123">Libya</option>
   <option value="124">Liechtenstein</option>
   <option value="125">Lithuania</option>
   <option value="126">Luxembourg</option>
   <option value="127">Macau</option>
   <option value="128">Macedonia</option>
   <option value="129">Madagascar</option>
   <option value="130">Malaysia</option>
   <option value="131">Malawi</option>
   <option value="132">Maldives</option>
   <option value="133">Mali</option>
   <option value="134">Malta</option>
   <option value="135">Marshall Islands</option>
   <option value="136">Martinique</option>
   <option value="137">Mauritania</option>
   <option value="138">Mauritius</option>
   <option value="139">Mayotte</option>
   <option value="140">Mexico</option>
   <option value="141">Midway Islands</option>
   <option value="142">Moldova</option>
   <option value="143">Monaco</option>
   <option value="144">Mongolia</option>
   <option value="145">Montserrat</option>
   <option value="146">Morocco</option>
   <option value="147">Mozambique</option>
   <option value="148">Myanmar</option>
   <option value="149">Nambia</option>
   <option value="150">Nauru</option>
   <option value="151">Nepal</option>
   <option value="152">Netherland Antilles</option>
   <option value="153">Netherlands (Holland, Europe)</option>
   <option value="154">Nevis</option>
   <option value="154">New Caledonia</option>
   <option value="155">New Zealand</option>
   <option value="156">Nicaragua</option>
   <option value="157">Niger</option>
   <option value="158">Nigeria</option>
   <option value="159">Niue</option>
   <option value="160">Norfolk Island</option>
   <option value="161">Norway</option>
   <option value="162">Oman</option>
   <option value="163">Pakistan</option>
   <option value="164">Palau Island</option>
   <option value="165">Palestine</option>
   <option value="166">Panama</option>
   <option value="167">Papua New Guinea</option>
   <option value="168">Paraguay</option>
   <option value="169">Peru</option>
   <option value="170">Philippines</option>
   <option value="171">Pitcairn Island</option>
   <option value="172">Poland</option>
   <option value="173">Portugal</option>
   <option value="174">Puerto Rico</option>
   <option value="175">Qatar</option>
   <option value="176">Republic of Montenegro</option>
   <option value="177">Republic of Serbia</option>
   <option value="178">Reunion</option>
   <option value="179">Romania</option>
   <option value="180">Russia</option>
   <option value="181">Rwanda</option>
   <option value="182">St Barthelemy</option>
   <option value="183">St Eustatius</option>
   <option value="184">St Helena</option>
   <option value="185">St Kitts-Nevis</option>
   <option value="186">St Lucia</option>
   <option value="187">St Maarten</option>
   <option value="188">St Pierre & Miquelon</option>
   <option value="189">St Vincent & Grenadines</option>
   <option value="190">Saipan</option>
   <option value="191">Samoa</option>
   <option value="192">Samoa American</option>
   <option value="193">San Marino</option>
   <option value="194">Sao Tome & Principe</option>
   <option value="195">Saudi Arabia</option>
   <option value="196">Senegal</option>
   <option value="197">Seychelles</option>
   <option value="198">Sierra Leone</option>
   <option value="199">Singapore</option>
   <option value="200">Slovakia</option>
   <option value="201">Slovenia</option>
   <option value="202">Solomon Islands</option>
   <option value="203">Somalia</option>
   <option value="204">South Africa</option>
   <option value="205">Spain</option>
   <option value="206">Sri Lanka</option>
   <option value="207">Sudan</option>
   <option value="208">Suriname</option>
   <option value="209">Swaziland</option>
   <option value="210">Sweden</option>
   <option value="211">Switzerland</option>
   <option value="212">Syria</option>
   <option value="213">Tahiti</option>
   <option value="214">Taiwan</option>
   <option value="215">Tajikistan</option>
   <option value="216">Tanzania</option>
   <option value="217">Thailand</option>
   <option value="218">Togo</option>
   <option value="219">Tokelau</option>
   <option value="220">Tonga</option>
   <option value="221">Trinidad & Tobago</option>
   <option value="222">Tunisia</option>
   <option value="223">Turkey</option>
   <option value="224">Turkmenistan</option>
   <option value="225">Turks & Caicos Is</option>
   <option value="226">Tuvalu</option>
   <option value="227">Uganda</option>
   <option value="228">United Kingdom</option>
   <option value="229">Ukraine</option>
   <option value="230">United Arab Emirates</option>
   <option value="231">United States of America</option>
   <option value="232">Uruguay</option>
   <option value="233">Uzbekistan</option>
   <option value="234">Vanuatu</option>
   <option value="235">Vatican City State</option>
   <option value="236">Venezuela</option>
   <option value="237">Vietnam</option>
   <option value="238">Virgin Islands (Brit)</option>
   <option value="239">Virgin Islands (USA)</option>
   <option value="240">Wake Island</option>
   <option value="241">Wallis & Futana Is</option>
   <option value="242">Yemen</option>
   <option value="243">Zaire</option>
   <option value="244">Zambia</option>
   <option value="245">Zimbabwe</option>
</select></td></tr>
<tr><th>Phone Number(with country code)</th><td><input type="text" name="phone" required value="<?php echo $applup['phone'];?>"></td></tr>  
<tr><th align="left">NIN/Passport/ID Number</th><td><input type="text" name="id" required value="<?php echo $applup['id_no'];?>"></td></tr>
<tr><th align="left" bgcolor="">Country of Residence</th><td>
	<select id="country" name="residence" required>
	<option value= ""disabled selected hidden>Current Residence</option>
   <option value="1">Afghanistan</option>
   <option value="2">Albania</option>
   <option value="3">Algeria</option>
   <option value="4">American Samoa</option>
   <option value="5">Andorra</option>
   <option value="6">Angola</option>
   <option value="7">Anguilla</option>
   <option value="8">Antigua & Barbuda</option>
   <option value="9">Argentina</option>
   <option value="10">Armenia</option>
   <option value="11">Aruba</option>
   <option value="12">Australia</option>
   <option value="13">Austria</option>
   <option value="14">Azerbaijan</option>
   <option value="15">Bahamas</option>
   <option value="16">Bahrain</option>
   <option value="17">Bangladesh</option>
   <option value="18">Barbados</option>
   <option value="19">Belarus</option>
   <option value="20">Belgium</option>
   <option value="21">Belize</option>
   <option value="22">Benin</option>
   <option value="23">Bermuda</option>
   <option value="24">Bhutan</option>
   <option value="25">Bolivia</option>
   <option value="26">Bonaire</option>
   <option value="27">Bosnia & Herzegovina</option>
   <option value="28">Botswana</option>
   <option value="29">Brazil</option>
   <option value="30">British Indian Ocean Ter</option>
   <option value="31">Brunei</option>
   <option value="32">Bulgaria</option>
   <option value="33">Burkina Faso</option>
   <option value="34">Burundi</option>
   <option value="35">Cambodia</option>
   <option value="36">Cameroon</option>
   <option value="37">Canada</option>
   <option value="38">Canary Islands</option>
   <option value="39">Cape Verde</option>
   <option value="40">Cayman Islands</option>
   <option value="41">Central African Republic</option>
   <option value="42">Chad</option>
   <option value="43">Channel Islands</option>
   <option value="44">Chile</option>
   <option value="45">China</option>
   <option value="46">Christmas Island</option>
   <option value="47">Cocos Island</option>
   <option value="48">Colombia</option>
   <option value="49">Comoros</option>
   <option value="50">Congo</option>
   <option value="51">Cook Islands</option>
   <option value="52">Costa Rica</option>
   <option value="53">Cote DIvoire</option>
   <option value="54">Croatia</option>
   <option value="55">Cuba</option>
   <option value="56">Curacao</option>
   <option value="57">Cyprus</option>
   <option value="58">Czech Republic</option>
   <option value="59">Denmark</option>
   <option value="60">Djibouti</option>
   <option value="61">Dominica</option>
   <option value="62">Dominican Republic</option>
   <option value="63">East Timor</option>
   <option value="64">Ecuador</option>
   <option value="65">Egypt</option>
   <option value="66">El Salvador</option>
   <option value="67">Equatorial Guinea</option>
   <option value="68">Eritrea</option>
   <option value="69">Estonia</option>
   <option value="70">Ethiopia</option>
   <option value="71">Falkland Islands</option>
   <option value="72">Faroe Islands</option>
   <option value="73">Fiji</option>
   <option value="74">Finland</option>
   <option value="75">France</option>
   <option value="76">French Guiana</option>
   <option value="77">French Polynesia</option>
   <option value="78">French Southern Ter</option>
   <option value="79">Gabon</option>
   <option value="80">Gambia</option>
   <option value="81">Georgia</option>
   <option value="82">Germany</option>
   <option value="83">Ghana</option>
   <option value="84">Gibraltar</option>
   <option value="85">Great Britain</option>
   <option value="86">Greece</option>
   <option value="87">Greenland</option>
   <option value="88">Grenada</option>
   <option value="89">Guadeloupe</option>
   <option value="90">Guam</option>
   <option value="91">Guatemala</option>
   <option value="92">Guinea</option>
   <option value="93">Guyana</option>
   <option value="94">Haiti</option>
   <option value="95">Hawaii</option>
   <option value="96">Honduras</option>
   <option value="97">Hong Kong</option>
   <option value="98">Hungary</option>
   <option value="99">Iceland</option>
   <option value="100">Indonesia</option>
   <option value="101">India</option>
   <option value="102">Iran</option>
   <option value="103">Iraq</option>
   <option value="104">Ireland</option>
   <option value="105">Isle of Man</option>
   <option value="106">Israel</option>
   <option value="107">Italy</option>
   <option value="108">Jamaica</option>
   <option value="109">Japan</option>
   <option value="110">Jordan</option>
   <option value="111">Kazakhstan</option>
   <option value="112">Kenya</option>
   <option value="113">Kiribati</option>
   <option value="114">Korea North</option>
   <option value="115">Korea South</option>
   <option value="116">Kuwait</option>
   <option value="117">Kyrgyzstan</option>
   <option value="118">Laos</option>
   <option value="119">Latvia</option>
   <option value="120">Lebanon</option>
   <option value="121">Lesotho</option>
   <option value="122">Liberia</option>
   <option value="123">Libya</option>
   <option value="124">Liechtenstein</option>
   <option value="125">Lithuania</option>
   <option value="126">Luxembourg</option>
   <option value="127">Macau</option>
   <option value="128">Macedonia</option>
   <option value="129">Madagascar</option>
   <option value="130">Malaysia</option>
   <option value="131">Malawi</option>
   <option value="132">Maldives</option>
   <option value="133">Mali</option>
   <option value="134">Malta</option>
   <option value="135">Marshall Islands</option>
   <option value="136">Martinique</option>
   <option value="137">Mauritania</option>
   <option value="138">Mauritius</option>
   <option value="139">Mayotte</option>
   <option value="140">Mexico</option>
   <option value="141">Midway Islands</option>
   <option value="142">Moldova</option>
   <option value="143">Monaco</option>
   <option value="144">Mongolia</option>
   <option value="145">Montserrat</option>
   <option value="146">Morocco</option>
   <option value="147">Mozambique</option>
   <option value="148">Myanmar</option>
   <option value="149">Nambia</option>
   <option value="150">Nauru</option>
   <option value="151">Nepal</option>
   <option value="152">Netherland Antilles</option>
   <option value="153">Netherlands (Holland, Europe)</option>
   <option value="154">Nevis</option>
   <option value="154">New Caledonia</option>
   <option value="155">New Zealand</option>
   <option value="156">Nicaragua</option>
   <option value="157">Niger</option>
   <option value="158">Nigeria</option>
   <option value="159">Niue</option>
   <option value="160">Norfolk Island</option>
   <option value="161">Norway</option>
   <option value="162">Oman</option>
   <option value="163">Pakistan</option>
   <option value="164">Palau Island</option>
   <option value="165">Palestine</option>
   <option value="166">Panama</option>
   <option value="167">Papua New Guinea</option>
   <option value="168">Paraguay</option>
   <option value="169">Peru</option>
   <option value="170">Philippines</option>
   <option value="171">Pitcairn Island</option>
   <option value="172">Poland</option>
   <option value="173">Portugal</option>
   <option value="174">Puerto Rico</option>
   <option value="175">Qatar</option>
   <option value="176">Republic of Montenegro</option>
   <option value="177">Republic of Serbia</option>
   <option value="178">Reunion</option>
   <option value="179">Romania</option>
   <option value="180">Russia</option>
   <option value="181">Rwanda</option>
   <option value="182">St Barthelemy</option>
   <option value="183">St Eustatius</option>
   <option value="184">St Helena</option>
   <option value="185">St Kitts-Nevis</option>
   <option value="186">St Lucia</option>
   <option value="187">St Maarten</option>
   <option value="188">St Pierre & Miquelon</option>
   <option value="189">St Vincent & Grenadines</option>
   <option value="190">Saipan</option>
   <option value="191">Samoa</option>
   <option value="192">Samoa American</option>
   <option value="193">San Marino</option>
   <option value="194">Sao Tome & Principe</option>
   <option value="195">Saudi Arabia</option>
   <option value="196">Senegal</option>
   <option value="197">Seychelles</option>
   <option value="198">Sierra Leone</option>
   <option value="199">Singapore</option>
   <option value="200">Slovakia</option>
   <option value="201">Slovenia</option>
   <option value="202">Solomon Islands</option>
   <option value="203">Somalia</option>
   <option value="204">South Africa</option>
   <option value="205">Spain</option>
   <option value="206">Sri Lanka</option>
   <option value="207">Sudan</option>
   <option value="208">Suriname</option>
   <option value="209">Swaziland</option>
   <option value="210">Sweden</option>
   <option value="211">Switzerland</option>
   <option value="212">Syria</option>
   <option value="213">Tahiti</option>
   <option value="214">Taiwan</option>
   <option value="215">Tajikistan</option>
   <option value="216">Tanzania</option>
   <option value="217">Thailand</option>
   <option value="218">Togo</option>
   <option value="219">Tokelau</option>
   <option value="220">Tonga</option>
   <option value="221">Trinidad & Tobago</option>
   <option value="222">Tunisia</option>
   <option value="223">Turkey</option>
   <option value="224">Turkmenistan</option>
   <option value="225">Turks & Caicos Is</option>
   <option value="226">Tuvalu</option>
   <option value="227">Uganda</option>
   <option value="228">United Kingdom</option>
   <option value="229">Ukraine</option>
   <option value="230">United Arab Emirates</option>
   <option value="231">United States of America</option>
   <option value="232">Uruguay</option>
   <option value="233">Uzbekistan</option>
   <option value="234">Vanuatu</option>
   <option value="235">Vatican City State</option>
   <option value="236">Venezuela</option>
   <option value="237">Vietnam</option>
   <option value="238">Virgin Islands (Brit)</option>
   <option value="239">Virgin Islands (USA)</option>
   <option value="240">Wake Island</option>
   <option value="241">Wallis & Futana Is</option>
   <option value="242">Yemen</option>
   <option value="243">Zaire</option>
   <option value="244">Zambia</option>
   <option value="245">Zimbabwe</option>
</select></td></tr>

<tr><th align="left" bgcolor=""><font>State</font></th><td><input type="text" name="state" required value="<?php echo $applup['state'];?>"></td></tr>
<tr><th align="left" bgcolor=""><font color="">Address</font></th><td><textarea rows="6" cols="60" type="textarea" name="address" required value="<?php echo $applup['address'];?>"></textarea></td></tr>
<tr><th align="left">High School/Diploma Year</th><td><select required name="class">
	<option value= ""disabled selected hidden>Select one</option>
	<option value="1">2022</option>
	<option value="2">2021</option>
	<option value="3">2020</option>
	<option value="4">2019</option>
	<option value="5">2018</option>
	<option value="6">2017</option>
	<option value="7">2016</option>
	<option value="8">2015</option>
	<option value="9">2014</option>
	<option value="10">2013</option>
	<option value="11">2012</option>
	<option value="12">2011</option>
	<option value="13">2010</option>
	<option value="14">2009</option>
	<option value="13">2008</option>
	<option value="15">2007</option>
	<option value="16">2006</option>
	<option value="17">2005</option>
	<option value="18">2004</option></select></td></tr>
<tr><th align="left">Level</th><td><select required name="level">
	<option value= ""disabled selected hidden>Choose Here</option>
	<option value="1">Undergraduate</option>
	<option value="2">Graduate</option></select></td></tr>
<tr><th align="left" bgcolor=""><font color="">Motivation</font></th><td><textarea rows="6" cols="60" type="textarea" name="motivation" required value="<?php echo $applup['motivation'];?>"></textarea></td></tr>
	<tr><th align="left">Preferred Choice of Study</th><td><select required name="choice1">
	<option value= ""disabled selected hidden>Available Courses</option>
	<option value="1">Compuer Science</option>
	<option value="2">Business Administration</option>
	<option value="3">Artificial Intelligence</option>
	<option value="4">Arts and Culture</option>
	<option value="5">Music</option>
	<option value="6">Finance</option>
	<option value="7">Accounting</option>
	<option value="8">Human Relations</option></select></td></tr>
	<tr><th align="left">Second Choice</th><td><select required name="choice2">
	<option value= ""disabled selected hidden>Available Courses</option>
	<option value="1">Compuer Science</option>
    <option value="2">Business Administration</option>
    <option value="3">Artificial Intelligence</option>
    <option value="4">Arts and Culture</option>
    <option value="5">Music</option>
    <option value="6">Finance</option>
    <option value="7">Accounting</option>
    <option value="8">Human Relations</option></select></td></tr>

<tr><th align="left">Photo</th><td><input type="file" name="photo" value="<?php echo $applup[17];?>"></td></tr>
<tr><th align="left">Waec Certificate</th><td><input type="file" name="waec" value="<?php echo "<img src=imagestudent/$applup[17].jpg;"?>"></td></tr>
<tr><th align="left">Transcrip</th><td><input type="file" name="transcript" value="<?php echo $applup[19];?>"></td></tr>

<tr><th align="center" ><input type="submit" value="Submit" value="Submit" onclick="alert('click OK to continue')" class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block"></th></tr>
</table></form>

<?php
mysqli_close($connection);
 require 'footer.php'; ?>
