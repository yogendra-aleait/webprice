<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Question</title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<?php

// Include config file
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "config.php";

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
// Define variables and initialize with empty values
$question = $option = "";
$question_err = $option_err = $price_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
   // Validate name
    $input_que = trim($_POST["question"]);
    if(empty($input_que)){
        $question_err = "Please enter a question.";
    } else{
        $question = $input_que;
    }
    
    // Validate address address
    $input_opt = $_POST["option"];
    if(empty($input_opt)){
        $option_err = 'Please enter an option.';     
    } else{
        $option = $input_opt;
    }
     $input_price = $_POST["price"];
    if(empty($input_price)){
        $price_err = 'Please enter an price.';     
    } else{
        $price = $input_price;
    }

    // Check input errors before inserting in database
   
        // Prepare an insert statement
        $sql = "UPDATE questions SET question= '$question' WHERE qid= '$id'";
        

$opt_count = count($_POST['option']);

if (mysqli_query($conn, $sql)) {
    $sql1 = " SELECT * FROM options Where qid=$id";
    $opt = mysqli_query($conn, $sql1);

 $dev=0;
 foreach ($opt as $value) {

        $sql2 = "UPDATE options SET opt_name= '".$_POST['option'][$dev]."', opt_price = '".$_POST['price'][$dev]."' WHERE opt_id= '".$value['opt_id']."'";


       
    mysqli_query($conn, $sql2);

$dev++;

 }
$sql1 = "SELECT * FROM options WHERE qid = ?";
    $opt = mysqli_prepare($conn, $sql1);
    mysqli_stmt_bind_param($opt, "i", $param_id);
    $param_id = trim($_GET["id"]);

mysqli_stmt_execute($opt);
$result = mysqli_stmt_get_result($opt);

    echo '<script>
    swal({
    title: "Success",
    text: "Question has been updated",
    icon: "success"
    
    
});
</script>';
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM questions WHERE id = ?";
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
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
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        $sql1 = "SELECT * FROM options WHERE qid = ?";
    $opt = mysqli_prepare($conn, $sql1);
    mysqli_stmt_bind_param($opt, "i", $param_id);
    $param_id = trim($_GET["id"]);

mysqli_stmt_execute($opt);
$result = mysqli_stmt_get_result($opt);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}


?>
 

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Question</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($question_err)) ? 'has-error' : ''; ?>">
                            <label>Question</label>
                            <input type="text" name="question" class="form-control" value="<?php echo $question; ?>">
                            <span class="help-block"><?php echo $question_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($option_err)) ? 'has-error' : ''; ?>">
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
        <td><input type="text" name="option[]" class="form-control" value="<?php echo $row['opt_name'];?>"> </td>
        <td><input type="text" name="price[]" class="form-control" value="<?php   echo $row['opt_price'];?>"> </td>
                     <?php   echo "<br></td>
       
      </tr>";
                    }?>
     
    </tbody>
  </table>
                            <span class="help-block"><?php echo $option_err;?></span>
                        </div>
                       
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>

 