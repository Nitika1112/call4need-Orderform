<?php 
/* Database connection start */
$servername = "68.178.145.115";
$username = "adbikeuser";
$password = "adbikeuser123";
$dbname = "adbike_db";
$connect = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

$sql = "SELECT a.id, `fk_order_id`, `item_name`, `item_qty`, `orderType`, `resturantName`, `name_contact`,
       `email_contact`, `number_contact`, `address_contact`, DATE(a.created_on) AS created_on 
        FROM `call4need_order_details` b INNER JOIN `call4need_Orderform` a ON a.id = b.fk_order_id";

$result = mysqli_query($connect,$sql);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FooYes - Quality delivery or takeaway food">
    <meta name="author" content="Ansonika">
    <title>Call4need - Quality delivery or takeaway food</title>

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <!-- SPECIFIC CSS -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/buttons.dataTables.min.css">
    <!-- YOUR CUSTOM CSS -->
    <script src="js/jquery.min.js"></script>
    <style>
        div.dt-buttons{
            margin-bottom: 15px !important;
        }
        table.dataTable td {
        font-size: 12px;
        }
    </style>
</head>

<body>
				
	<header class="header clearfix element_to_stick">
        <div class="container">
            <div id="logo">
                <a href="index.html">
                    <img src="img/logo.png" width="162" height="35" alt="" class="logo_normal">
                    <img src="img/logo_sticky.png" width="162" height="35" alt="" class="logo_sticky">
                </a>
            </div>
            <div class="layer"></div><!-- Opacity Mask Menu Mobile -->
        </div>
    </header>
    <!-- /header -->
	
	<main>
		<div class="hero_single inner_pages background-image" data-background="url(img/home_section_2.jpg)" style="height:100vh">
			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
				<div class="container" style="margin-top: 2%">
					<div class="row justify-content-center" style="background: #fff;">
						<div class="otg-booking-table" id="get"
                            style="width: 100%; margin: 1rem 0rem !important;">    
                            <table class="table table-bordered table-striped table-responsive customer-table"
                                id="example" style="border-top: 1px solid #ddd;">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>item_name</th>
                                            <th>item_qty</th>
                                            <th>orderType</th>
                                            <th>resturantName</th>
                                            <th>name_contact</th>
                                            <th>email_contact</th>
                                            <th>number_contact</th>
                                            <th>address_contact</th>
                                            <th>created_on</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                            <?php  
                                            while($row = mysqli_fetch_array($result))  
                                            {  
                                                echo '  
                                                    <tr>  
                                                        <td>'.$row["id"].'</td>  
                                                        <td>'.$row["item_name"].'</td>  
                                                        <td>'.$row["item_qty"].'</td>  
                                                        <td>'.$row["orderType"].'</td>  
                                                        <td>'.$row["resturantName"].'</td>  
                                                        <td>'.$row["name_contact"].'</td>  
                                                        <td>'.$row["email_contact"].'</td>  
                                                        <td>'.$row["number_contact"].'</td>  
                                                        <td>'.$row["address_contact"].'</td>  
                                                        <td>'.$row["created_on"].'</td>  
                                                    </tr>  
                                                ';  
                                                }  
                                            ?>  
                                        </tbody>
                                </table>
                        
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
		</div>
	</main>
	<!-- /main -->
    <!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/common_func.js"></script>
        

    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.buttons.min.js"></script>
    <script src="js/jszip.min.js"></script>
    <script src="js/pdfmake.min.js"></script>
    <script src="js/vfs_fonts.js"></script>
    <script src="js/buttons.html5.min.js"></script>
    <script src="js/buttons.print.min.js"></script>

    <script src="js/bootstrap.bundle.min.js"></script>

    <script>  
    $('#example').DataTable( {
            dom: 'Bfrtip',
            bAutoWidth: false,
            scrollCollapse: true,
            autoWidth: false,
            scrollX: 'true',
            scrollH: 'true', 
            buttons: [ 'copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5', 'print' ],
            lengthMenu: [[5, 20, 40, -1], [5, 20, 40, "All"]],
        });
    </script>
</body>
</html>

