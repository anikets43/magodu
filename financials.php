<?
    $db_host = '45.113.122.73'; // Server Name
    $db_user = 'mybcbqhk_prod'; // Username
    $db_pass = 'Password@01'; // Password
    $db_name = 'mybcbqhk_magodu'; // Database Name

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (!$conn) {
        die('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    $sql = 'SELECT *
                FROM Donations';

    $query = mysqli_query($conn, $sql);

    if (!$query) {
        die('SQL Error: ' . mysqli_error($conn));
    }

    include "common/header.php";
?>
<section id="inner-banner">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Financials</h1>
                </div>
                <div class="col-sm-6">
                    <h6 class="breadcrumb">
                        <a href="index.php">Home</a> / Financials</h6>
                </div>
            </div>
        </div>
    </div>
</section>


<!--income -->
<section id="income">
    <div class="container">
        <div class="row ">
            <h1>Donation so far : Total Amount 50,005 Rupees</h1>
            <table cellspacing=2 cellpadding=10 id="data_table" border=1>
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Mode</th>
                    <th>Purpose</th>
                    <th>EmailID</th>
                    <th>Comments</th>
                </tr>
                </thead>
                <tbody>

                <?php
                $no = 1;
                $total = 0;
                while ($row = mysqli_fetch_array($query)) {
                    $Amount = $row['Amount'] == 0 ? '' : number_format($row['Amount']);
                    echo '<tr>
												<td>' . date('F d, Y', strtotime($row['Date'])) . '</td>
												<td>' . $row['Name'] . '</td>
												<td>' . $Amount . '</td>
												<td>' . $row['Mode'] . '</td>
												<td>' . $row['Purpose'] . '</td>
												<td>' . $row['EmailID'] . '</td>
												<td>' . $row['Comments'] . '</td>
											</tr>';
                    $total += $row['Amount'];
                    $no++;
                } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php
include "common/donation.php";
include "common/footer.php";
?>


	