<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="tut1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="left">
        <h1>Welcome</h1>
        <p>Hello Doc, Manage your Appointments</p>

    </div>


    </div>
    <div class="container">
        <div class="title">SIGN UP</div>
        <div class="content">
            <form action="tut1.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" name="D_NAME" placeholder="Enter your name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Clinic</span>
                        <input type="text" name="CLINIC" placeholder="Enter your Clinic" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Gender</span>
                        <input type="text" name="GENDER" placeholder="Enter your Gender" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" name="PHONE" placeholder="Enter your number" required>
                    </div>
                </div>

                <div class="button">
                    <input type="submit" name="submit" value="Sign Up">
                </div>
            </form>
        </div>
    </div>

</body>

</html>

<?php
include '../doctor/connection.php';
if (isset($_POST['submit'])) {
    $dname = $_POST['D_NAME'];
    $clinic = $_POST['CLINIC'];
    $gender = $_POST['GENDER'];
    $phone = $_POST['PHONE'];

    $inserting = "insert into doctors (dname,clinic, gender, phone) values('$dname', '$clinic','$gender', '$phone')";

    $res = mysqli_query($con, $inserting);
    if ($res) {
        // echo "Connection Succefull";
?>
        <script>
            alert("Inserted successfuly");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("not inserted");
        </script>
<?php
    }
}
?>