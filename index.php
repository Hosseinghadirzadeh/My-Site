$name =$subjet= $email = $mess = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = test_inp($_POST['fullName']);
    $email = test_inp($_POST['email']);
    $mess = test_inp($_POST['message']);
    $subjet = test_inp($_POST['subject']);

}


function test_inp($data){
    if($data != '' || $data != null){
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }else{
        echo '<script>alert("adam bash...")</script>';
    }
}

$myMail = 'hosseinghadirzadeh@gmail.com';
$subjet = 'register student';
$name .= ' = name <br>';
$email .= ' = email <hr>';
$name .= $email;
$name .= $mess;
mail($myMail, $subjet, $name);
echo '<script>alert("ok...")</script>';
