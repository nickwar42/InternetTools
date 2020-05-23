<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link rel="stylesheet" href="styles.css" />

<title> Lab 8, Javascript! </title>
<div style="width: 100%; font-size: 69px; font-weight: bold; text-align: center;"> Lab 8 - Javascript!</div>
<div class="w3-bar w3-black">
  <a href="http://itools.cs.laurentian.ca/" class="w3-bar-item w3-button">iTools</a>
  <a href="http://coscvm33.cs.laurentian.ca/" class="w3-bar-item w3-button">Home</a>
  <a href="/Labs/lab2.html" class="w3-bar-item w3-button">Lab 2</a>
  <a href="/Labs/lab3.html" class="w3-bar-item w3-button">Lab 3</a>
   <a href="/Labs/lab4.php" class="w3-bar-item w3-button">Lab 4</a>
<a href="/Labs/lab5.php" class="w3-bar-item w3-button">Lab 5</a>
<a href="http://coscvm33.cs.laurentian.ca/myadmin/" class="w3-bar-item w3-button">Lab 6</a>
  <a href="/Labs/extralab.php" class="w3-bar-item w3-button">Lab 7? 6.5?</a>  
<a href="/Labs/lab7.php" class="w3-bar-item w3-button">Lab 7</a>
  <a href="/Labs/lab8.php" class="w3-bar-item w3-button">Lab 8</a>
 <a href="/Project/Musicorum.php" class="w3-bar-item w3-button">Project</a>
</div>

<body style=background-color:firebrick;>

<!-- Start of Lab 8 -->

<article>
      <h2>Personal Information</h2>
      <form action="/Labs/lab8.php">        <div id="errorText"></div> 
        <div id="errorText"></div> 
        <div id="numErrorText"></div>
        
        <fieldset id="contactinfo">
          <label for="addrinput">
            Street Address
          </label>
          <input type="text" id="addrinput" name="Address" required/>
          <label for="cityinput">
<label for="cityinput">
            City
          </label>
          <input type="text" id="cityinput" name="City" required/>
          <label for="provinput">
            State/Province
          </label>
           <select id="provinput" name="ProvinceState">
 	 			<option value="-1">Please Select Country First</option>
		  </select>
          <label for="zipinput">
            Zip/Postal Code
          </label>
          <input type="text" id="zipinput" name="Zip" required/>
          <label for="countryinput">
            Country
          </label>
          <select id="countryinput" name="Country">
 	 			<option value="-1">Please Select a Country</option>
  				<option value="canada">Canada</option>
  				<option value="us">US</option>
		  </select>
          
        </fieldset>
        <fieldset id="submitsection">
          <input type="submit" id="submitBtn" value="Submit" />
        </fieldset>
     </form>

   </article>
   <script src="script.js"></script>


</body>
</html>
