<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Budget Buddy</title>
	<link href="https://via.placeholder.com/25" rel="icon" />

	<!-- Bootstrap CSS -->
	<link href="../css/global.css" rel="stylesheet" type="text/css">
	<link href="../css/home.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="nav-wrapper">
		<a class="logo" href="../index.html">
			<img src="../img/BudgetBuddy.png" alt="logo" />
		</a>
		<ul class="primary-nav">
			<li>
				<a href="../index.html">Home</a>
			</li>
			<li>
				<a href="../summary.html">Summary</a>
			</li>
			<li>
				<a href="../html/transactions.html">Transactions</a>
			</li>
			<li>
				<a href="../html/budget.html">Budgets</a>
			</li>
			<li>
				<a href="../html/savings-calc.html">Savings Calculator</a>
			</li>
			<li>
				<a href="../html/loan-calc.html">Loan Calculator</a>
			</li>
			<li>
				<a href="about.html">About Us</a>
			</li>
			<li>
				<a class="active" href="contact.html">Contact Us</a>
			</li>
			<li>
				<a href="#">Log Out</a>
			</li>
		</ul>
	</div>

<?php

if(!isset($_POST['submit']))
{
	echo "Error: you need to submit the form to access this page.";
}

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

if(empty($firstname) || empty($lastname) || empty($visitor_email)) 
{
    echo "Name and email are mandatory!";
    exit;
}
?>

Thank you for your message, <?php echo htmlspecialchars($_POST['fname']); ?>.

Your email is: <?php echo $_POST['email']; ?>.

And your message is: <?php echo $_POST['message']; ?>.

</body>
</html>