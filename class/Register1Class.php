<?php
include('connection.php');

$dataTrue = true;

if (isset($_POST['name'])) {

    if (!preg_match('/^[a-zA-Z ]+$/', $_POST['name']) || empty(trim($_POST['name']))) {
        $dataTrue = false;
        echo "Name is invalid or empty<br>";
    }

    if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $_POST['email']) || empty(trim($_POST['email']))) {
        $dataTrue = false;
        echo "Email is invalid or empty<br>";
    }

    // if (!preg_match('/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/', $_POST['password']) || empty(trim($_POST['password']))) {
        // $dataTrue = false;
        // echo "Password is invalid or empty<br>";
    // }

    if (!preg_match('/^[0-9]{10}$/', $_POST['contact']) || empty(trim($_POST['contact']))) {
        $dataTrue = false;
        echo "Contact is invalid or empty<br>";
    }

    if (!preg_match('/^(Male|Female|Other)$/i', $_POST['gender']) || empty(trim($_POST['gender']))) {
        $dataTrue = false;
        echo "Gender is invalid or empty<br>";
    }

    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $_POST['dob']) || empty(trim($_POST['dob']))) {
        $dataTrue = false;
        echo "DOB is invalid or empty<br>";
    }

    if ($dataTrue) {

        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $selectQuery = mysqli_query($conn,
            "SELECT tb_id FROM tb_bakery WHERE tb_email = '$email'"
        );

        if (mysqli_num_rows($selectQuery) > 0) {
            echo "Email already exists!";
        } else {

            $insertQuery = mysqli_query($conn,
                "INSERT INTO tb_bakery 
                (tb_name, tb_email, tb_password, tb_country, tb_contact, tb_dob, tb_gender, tb_date, tb_time)
                VALUES (
                    '".$_POST['name']."',
                    '".$_POST['email']."',
                    '".$_POST['password']."',
                    '".$_POST['country']."',
                    '".$_POST['contact']."',
                    '".$_POST['dob']."',
                    '".$_POST['gender']."',
                    '".date('Y-m-d')."',
                    '".date('H:i:s')."'
                )"
            );

            if ($insertQuery) {
                header('Location: ../login.php');
                exit;
            } else {
                echo "Server not responding!";
            }
        }
    }

} else {
    echo "No form submitted";
}
?>