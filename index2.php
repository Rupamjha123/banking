<!DOCTYPE html>


<head>


    <meta charset="UTF-8">
   

    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

   <title>BANK</title>

   <style>


   </style>
</head>
<body>



<h1 class="h">CANARA BANK <i class="fas fa-user-tie fa-x fa-spin" style="color:white;"></i></h1>

<div class="container bg-dark outer">
   <p>CANARA BANK</p>
    <P>(MAKE YOUR TRUST ALWAYS)</P>
    <button type="button" class="btn  btn-outline-primary btn-lg bt1"  data-target="#mymodel2"  data-toggle="modal">CREATE ACCOUNT</button>
    <button type="button" class="btn btn-light btn-lg bt2"   data-target="#mymodel" data-toggle="modal">LOGIN</button>


</div>
<div class="outer2">
<div class="inner">
<h1 class="h3">ABOUT US</h1>
<table>
    <tr>
        <td><div clss="div1">

        <img src="f1.png" alt="erropr" class="im1">
        </div></td>
        
        <td><div clss="div1">
        <img src="f2.jpg" alt="erropr" class="im1">
        </div></td>
    </tr>
    <br>

    <tr>
        <td><div clss="div1">
        <br><br><br>
        </div></td>
        
        <td><div clss="div1">
       <br><br><br>
        </div></td>
    </tr>
    <tr>
        <td><div clss="div1">
        <img src="f3.jpg" alt="erropr" class="im1">
        </div></td>
        
        <td><div clss="div1">
        <img src="f4.png" alt="erropr" class="im1">
        </div></td>
    </tr>

    
</table>

</div>
</div>

<div class="footer">
<p class="p1">Location</p>
<p>Corporate Office: Plot No 4,</p>
<p> Sector -10 Dwarka New Delhi -110075 </p>
<p>Copyright � CANARA Bank. All rights reserved.</p>

<p>Branch manager no-9867452309</p>
<p>trustful bank</p>
<p><a href=""><i class="fab fa-facebook-square fa-2x fa-spin" style="color:#0033FF;"></i></a> &nbsp;<a href=""><i class="fab fa-twitter-square fa-2x fa-spin " style="color:#0033FF;"></i></a> &nbsp;<a href=""><i class="fab fa-whatsapp-square fa-2x fa-spin" style="color:#00FF00;"></i></a>
 &nbsp;<a href=""><i class="fab fa-instagram-square fa-2x" style="color:#0033FF";></i></a></p>

</div>







<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mymodel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
				<div class="modal-header">
					<h3 class="text-center text-light">LOGIN</h3>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    	 <form action="log_in" method="POST">
                             
                          <div class="form-group">
                          <br><i class="fas fa-user-tie fa-2x" style="color:#660033;"></i>
                               <input type="text" name="customer" placeholder="Your Registered Name" >

                                <br><i class="fas fa-lock fa-2x" style="color:#660033;"></i>
                                    <input type="password" name="pass" placeholder="Password"  >
                    </div>


				<div class="modal-footer ">
       	<input type="submit" class="btn btn-danger">

	   </div>
                    </form>
                    </div>

			</div>
		</div>
	</div>







<!-- Modal -->


<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mymodel2">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
				<div class="modal-header">
					<h3 class="text-center text-light">CREATE ACCOUNT</h3>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
        <div class="modal-body">
       <form action="creat_acc" method="POST">
      
           <div class="form-group ">
               <br><i class="fas fa-user-tie fa-3x" style="color:#660033;"></i>
                    <input type="text" name="user" placeholder="Full name"><br>


                 
                <br><i class="far fa-map-marker-alt fa-3x " style="color:#660033;"aria-hidden="true"></i>
                      <input type="text" name="address" placeholder="Your Address" ><br>


                       <br><i class="fas fa-envelope-open-text fa-2x " style="color:#660033;"aria-hidden="true"></i>
                             <input type="email" name="email" placeholder="Your email"></input><br>

                <br><i class="fas fa-address-card fa-2x" style="color:#660033;"aria-hidden="true"></i>
                    <input type="text" name="pan" placeholder=" Pan Number" maxlength="10"><br>

                    <br><i class="far fa-address-card  fa-2x" style="color:#660033;"aria-hidden="true"></i>
                    <input type="text" name="pan" placeholder=" adhaar Number" maxlength="10"><br>

                    <br><i class="	fas fa-phone-alt fa-2x" style="color:#660033;"aria-hidden="true"></i>
                        <input type="text" name="contact" placeholder="phone number"  ><br>


                    <br><i class="far fa-image fa-2x"  style="color:#660033;"></i> <label for="image1">Upload Your Photograph</label>
               <input type="file" id="image1" name="pic1" placeholder="image" class="input" required><br>
      
       </div>

              <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit">
            </div>

       </form>

      </div>

    </div>
  </div>
</div>



</body>
</html>

</body>
    </html>