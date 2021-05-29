<head>
	<title>FinWear | Bringing Elegance</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="icon" type="image/png" href="e-cave.ico">

	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="css/parsley.css">

	 <script src="https://www.paypal.com/sdk/js?client-id=AX0K2Uadzq2u75RCEcrDMoUuxeagiqASCjJ-xjZIXBCU7JRdJP2HbBDS4Sq7r93lQq4L6MdsFW6jAaPm"></script>
  
    <script>
// Code from https://developer.paypal.com/docs/checkout/
    paypal.Buttons({
        createOrder: function(data, actions) {
        return actions.order.create({
            purchase_units: [{
            amount: {
                value: '0.01'
            }
            }]
        });
        },
        onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
            alert('You have successfully purchased this item! Transaction completed by ' + details.payer.name.given_name);
            // Call your server to save the transaction
            return fetch('/paypal-transaction-complete', {
            method: 'post',
            headers: {
                'content-type': 'application/json'
            },
            body: JSON.stringify({
                orderID: data.orderID
            })
            });
        });
        }
    }).render('#pay');
    </script>
</head>