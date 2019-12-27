<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require 'store.php';
    
    // Prepare a select statement
    $sql = "SELECT * FROM tblcontact WHERE contact_id = ?";
    
    if($stmt = mysqli_prepare($conn, $sql)){

        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $contact_name = $row["contact_name"];
                $contact_email =$row["contact_email"];
               $contact_content=$row["content"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
    
    // Close statement
    mysqli_stmt_close($stmt);
    

} else{
    // URL doesn't contain id parameter. Redirect to error page
    echo 'error';
    header("location: error.php");
    exit();
}
$sql1 = "SELECT * FROM contact_choice WHERE contact_id = ?";
    $data = mysqli_prepare($conn, $sql1);
    mysqli_stmt_bind_param($data, "i", $param_id);
    $param_id = trim($_GET["id"]);

mysqli_stmt_execute($data);
$result = mysqli_stmt_get_result($data);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Contact</h1>
                    </div>
                    <div class="form-group">
                        <label>Contact Name </label>
                        <p class="form-control-static"><?php echo $contact_name; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Contact Email </label>
                        <p class="form-control-static"><?php echo $contact_email; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Content </label>
                        <p class="form-control-static"><?php echo $contact_content; ?></p>
                    </div>
                    <div class="form-group">
                        
                        <table class="table table-striped">
    <thead>
      <tr>
        <th>Question</th>
        <th>Choice</th>
        <th>Price</th>
       
      </tr>
    </thead>
    <tbody>
      <tr><?php $total=0;
       while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
       $contact_que = $row["question"];
$q_id = $row["qid"];
$contact_choice = $row["choice"];
$opt_price = $row["opt_price"];

$total += $row["opt_price"];


       ?>
        <td><?php echo $contact_que; ?></td>
        <td><?php   echo "<b>&nbsp;&nbsp;</b>".$contact_choice."</td><b>&nbsp;&nbsp;</b></td><td>"."<b>Price&nbsp;&nbsp;</b>".$opt_price;
                        echo "<br></td>

       
      </tr>";
                    }echo "TOTAL = ".$total;?>
     
    </tbody>
  </table>
                        
                      
                    </div>
</div>
                    <p><a href="questions_data.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>