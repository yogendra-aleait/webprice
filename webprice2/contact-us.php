<style type="text/css">
    form{
        display: none;
    }
</style>
<?php include ('admin/store.php');

include ('questionnaire.php');

if(!empty($_POST["send"])) {
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $content = $_POST["content"];

    $sql="INSERT INTO tblcontact (contact_name, contact_email,content) VALUES ('" . $name. "', '" . $email. "','" .  $content. "')";
mysqli_query($conn,$sql);
    $insert_id = mysqli_insert_id($conn);
$data = "Select * from contact_choice ORDER BY created DESC LIMIT $rowcount";
   $result = mysqli_query($conn,$data);
foreach($result as $key => $value){
    echo $value['contact_id'];
   
    $sql2="UPDATE contact_choice SET contact_id = '" .$insert_id. "' WHERE id = '" .$value['id']. "'";
    mysqli_query($conn,$sql2);

}
if(!empty($insert_id)) {
       $message = "Your contact information is saved successfully.";
       $type = "success";
    }
}
require_once "contact-view.php";

unset($_POST);
?>