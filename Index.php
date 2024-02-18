<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Home |MONACO PIZZA</title>
		<meta name="author" content="The name of the document’s author to go here" />
		<meta name="description" content="A concise and accurate summary of the document content is to appear here">
		<link rel="shortcut icon" href="pizza.png" type="image/x-icon" />
		<link rel="stylesheet" href="styles.css" />
		
		<!-- STEP 1 : Connect to your Web server, and upload all of the files in this repository  to a new folder and open index.php and Subscribe.php-->

		<style>  
		 body {  
			   

		 width: 600px;
		 height: 500px;
		 display: block;
		 margin:auto;
		 color:black;
		 background-color:black;
         }
			
		 form {

         width: 600px;
         height:900px;
         display: block;
         margin:auto;
		 background-color:aqua;
		 color:black;
		 -moz-border-radius: 15px 15px 15px 15px; 
		 -webkit-border-radius: 15px 15px 15px 15px;
         }

		 header {

         width: 200px;
         height:100px;
         display: block;
         margin:auto;
         }

		 footer {
		 width: 300px;
		 height:100px;
		 display:block;
		 margin:auto;
		 }
					
		 .images{

		 display:flex;
		 justify-content:center;

		 }

		 .colum{
						
		 margin:0 30px;
		 }
		 .fieldset{
		 background-color:aqua;
		 }


		  </style>
	      </head>
	      <body>
		 <!-- Page-level header -->    
		 <form action="Subscribe.php"> 
		 <header>
			<h1>Monaco Pizza</h1>       <!-- level 1 title-->   
			<h2>Choose your order</h2>  <!-- level 2 title-->  
		 </header>

		 <!-- Page-level main content -->
          <main>	
           <div class="images">     <!-- this part allows dividing in different columns -->
		   <div class="colum"> 
		   <img src="image1.gif" alt="image of pizza" width="60" height="60"> 
		   <p> $40 Hawaiana<p>      <!-- this part allows you to change the price and type of pizza -->
		   </div>
		   <div class="colum"> 
		   <img src="image3.gif" alt="image of pizza" width="60" height="60">
		   <p> $38 Pepperoni<p>     <!-- this part allows you to change the price and type of pizza -->
		   </div>
		   <div class="colum"> 
		   <img src="image4.gif" alt="image of pizza" width="60" height="60">
		   <p> $40 Margherita<p>    <!-- this part allows you to change the price and type of pizza -->
		   </div>
		   <div class="colum"> 
		   <img src="image5.gif" alt="image of pizza" width="60" height="60"> 
		   <p> $48 Rosciutto<p>    <!-- this part allows you to change the price and type of pizza -->
		   </div>
		  </div>

          
          <fieldset>  
          <legend>Contact Information:</legend>  <!-- In this part you can modify all personal information -->
          <label for="fname">First name:</label>
          <input type="text" id="fname" name="fname"> <!--text label-->
          <label for="lname">Last name:</label>
          <input type="texto" id="lname" name="lname"><br><br> <!--It allows jumps to the next line -->
		  <label for="numbercell">Cell number :</label>
          <input type="number" id="your number" name="numbercell">  <!--number label-->
          <label for="email">Email:</label>
          <input type="email" id="email" name="email"><br><br>  <!--Email label-->
          <label for=" Date">Date:</label>
          <input type="date" id="date" name="date"><br><br>   <!--date label--> 
		  
          </fieldset>

		  <fieldset> 
          <legend>Number of pizzas:</legend> <!--This fieldset controls the section Number of pizzas-->
          <label for="nPizza">N°- of pizzas:</label>
          <input type="number" id="number" name="nPizza">  <!--number label--> 
		  <label for="nSlide"> N°- of Slides:</label>
          <input type="number" id="number" name="nSlide"><br><br>   <!--number label--> 
		   <Section1>
		   <p> Please select Shape:</p>  <!-- In this part you can modify all personal information about Type of pizza Square or round in radio button-->
		  <input type="radio" name="Square" value="Square">  <!--radio label-->
          <label for="Square">Square</label>
          <input type="radio" name="Square" value="Round">
          <label for="Round">Round</label><br>    <!--radio label-->
		   </Section1> 

		   <Section2>
		   <p> Please select Size:</p>  <!-- In this part you can modify all personal information about Type of size pizza big or small in checkbox button-->
		   <input type="checkbox" name="Small" value="Small">  <!--checkbox label-->
           <label for="Small">Small</label>
           <input type="checkbox" name="Big" value="Big">   <!--checkbox label-->
           <label for="Big"> Big</label><br>
		   </Section2> 

		   <p> Please select Toppings:</p>   <!--This is a menu select with optgroup. In this part we can modify the topping of pizza-->
		   <label for="toppings">Choose your Toppings:</label>  <!--Tis part select a menu label for choose toppings-->
           <select name="toppings" id="toppings">      
           <optgroup label="American Pizza">
           <option value="Hawaiana">Hawaiana</option>
           <option value="Pepperoni">Pepperoni</option>
           </optgroup>
           <optgroup label="Italian Pizza">
           <option value="Margherita">Margherita</option>
           <option value="Prosciutto e funghi">Prosciutto e funghi</option>
           </optgroup>
           </select>

		   <label for="type">Type of Pizza:</label> <!--This part select menu label for choose type of pizza-->
           <select name="type" id="type">
           <optgroup label="Choose your type of pizza is">
           <option value="Deep dish">Deep dish</option>
           <option value="Fine">Fine</option>
		   <option value="Neapolitan">Neapolitan</option>
		   <option value="Chicago style">Chicago style</option>
           </optgroup>
           </select>

		   <label for="take"><br><br>Order for:</label> <!--This part Select menu label for choose type of order in or out of the local -->
           <select name="take" id="take"> 
           <optgroup label="Yor order is for"> 
           <option value="Take out">Take out</option> 
           <option value="Delivery">Delivery</option>
		   <option value="Eat in Monaco Pizza">Eat in Monaco Pizza</option> 
           </optgroup>
		   </select>

		   </fieldset>

		   <fieldset>
		   <legend>If it is delivery write your address</legend> 
           <textarea id="write" name="write" rows="4" cols="50"> </textarea>  <!--It is a textarea it permit write text inside of form-->
		   </fieldset>

		  <input type="submit" value="Subscribe"> <!--label for submit-->
		  <input type="reset" value="reset">   <!--label for reset-->
          
		  </main>
		 <!-- Page-level footer -->
		 <footer>
			<p><small>© MONACO PIZZA, HTML, CSS, and JS Blocks Inc.</small></p>
		</footer>
		</form>
	</body>
</html>