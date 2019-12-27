<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require 'store.php';
    
    // Prepare a select statement
    $sql = "SELECT * FROM questions WHERE qid = ?";
    
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
                $question = $row["question"];
               
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
$sql1 = "SELECT * FROM options WHERE qid = ?";
    $opt = mysqli_prepare($conn, $sql1);
    mysqli_stmt_bind_param($opt, "i", $param_id);
    $param_id = trim($_GET["id"]);

mysqli_stmt_execute($opt);
$result = mysqli_stmt_get_result($opt);?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Question</title>
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
                        <h1>View Question</h1>
                    </div>
                    <div class="form-group">
                        <label>Question: <?php echo $row["qid"]; ?></label>
                        <p class="form-control-static"><?php echo $row["question"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Options</label>
                        <table class="table table-striped">
    <thead>
      <tr>
        <th>Option</th>
        <th>Price</th>
       
      </tr>
    </thead>
    <tbody>
      <tr><?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
        <td><?php echo $row["opt_name"]; ?></td>
        <td><?php   echo "<b>Price&nbsp;&nbsp;</b>".$row["opt_price"];
                        echo "<br></td>
       
      </tr>";
                    }?>
     
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