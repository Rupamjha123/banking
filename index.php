<!DOCTYPE html>


<head>
    <meta charset="UTF-8">
   

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

   <title>BANK</title>
</head>
<body>



     <nav class="navbar navbar-expand-sm navbar-dark fixed-top justify-content-center">
  <!-- Brand -->
  <a class="navbar-brand " href="#">CANARA BANK</a>
  </nav>

<div class="container bg-dark outer">
   <p>CANARA BANK</p>
    <P>(MAKE YOUR TRUST ALWAYS)</P>
    <button type="button" class="btn  btn-outline-primary btn-lg bt1"  data-target="#mymodel2"  data-toggle="modal">CREATE ACCOUNT</button>




     <button type="button" class="btn btn-light btn-lg bt2"   data-target="#mymodel" data-toggle="modal">LOGIN</button>


</div>
<div class="outer2">
<h1 class="h3">fgvf</h1>

<div class="inner">

</div>
</div>

<div class="footer">
<div class="f2">
<p class="p1">Location</p>
<p>Corporate Office: Plot No 4,</p>
<p> Sector -10 Dwarka New Delhi -110075 </p>
<p>Copyright � CANARA Bank. All rights reserved.</p>

<p>Branch manager no-9867452309</p>
<p>trustful bank</p>

</div>

</div>






	<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mymodel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
				<div class="modal-header">
					<h3 class="text-center text-dark">LOGIN</h3>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    	 <form action="log_in" method="POST">
                             
                          <div class="form-group">
                               <br><label>USERNAME</label>
                               <br><input type="text" name="customer" placeholder="ENTER YOUR NAME" >

                                <br><label>PASSWORD</label>
                                 <br><input type="password" name="pass" placeholder="ENTER YOUR PASSWORD"  >
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
					<h3 class="text-center text-dark">LOGIN</h3>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
        <div class="modal-body">
       <form action="creat_acc" method="POST">
      
           <div class="form-group ">
               <br><i class="	fas fa-user fa-3x" style="color:#660033;"></i>
                <br><input type="text" name="user" placeholder="Full name"><br>


                 <br><label>ADHAAR NUMBER</label>
                 <input type="file" name="adhar" placeholder="Your Adhaar Nuber"><br>


                <br><label>PAN NUMBER</label>
                <br><input type="text" name="pan" placeholder="Your Pan Number" maxlength="10"><br>

                <i class="fa fa-map-marker " style="color:#660033;"aria-hidden="true"></i>
                <br><textarea type="text" name="address" placeholder="Your Address" ></textarea><br>


               <br><label>Email_id</label>
               <br><input type="email" name="email" placeholder="Your email" ></input><br>

        
               <label for="image1">IMAGE 1</label>
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


<script type="text/javascript">

    var username = document.forms["myform"]["user"];
    var adhar = document.forms["myform"]["adhar"];
    var pan = document.forms["myform"]["pan"];
    var address = document.forms["myform"]["address"];
    var balance = document.forms["myform"]["bal"];
    var signature = document.forms["myform"]["sign"];
    var bill = document.forms["myform"]["Bill"];


    name=document.getElementById("user_name error");
    adhar=document.getElementById("adhar");
    balance=document.getElementById("balance");
   address=document.getElementById("address");
    pan=document.getElementById("pan");
    signature=document.getElementById("sign");
   bill=document.getElementById("bill");

   function validate()
   {

     if( username.value==""){

     username.style.border="1ps solid red";
     name="cus_name is required";
     return false;
     }

</script>
</body>
</html>
