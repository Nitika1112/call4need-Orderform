<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FooYes - Quality delivery or takeaway food">
    <meta name="author" content="Ansonika">
    <title>Call4need - Quality delivery or takeaway food</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
    
    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <!-- SPECIFIC CSS -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/order-sign_up.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- YOUR CUSTOM CSS -->
    <script src="js/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEMdc2GkJYR0rc19-h1QbFXL8RIajtxSk&libraries=places"></script>

</head>
<?php 
include_once("db_connect.php");

if (isset($_POST['submit'])) {
    $insertId = 0;
    $orderType = mysqli_real_escape_string($connect, $_POST['orderType']);
    $resturantName = mysqli_real_escape_string($connect, $_POST['resturantName']);
    $name_contact = mysqli_real_escape_string($connect, $_POST['name_contact']);
    $email_contact = mysqli_real_escape_string($connect, $_POST['email_contact']);
    $number_contact = mysqli_real_escape_string($connect, $_POST['number_contact']);
    $address_contact = mysqli_real_escape_string($connect, $_POST['address_contact']);

    if (mysqli_query($connect, "INSERT INTO call4need_Orderform(orderType, resturantName, name_contact, email_contact, number_contact, address_contact)
    VALUES ('$orderType', '$resturantName', '$name_contact', '$email_contact', '$number_contact', '$address_contact')")) {
        $insertId = mysqli_insert_id($connect);
        echo "<div class='container' style='margin-top: 60px;'>
                <div class='row justify-content-center'>                
                    <div class='col-lg-4'>
                        <div class='box_order_form'>
                            <div class='head text-center' style='padding: 15px'>
                                <h3>You are Registered Successfully</h3>
                            </div>
                            <!-- /head -->
                            <div class='main'>
                                <div id='confirm' style='padding: 8px'>
                                    <div class='icon icon--order-success svg add_bottom_15'>
                                        <img src='img/Confirmed.gif' alt='Success Image' width='120' height='120'>
                                    </div>
                                    <h3>Order Confirmed!</h3>
                                    <p>Thank you for submitting your details. <br><br>
                                    Our team will get in touch with you soon.
                                    For more details, call us on our toll-free number:<br> 
                                    <span style='font-size: 16px; color: crimson;'>+91 7352233444</span></p>
                                </div>
                            </div>
                        </div>
                        <!-- /box_booking -->
                    </div>
                </div>
            </div>";
    } else {
        echo "<div class='container' style='margin-top: 60px;'>
                <div class='row justify-content-center'>                
                    <div class='col-lg-4'>
                        <div class='box_order_form'>
                            <div class='head text-center' style='padding: 15px'>
                                <h3>You are Registered Successfully</h3>
                            </div>
                            <!-- /head -->
                            <div class='main'>
                                <div class='form-unsuccessful'>
                                <h3>Error in registering...Please try again later!</h3>
                                </div>
                            </div>
                        </div>
                        <!-- /box_booking -->
                    </div>
                </div>
            </div>";
         }

    // Check if the itemname field is set and not empty
    if (isset($_POST['itemName']) && is_array($_POST['itemName'])) {
        $itemNames = $_POST['itemName'];
        $itemQty = $_POST['itemQty'];

        $stmt = $connect->prepare("INSERT INTO call4need_order_details (fk_order_id, item_name, item_qty) VALUES (?, ?, ?)");
        $stmt->bind_param('iss', $insertId, $item, $qty);
        
        // Iterate over the arrays in a single foreach loop
        foreach ($itemNames as $index => $item) {
            $qty = $itemQty[$index];
            $stmt->execute();
        }
        
        $stmt->close();
}
}
?>  
</html>