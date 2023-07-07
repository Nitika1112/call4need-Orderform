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
    <link href="css/wizard.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- YOUR CUSTOM CSS -->
    <script src="js/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEMdc2GkJYR0rc19-h1QbFXL8RIajtxSk&libraries=places"></script>

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
		<div class="hero_single inner_pages background-image" data-background="url(img/home_section_2.jpg)"
        style="height: 400px; background-position: bottom center;">
			<div class="opacity-mask" data-opacity-mask="rgb(0 0 0 / 68%)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<h1>Your Need Our Deed</h1>
							<p>Order from your favourite place around the corner</p>
							<a href="#submit" class="btn_1 gradient btn_scroll">Order Now</a>
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
			<div class="wave hero"></div>
		</div>
        <!-- /container -->
        <div class="container margin_30_40" id="submit">

			<div class="row justify-content-center">
				<div class="col-lg-7 col-md-8">
					<div class="text-center add_bottom_15">
                        <h4>Place your order below</h4>
                        <p>Order food, snacks, groceries, vegetable, fruits, chicken/fish any your need at your doorstep</p>
                    </div>

					<div id="wizard_container">
					    <div id="top-wizard">
							<div id="progressbar"></div>
						</div>
						<!-- /top-wizard -->
						<form method="POST" id="myForm" name="myForm" enctype="multipart/form-data" action="contact.php">
							<input id="website" name="website" type="text" value="">
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">

								<div class="step">
									<h3 class="main_question"><strong>1/3</strong>What would you like to order?</h3>
                                    <h6>Item</h6>
                                    <div class="" id="additem" >
                                        <div class="col-lg-12" style="display: grid">
                                            <div class="itemBox">
                                                <div class="col-lg-7" style="width: 57%; margin-right: 5px; float: left;">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" 
                                                        name="itemName[]" placeholder="Item Name 1" 
                                                        id="itemName" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5" style="float: left;">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" 
                                                        placeholder="Item Qty" name="itemQty[]" 
                                                        id="email_register" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </div> 
                                    <p style="font-size: 12px">
										<strong><i class="icon_info"></i> Note</strong><br>
										Item Quantity can be in(kg./gm./ltr./ml./no.)
                                    </p> 
                                    <div class="row">   
                                        <div class="col-lg-12">
                                            <button type="button" id="add-button" class="additem">
                                                + Add&nbsp;Item</button>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <div style="margin-bottom: 30px">
                                        <button type="button" name="forward" class="forward" style="float: right">Next</button>  
                                    </div>
                                </div>

								<div class="step">
									<h3 class="main_question"><strong>2/3</strong>From Where you want to order?</h3>
									<div class="form-group">
										<label class="container_radio version_2">From any Shop
											<input type="radio" name="orderType" value="randomly" required>
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="form-group">
										<label class="container_radio version_2">Specific Shop
											<input type="radio" name="orderType" value="specificaly">
											<span class="checkmark"></span>
										</label>
									</div>
									<p style="font-size: 12px">
										<strong><i class="icon_info"></i> Note</strong><br>
										From any shop selection you can choose resturant/shop of your choice,
                                        and on specific shop selection we will deliver item from our choice.
                                    </p>
                                    <div class="form-group">
										<input type="text" id="searchTextField" name="resturantName" 
                                        class="form-control">
                                    </div>
                                    <!-- <button type="submit" name="submit" id="randomSubmitBtn" class="submit">Submit</button> -->
                                    <div class="formBtn" style="padding-bottom: 30px">
                                        <button type="button" name="backward" class="backward" style="float: left;">Prev</button>
								        <button type="button" name="forward" class="forward" style="float: right;">Next</button>
                                    </div>
                                </div>
								<!-- /step-->

								<div class="submit step">
									<h3 class="main_question"><strong>3/3</strong>Your Address</h3>
									<div class="form-group">
                                        <input class="form-control" type="text" placeholder="Name" 
                                        id="name_contact" name="name_contact" maxlength="50" required="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="Email"
                                        id="email_contact" name="email_contact" maxlength="30" required="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="number" placeholder="Phone Number"
                                        id="number_contact" name="number_contact" minlength="10" maxlength="10" max="9999999999" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" style="height: 120px;" 
                                        placeholder="Address" id="address_contact" 
                                        name="address_contact"  required=""></textarea>
                                    </div>
                                    <div id="bottom-wizard" style="padding-bottom: 30px">
                                        <button type="button" name="backward" class="backward" style="float: left;">Prev</button>
                                        <button type="submit" name="submit" onclick="validateTextbox(event)" class="submit" style="float: right;">Submit</button>
                                    </div>
								</div>
								<!-- /step-->

							</div>
						</form>
                    </div>
					<!-- /Wizard container -->
				</div>
				<!-- /col -->
			</div>
			<!-- /row -->	
		</div>
		<!-- /container -->

		<!-- /hero_single -->
        <div class="bg_gray">
            <div class="container margin_30_20 bg_gray">			
            <div class="main_title center">
                <span><em></em></span>
                <h2>Why Submit to Call4need</h2>
                <p>How learned citizens can be empowered.</p>
            </div>

            <div class="row justify-content-center align-items-center add_bottom_15">
                    <div class="col-lg-6">
                        <div class="box_about">
                            <h3>Boost your Bookings</h3>
                            <p class="lead">Est falli invenire interpretaris id, magna libris sensibus mel id.</p>
                            <p>Per eu nostrud feugiat. Et quo molestiae persecuti neglegentur. At zril definitionem mei, vel ei choro volumus. An tota nulla soluta has, ei nec essent audiam, te nisl dignissim vel. Ex velit audire perfecto pro, ei mei doming vivendo legendos. Cu sit magna zril, an odio delectus constituto vis. Vis ludus omnesque ne, est veri quaeque ad.</p>
                            <img src="img/arrow_about.png" alt="" class="arrow_1">
                        </div>
                    </div>
                    <div class="col-lg-6 text-center d-none d-lg-block">
                            <img src="img/about_1.svg" alt="" class="img-fluid" width="250" height="250">
                    </div>
                </div>
                <!-- /row -->
                <div class="row justify-content-center align-items-center add_bottom_15">
                    <div class="col-lg-6 text-center d-none d-lg-block">
                            <img src="img/about_2.svg" alt="" class="img-fluid" width="250" height="250">
                    </div>
                    <div class="col-lg-6">
                        <div class="box_about">
                            <h3>Manage Easly</h3>
                            <p class="lead">Est falli invenire interpretaris id, magna libris sensibus mel id.</p>
                            <p>Per eu nostrud feugiat. Et quo molestiae persecuti neglegentur. At zril definitionem mei, vel ei choro volumus. An tota nulla soluta has, ei nec essent audiam, te nisl dignissim vel. Ex velit audire perfecto pro, ei mei doming vivendo legendos. Cu sit magna zril, an odio delectus constituto vis. Vis ludus omnesque ne, est veri quaeque ad.</p>
                            <img src="img/arrow_about.png" alt="" class="arrow_2">
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <div class="box_about">
                            <h3>Reach New Customers</h3>
                            <p class="lead">Est falli invenire interpretaris id, magna libris sensibus mel id.</p>
                            <p>Per eu nostrud feugiat. Et quo molestiae persecuti neglegentur. At zril definitionem mei, vel ei choro volumus. An tota nulla soluta has, ei nec essent audiam, te nisl dignissim vel. Ex velit audire perfecto pro, ei mei doming vivendo legendos. Cu sit magna zril, an odio delectus constituto vis. Vis ludus omnesque ne, est veri quaeque ad.</p>
                        </div>

                    </div>
                    <div class="col-lg-6 text-center d-none d-lg-block">
                            <img src="img/about_3.svg" alt="" class="img-fluid" width="250" height="250">
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /container -->

	</main>
	<!-- /main -->

	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    
    <script src="js/common_scripts.min.js"></script>
    <script src="js/common_func.js"></script>
    <script src="assets/validate.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="js/wizard/wizard_scripts.js"></script>
    <script src="js/wizard/wizard_func.js"></script>
    <script>
        $(document).ready(function () {
            //hide the submit button on load
            $('#searchTextField').hide();

            $('input[type=radio][name=orderType]').change(function () {
                if (this.value == 'randomly') {
                    $('#searchTextField').hide();
                }
                if (this.value == 'specificaly') {
                    $('#searchTextField').show();
                }
            });
         });

         // autocomplete address
         // Get a reference to the input field
        var input = document.getElementById('searchTextField');

        // Initialize the Autocomplete service
        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            // Access place details and perform actions with the selected place
          });
        
        //adding textbox 
        $(document).ready(function() {
        var counter = 1;

        // Add item button click event
        $('#add-button').click(function() {
            var newItemBox = $('<div class="itemBox"></div>');

            // Item Name input
            var itemNameInput = $('<div class="col-lg-7" style="width: 57%; margin-right: -20px; float: left;"><div class="form-group"><input type="text" class="form-control" name="itemName[]" placeholder="Item Name ' + (counter + 1) + '"></div></div>');

            // Item Quantity input
            var itemQtyInput = $('<div class="col-lg-5" style="float: left;"><div class="form-group"><input type="text" class="form-control" name="itemQty[]" placeholder="Item Qty"></div></div>');

            // Remove Button
            var removeButton = $('<span class="close-icon" style="width: 4%; height: 21px; text-align: center;">x</span>');
            removeButton.click(function() {
            $(this).closest('.itemBox').remove();
            });

            // Create a new row to contain the inputs and remove button
            var newRow = $('<div class="row"></div>');
            newRow.append(itemNameInput);
            newRow.append(itemQtyInput);
            newRow.append(removeButton);

            // Append the new row to the new item box
            newItemBox.append(newRow);

            // Append the new item box
            newItemBox.appendTo('#additem');

            counter++;
        });
        });

</script>

</body>
</html>