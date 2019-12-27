<?php
require 'store.php';
// INIT
session_start();
// HTML
require PATH_LIB . "page-top.php"; ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<div id="container"> <div class="page-header clearfix">
                        <h2 class="pull-left">All Questions</h2>
                        <a href="questions.php" class="btn btn-success pull-right">Add New Question</a>
						<a href="truncate.php" style="margin-right: 5px;" class="btn btn-danger pull-right">Delete All</a>
                    </div>
<?php

                    // Include config file
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM questions";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Questions</th>";
                                       
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                $cnt=1;
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $cnt. "</td>";
                                        echo "<td>" . $row['question'] . "</td>";
                                        
                                        echo "<td>";
                                        $cnt=$cnt+1;
                                            echo "<a href='read.php?id=". $row['qid'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='update.php?id=". $row['qid'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='delete.php?id=". $row['qid'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
                    // Close connection
                    mysqli_close($conn);

/*$sql = " SELECT id,question FROM questions";
$question = mysqli_query($conn, $sql);
$rows = array();
?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Question</th>
      
    </tr><?php $cnt=1; ?>
  </thead><?php while($row = mysqli_fetch_array($question,MYSQLI_ASSOC)) {  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $cnt; ?></th>
      <td><?php echo $row['question'];?></td>
     <td><a href="delete.php">delete</a> <?php echo $id =$row['id'][0]; ?></td>
      </tr>
  </tbody><?php $id =$row['id']; 
  $cnt=$cnt+1;}*/ ?>
</table>
</div>
<?php  require PATH_LIB . "page-bottom.php"; ?>
