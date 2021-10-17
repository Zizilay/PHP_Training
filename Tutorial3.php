<form action="" method="post">
    Choose Birth date :
    <input type="date" name="d"><br>
    <input type="submit" name="s" value="Calculate"><br>
</form>
<?php
if(isset($_POST['s']))
{
    $dob = $_POST['d'];
    $today= date ("m-d-Y");
    $age = date_diff(date_create($dob),date_create($today));
    echo 'You are' .$age->format('%y'). 'years old';

}
?>