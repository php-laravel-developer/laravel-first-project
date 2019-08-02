<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
	
	<?php 
	    if($errors->any())
		{
		   //print_r($errors) ; 
		   
		   foreach($errors->all() as $error) {
		   
		     //  echo $error["name"] ; 
			 
			 
			 print_r($error) ; 
		   }
		   
		}
	?>
	<form name="form1" method="post" action="/blog/submitmyform ">
	
	{{CSRF_field()}}
       <table border="1">
	      <tr>
		      <td>  Name </td>
			  <td> <input type="text" name="name" size="50" > </td>
			  
		  </tr>
		  <tr>
		      <td>  Email </td>
			  <td> <input type="text" name="name" size="50" > </td>
			  
		  </tr>
		  
		  <tr>
		      <td>  Age </td>
			  <td> <input type="text" name="name" size="50" > </td>
			  
		  </tr>
		  
		  <tr>
		      <td colspan="2"> <input type="submit" name="btnsubmit" value="Submit"></td> 
			  
			  
		  </tr>
	   </table>
	   </form>
    </body>
</html>
