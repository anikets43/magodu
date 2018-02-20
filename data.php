<!DOCTYPE HTML>
<html class="no-js" lang="de">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="index,follow">

	<title>Magodu Charitable Trust</title>

	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/bootsnav.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
</head>

<body>

<?php
$servername = "localhost";
$username = "mybcbqhk_magodu";
$password = "Mag0du";
$dbname = "mybcbqhk_magodu";

 $connector = mysql_connect($servername,$username,$password, $dbname)
          or die("Unable to connect");
        echo "Connections are made successfully::";
      $selected = mybcbqhk_magodu("Donations, $connector)
        or die("Unable to connect");

      
      $result = mysql_query("SELECT * FROM Donations");
?> 
<table border="2">
      <thead>
        <tr>

        <th>Date</th>
			<th>Name</th>
			<th>Amount</th>
			<th>Mode 
				
			</th>
            <th>Purpose</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysql_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row\['Date'\]}</td>
              <td>{$row\['Name'\]}</td>
              <td>{$row\['Amount'\]}</td>
              <td>{$row\['Mode'\]}</td>
              <td>{$row\['Purpose'\]}</td>
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php mysql_close($connector); ?>
		<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="bar-phone">
							<i class="fa fa-phone"></i>
							<span>Call Us :</span>
							<strong>+91-9008430650</strong>
						</div>
						<div class="bar-mail">
							<i class="fa fa-envelope"></i>
							<span>Mail Us :</span>
							<strong>mymagodu@gmail.com</strong>
						</div>
						<div class="header-social">
							<a class="facebook" href="https://www.facebook.com/Magodu-Charitable-Trust-169242000365733/" title="facebook" target="_blank" rel="nofollow">
								<i class="fa fa-facebook"></i>
							</a>
							
						</div>
					</div>
				</div>
			</div>
			<nav class="navbar navbar-default navbar-sticky bootsnav">
				<div class="container">
					<div class="row">
						<div class="attr-nav">
		
							<a class="donation" href data-toggle="modal" data-target="#donateModal">donate now</a>
						</div>
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
								<i class="fa fa-bars"></i>
							</button>
							<a class="navbar-brand logo" href="index.html">
								<img src="images/logo.gif" class=" brand-logo img-responsive charity-logo" />
								<!-- <span>Magodu Foundation</span> -->
							
							</a>
						</div>
						<div class="collapse navbar-collapse" id="navbar-menu">
							<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
								<li>
									<a href="index.html">Home</a>
								</li>
								<li>
									<a href="about-us.html">About Us</a>
								</li>
								<li>
									<a href="activities.html">Activities</a>
								</li>
								<li>
											<a href="projects.html">Projects</a>
										</li>
								<li>
									<a href="gallery.html">Gallery</a>
								</li>
								


								<li>
										<a href="financials.html">Financials</a>
									</li>
									<li>
											<a href="contact.html">Contact Us</a>
										</li>
							</ul>
						</div>
						<div class="logo-txt-wrap">
							<p>
								<span class="quote">“</span><span class="color-red">Education</span> <span class="color-blue">for</span> <span class="color-orange">unprivileged</span> <span class="color-green">village</span> <span class="color-red">children</span>
								<span class="quote">”</span>
								</p></div>
					</div>
				</div>
			</nav>
		
			<section id="inner-banner">
				<div class="overlay">
					<div class="container">
						<div class="row">
							<div class="col-sm-6">
								<h1>Financials</h1>
							</div>
							<div class="col-sm-6">
								<h6 class="breadcrumb">
									<a href="index.html">Home</a> / Financials</h6>
							</div>
						</div>
					</div>
				</div>
			</section>
	


		<div class="callout">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h2>Change Their World. Change Yours. <br/>This changes everything.</h2>
							<!-- /.callout-title -->
						</div>
						<!-- /.columns large-6 -->
		
						<div class="col-md-6">
							<div class="callout-actions">
								<a href class="button" data-toggle="modal" data-target="#donateModal">Donate For Cause</a>
							</div>
							<!-- /.callout-actions -->
						</div>
						<!-- /.columns large-6 -->
					</div>
					<!-- /.row -->
				</div>
			</div>
		
			<footer class="footer">
					<div class="footer-body">
						<div class="container">
							<div class="row">
			
								<div class="col-md-3">
									<div class="footer-section">
										<h4 class="footer-section-title">Contact Us</h4>
										<!-- /.footer-section-title -->
			
										<div class="footer-section-body">
											<p>
												<b>Address:</b> Magodu, Karnataka
												<div class="footer-contacts">
													<p>
														<b>
															<i class="fa fa-phone"></i> Phone:
														</b>
			
														+91-9008430650
													</p>
			
													<p>
														<b>
															<i class="fa fa-envelope-o"></i> Email:
														</b>
			
														mymagodu@gmail.com
													</p>
												</div>
												<!-- /.footer-contacts -->
										</div>
										<!-- /.footer-section-body -->
									</div>
									<!-- /.footer-section -->
								</div>
								<!-- /.columns large-3 medium-12 -->
							</div>
							<!-- /.row -->
						</div>
					</div>
					<!-- /.footer-body -->
			
					<div class="bwt-footer-copyright">
						<div class="container">
							<div class="row">
								<div class="col-md-6 copyright">
										<div class="left-text">Copyright &copy; Magodu Charitable Trust. All Rights Reserved</div>
								</div>
							</div>
						</div>
					</div>
				</footer>
		
			<div id="donateModal" class="modal fade" role="dialog">
				<div class="modal-dialog modal-lg">
		
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title"> GIVA A BIT, CHANGE A LOT</h4>
						</div>
						<div class="modal-body">
							<p>Crossed Cheque or Demand Drafts can be drawn in favour of "ABC Foundation" and be sent to The President, ABC Foundation,
								Post Padubelle, or Funds could be directly transferred to the following account </p>
		
		
							
					<p>Account Name:
							<b>Shivakumar Chandrashekar</b>
						</p>
						<p>A/C NO :-
							<b>10867706470</b>
						</p>
						<p>IFSC CODE :-
							<b>SBIN0012706</b>
						</p>
						<p>BANK :-
							<b>State Bank Of India</b>
						</p>
						<p>BRANCH :-
							<b>Bangalore</b>
						</p>
						<p>All donations and expenses are 100% transparent with public.</p>
						</div>
		
					</div>
		
				</div>
			</div>
			<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootsnav.js"></script>
	<script src="js/banner.js"></script>
	<!-- <script>
		
		function edit_row(no)
{
 document.getElementById("edit_button"+no).style.display="none";
 document.getElementById("save_button"+no).style.display="block";
	
 var date=document.getElementById("date_row"+no);
 var donor=document.getElementById("donor_row"+no);
 var amnt=document.getElementById("amnt_row"+no);
 var amnt=document.getElementById("frequency_row"+no);
 var purpose=document.getElementById("purpose_row"+no);
	
 var date_data=date.innerHTML;
 var donor_data=donor.innerHTML;
 var amnt_data=amnt.innerHTML;
 var frequency_data=frequency.innerHTML;
 var purpose_data=purpose.innerHTML;

 date.innerHTML="<input type='text' id='date_text"+no+"' value='"+date_data+"'>";
 donor.innerHTML="<input type='text' id='donor_text"+no+"' value='"+donor_data+"'>";
 amnt.innerHTML="<input type='text' id='amnt_text"+no+"' value='"+amnt_data+"'>";
 frequency.innerHTML="<input type='text' id='frequency_text"+no+"' value='"+frequency_data+"'>";
 purpose.innerHTML="<input type='text' id='purpose_text"+no+"' value='"+purpose_data+"'>";
}

function save_row(no)
{
 var date_val=document.getElementById("date_text"+no).value;
 var donor_val=document.getElementById("donor_text"+no).value;
 var amnt_val=document.getElementById("amnt_text"+no).value;
 var frequency_val=document.getElementById("frequency_text"+no).value;

 var purpose_val=document.getElementById("purpose_text"+no).value;

 document.getElementById("date_row"+no).innerHTML=date_val;
 document.getElementById("donor_row"+no).innerHTML=donor_val;
 document.getElementById("amnt_row"+no).innerHTML=amnt_val;
 document.getElementById("frequency_row"+no).innerHTML=frequency_val;
 document.getElementById("purpose_row"+no).innerHTML=purpose_val;
 document.getElementById("edit_button"+no).style.display="block";
 document.getElementById("save_button"+no).style.display="none";
}

function delete_row(no)
{
 document.getElementById("row"+no+"").outerHTML="";
}

function add_row()
{
 var new_date=document.getElementById("new_date").value;
 var new_donor=document.getElementById("new_donor").value;
 var new_amnt=document.getElementById("new_amnt").value;
 var new_frequency=document.getElementById("new_frequency").value;
 var new_purpose=document.getElementById("new_purpose").value;
	
 var table=document.getElementById("data_table");
 var table_len=(table.rows.length)-1;
 var row = table.insertRow(table_len).outerHTML="<tr id='row"+table_len+"'><td id='date_row"+table_len+"'>"+new_date+"</td><td id='donor_row"+table_len+"'>"+new_donor+"</td><td id='amnt_row"+table_len+"'>"+new_frequency+"</td><td id='amnt_row"+table_len+"'>"+new_frequency+"</td><td id='purpose_row"+table_len+"'>"+new_purpose+"</td><td><input type='button' id='edit_button"+table_len+"' value='Edit' class='edit' onclick='edit_row("+table_len+")'> <input type='button' id='save_button"+table_len+"' value='Save' class='save' onclick='save_row("+table_len+")'> <input type='button' value='Delete' class='delete' onclick='delete_row("+table_len+")'></td></tr>";

 document.getElementById("new_date").value="";
 document.getElementById("new_donor").value="";
 document.getElementById("new_amnt").value="";
 document.getElementById("new_frequency").value="";
 document.getElementById("new_purpose").value="";
 
}

		
	</script> -->
   


</body>
</html>