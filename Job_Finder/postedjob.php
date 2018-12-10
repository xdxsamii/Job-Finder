<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Finder</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/dash board/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/dash board/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/dash board/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/dash board/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Job Finder</a>
            </div>

        
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="#"><i class="fa fa-dashboard"></i> Profile Settings</a>
                    </li>
                    
                   <li>
                        <a class="active-menu" class="active-menu" href="Circular_post.php"><i class="fa fa-fw fa-file"></i> Post a Circular</a>
                    </li>
                    <li>
                        <a class="active-menu" href="postedjob.php"><i class="fa fa-fw fa-file"></i> Posted Circular</a>
                    </li>

                    <li>
                        <a class="active-menu" href="a.php"><i class="fa fa-fw fa-file"></i> Logout</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->

        <?php
         session_start();

     $id=$_SESSION['user_id'];
$con = mysqli_connect("localhost","root","","jobfinder");


// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }




  $sql="SELECT *
FROM circular
INNER JOIN employer ON circular.employer_id=employer.id WHERE employer_id=$id ORDER BY circular.id DESC ";

$result=mysqli_query($con,$sql);
$num_row  = mysqli_num_rows($result);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    		$projects = array();
    while ($project =  mysqli_fetch_assoc($result))
    {
        $projects[] = $project;
    }
// $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
 

        <div id="page-wrapper">
        	<div>
        		<?php  
        		
     
        			# code.
                    foreach ($projects as $circular){?>
				<h2 style="text-align: center;"><?php echo ($circular["title"]);?> 

				</div>

            <div id="page-inner">

                 
              <div class="container py-4">
   
  
    
    <div class="row mb-5">
         <div class="col-5"><?php echo ($circular["responsibilities"]);?></div>
        <div class="col"><?php echo ($circular["requirement"]);?></div>
       
    </div>
    <?php  }?>
				<?php  

mysqli_close($con);
?></h2>
   
</div>




	   
		
		
				
				
				
				
                
				
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/dash board/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/dash board/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/dash board/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/dash board/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/dash board/morris/morris.js"></script>
	
	
	<script src="assets/js/dash board/easypiechart.js"></script>
	<script src="assets/js/dash board/easypiechart-data.js"></script>
	
	
    <!-- Custom Js -->
    <script src="assets/js/dash board/custom-scripts.js"></script>

    <style type="text/css">
    	 .row>div{
      background-color: #ffeeee;
      background-clip: content-box;
      min-height: 100px;
}

 .container {
      border: 1px dotted #ccc;
}

 .row {
      border: 1px dotted #ccc;
      border-left: 0;
      border-right: 0;
}

    </style>


</body>

</html>