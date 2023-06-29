<?php
include 'connection.php';
$acctype1 = 'admin';
$acctype2 = 'seller';

//Admin add

if(isset($_POST['adminSignIn'])){
    // Check if the required fields are not empty
    if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['address1']) && !empty($_POST['address2']) && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['zip'])){
        $query = "insert into users values('$_POST[email]', '$_POST[password]', '$_POST[name]', '$_POST[address1]', '$_POST[address2]', '$_POST[city]', '$_POST[state]', '$_POST[zip]', '$acctype1')";
        if(mysqli_query($conn, $query)){
            session_start();
            $_SESSION['success_message'] = "Admin inserted successfully!";
            header("Location: ./index.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

//seller add

if(isset($_POST['sellerSignIn'])){
    // Check if the required fields are not empty
    if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['address1']) && !empty($_POST['address2']) && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['zip'])){
        $query = "insert into users values('$_POST[email]', '$_POST[password]', '$_POST[name]', '$_POST[address1]', '$_POST[address2]', '$_POST[city]', '$_POST[state]', '$_POST[zip]', '$acctype2')";
        if(mysqli_query($conn, $query)){
            session_start();
            $_SESSION['success_message'] = "Seller inserted successfully!";
            header("Location: ./index.php");
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}


//logIn function

if(isset($_POST['logIn'])){
    // Check if the required fields are not empty
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $query = "select * from users where email = '$_POST[email]' and password = '$_POST[password]'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['address1'] = $row['address1'];
            $_SESSION['address2'] = $row['address2'];
            $_SESSION['city'] = $row['city'];
            $_SESSION['state'] = $row['state'];
            $_SESSION['zip'] = $row['zip'];
            $_SESSION['acctype'] = $row['acctype'];
            if($row['acctype'] == 'admin'){
                header("Location: ./admin.php");
                exit();
            } else {
                header("Location: seller.php");
                exit();
            }
        } else {
            session_start();
            $_SESSION['error_message'] = "Invalid email or password!";
            header("Location: index.php");
            exit();
        }
    }
}


?>