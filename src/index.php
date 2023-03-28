<!-- CUSTOM ERROR OPTINAL TASK -->
<h1>Custom error</h1>
<form action="#" method="get">
    <input type="text" name="custom" placeholder="Input Text">
    <input type="submit" value="Sumbit" name="submit_task1">
</form>
<?php
    $custom_err = $_GET["custom"];
    function error_fun($error_no,$error_str){
        echo "<b>Error:</b> $error_no $error_str";
    }
    if ($_GET["submit_task1"]){
        set_error_handler("error_fun",E_USER_ERROR);
        if (!$custom_err){
            trigger_error("Empty Input",E_USER_ERROR);
        }
    }
?>
<hr>

<!-- LOG ERROR OPTINAL TASK -->
<h1>Log Errors</h1>
<form action="#" method="get">
    <input type="text" name="name" placeholder="Name">
    <input type="number" name="password" placeholder="Password">
    <input type="submit" value="Sumbit" name="submit_task2">
</form>
<?php
$name = $_GET["name"];
$password = $_GET["password"];
if ($_GET["submit_task2"]){
    if ($name=="admin" && $password==12345){
        echo "Login Successfully";
    }
    else{
        error_log("Name: $name Password: $password \n", 3, "./error.log");
        echo "Invalid Name or Password";
    }
}
?>
<hr>

<!-- ERROR HANDELER OPTINAL TASK -->
<h1>Error Handler</h1>
<form action="#" method="get">
    <input type="number" name="err_value" placeholder="Input Number">
    <input type="submit" value="Submit" name="submit_task3">
</form>
<?php
function all_error($value){
    switch ($value) {
        case E_ERROR:
        case E_USER_ERROR:
            echo "Error";
            break;
        
        case E_WARNING:
        case E_USER_WARNING:
            echo "Warning";
            break;

        case E_NOTICE:
        case E_USER_NOTICE:
            echo "Notice";
            break;
        default:
            echo "Successful Submission";
            break;
    }
}
if ($_GET["submit_task3"]){
    $error_variable = $_GET["err_value"];
    all_error($error_variable);
}

?>
<hr>

<h1></h1>