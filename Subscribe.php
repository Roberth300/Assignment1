<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Subscribe | MONACO PIZZA HTML, CSS, and JS Fundamentals</title>
		<meta name="author" content="The name of the document’s author to go here" />
		<meta name="description" content="A concise and accurate summary of the document content is to appear here">
		<link rel="shortcut icon" href="pizza.png" type="image/x-icon" />
		<link rel="stylesheet" href="styles.css" />
		<style>

        body {

        width: 300px;
        height:800px;
        display: block;
        margin:auto;
		background-color:aqua;

        }

		header {

        width: 400px;
        height:100px;
        display: block;
        margin:auto;
        }   

		</style>

		
	</head>
	<body>
		
		<header>
			<h1>MONACO PIZZA</h1>
			<h2>Thank You for your buy </h2>
		</header>
		
		<main>
			<section>
				<h3>Your order is:</h3>

                  <!-- We will add some script to run on the server when this page is called inside the below PHP delimiter tags -->
                   <?php 

                   $email=$_GET['email']; 
                   $fname=$_GET['fname'];
                   $lname=$_GET['lname'];
                   $numbercell=$_GET['numbercell'];
                   $date=$_GET['date'];
                   $nPizza=$_GET['nPizza'];
                   $nSlides=$_GET['nSlide'];
                   $Square=$_GET['Square'];
                   $Round=$_GET['Round'];
                   $Topping=$_GET['toppings'];
                   $Small=$_GET['Small'];
                   $Big=$_GET['Big'];
                   $Address=$_GET['write'];
                   $Take=$_GET['take'];
                   $Type=$_GET['type'];

				   


                   echo "Dear ".$fname." "; 
                   echo $lname." with email ";
                   echo " ".$email." and number of phone "; 
                   echo $numbercell." to day "; 
                   echo $date." you have bought "; 
                   echo $nPizza." Pizzas cut in ";
                   echo $nSlides." slides, your pizza is  ";
                   echo $Square." with toppings ";
                   echo $Round."  ";
                   echo $Topping." of type ";
                   echo $Type." ";
                   echo $Small." it order is ";
                   echo $Big."  ";
                   echo " for ".$Take." ";
                   echo $Address."  .Thank you for you buy and enjoy your order";
                   echo " Dear ".$fname." ";
                   echo $lname.".";

                    ?>
			        </section>
		            </main>
		         <!-- Page-level footer -->
		            <footer>
			        <p><small>© HTML, CSS, and JS Blocks Inc.</small></p>
		            </footer>
					
	</body>
</html>