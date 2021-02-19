<!DOCTYPE html>
<?php  session_start();
?>


<head>


    <meta charset="UTF-8">
   

    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

   <title>BANK</title>
  
  
  
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
<table class="t1">
    <tr>
        <td class="td"><div clss="div1">

        <img src="f1.png" alt="erropr" class="im1">
        </div></td>
        
        <td class="td"><div clss="div1">
        <img src="f2.jpg" alt="erropr" class="im1">
        </div></td>
    </tr>
    <br>

    <tr>
        <td class="td"><div clss="div1">
        <br><br><br>
        </div></td>
        
        <td class="td"><div clss="div1">
       <br><br><br>
        </div></td>
    </tr>
    <tr>
        <td class="td"><div clss="div1">
        <img src="f3.jpg" alt="erropr" class="im1">
        </div></td>
        
        <td class="td"><div clss="div1">
        <img src="f4.png" alt="erropr" class="im1">
        </div></td>
    </tr>

    
</table>

</div>
</div>

<div class="footer">
<p class="p1">Location</p>
<table class="t2">
    <tr>
        <td class="">

<p>Corporate Office: Plot No 4,</p>
<p> Sector -10 Dwarka New Delhi -110075 </p>
<p>Copyright � CANARA Bank. All rights reserved.</p>

<p>Branch manager no-9867452309</p>
<p>trustful bank</p>
<p><a href=""><i class="fab fa-facebook-square fa-2x fa-spin" style="color:#0033FF;"></i></a> &nbsp;<a href=""><i class="fab fa-twitter-square fa-2x fa-spin " style="color:#0033FF;"></i></a> &nbsp;<a href=""><i class="fab fa-whatsapp-square fa-2x fa-spin" style="color:#00FF00;"></i></a>
 &nbsp;<a href=""><i class="fab fa-instagram-square fa-2x" style="color:#0033FF";></i></a></p>
    </td>

    <td class="td1">
    <button type="button" class="btn btn-danger btn-lg bt2"   data-target="#feedback" data-toggle="modal">Feedback</button>


    </td>
    </tr>
</table>
</div>



<!-- Modal login modal -->



<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mymodel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
				<div class="modal-header">
					<h3 class="text-center text-light">LOGIN</h3>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form action="profile.php" method="POST">
                    <div class="modal-body">
                   
                             
                          <div class="form-group">
                          <br><i class="fas fa-user-tie fa-2x" style="color:#660033;"></i>
                               <input type="text" name="customer" placeholder="Your Registered Name" >

                               <br><i class="fas fa-envelope-open-text fa-2x " style="color:#660033;"aria-hidden="true"></i>
                             <input type="email" name="email" placeholder="Your email" required></input>


                                <br><i class="fas fa-lock fa-2x" style="color:#660033;"></i>
                                    <input type="password" name="pass" placeholder="Password"  required>
                          </div>
                          </div>


				<div class="modal-footer2 ">
       	<input type="submit" class="btn btn-danger" name="submit3">

	        </div>
                    </form>
                   

			</div>
		</div>
	</div>




<!-- Modal feedback -->

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="feedback">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
				<div class="modal-header">
					<h3 class="text-center text-light">Feedback</h3>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    	 <form action="index2.php" method="POST">
                             
                          <div class="form-group">
                          <br><i class="fas fa-user-tie fa-2x" style="color:#660033;"></i>&nbsp;
                               <input type="text" name="cust_feedback" placeholder="Your  Name" ><br>

                          <br><i class="fa fa-pencil fa-2x" aria-hidden="true" style="color:#660033;"></i>
                               <textarea type="text" name="feeback" placeholder="feedback" ></textarea>

                               
                                </div>


				<div class="modal-footer2">
       	<input type="submit" class="btn btn-danger">

	   </div>
                    </form>
                    </div>

			</div>
		</div>
	</div>











<!-- Modal create acconut -->


<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mymodel2">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
				<div class="modal-header">
					<h3 class="text-center text-light">CREATE ACCOUNT</h3>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <form  method="POST" action="conn_crete.php" enctype="multipart/form-data" >
      
                    <div class="modal-body">
                        
                             <div class="form-group ">
                             <br><i class="fas fa-user-tie fa-3x" style="color:#660033;"></i>
                             <input type="text" name="user" placeholder="Full name" required><br>


                 
                            <br><i class="far fa-map-marker-alt fa-3x " style="color:#660033;"aria-hidden="true"></i>
                            <input type="text" name="address" placeholder="Your Address" required><br>


                            <br><i class="fas fa-envelope-open-text fa-2x " style="color:#660033;"aria-hidden="true"></i>
                             <input type="email" name="email" placeholder="Your email" required></input><br>

                             <br><i class="fas fa-address-card fa-2x" style="color:#660033;"aria-hidden="true"></i>
                             <input type="text" name="pan" placeholder=" Pan Number" maxlength="10" required><br>

                              <br><i class="far fa-address-card  fa-2x" style="color:#660033;"aria-hidden="true"></i>
                             <input type="text" name="adhar" placeholder=" adhaar Number" maxlength="10" required><br>

                             <br><i class="	fas fa-phone-alt fa-2x" style="color:#660033;"aria-hidden="true"></i>
                            <input type="text" name="contact" placeholder="phone number"  required><br>
                            <br><i class="fas fa-image fa-2x" style="color:#660033;">Upload Your Pic</i>
                            <br><input type="file" name="pic1">
                            </div>


                     </div>

              <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <input type="submit" name="submit2">submit</button>
            </div>

       </form>

      </div>

    </div>
  </div>









</body>
    </html>