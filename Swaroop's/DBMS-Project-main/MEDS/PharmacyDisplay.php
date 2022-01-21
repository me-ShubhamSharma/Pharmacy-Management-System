<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- TARSH and EDIT icon pack -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/PharmacyDisplay.css">
</head>

<body>
    <section>
        <h1>PHARMACIES </h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>NAME</th>
                        <th>LOCATION</th>
                        <th>EMAIL</th>
                        <th>PHONE</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <?php

                    include 'connection.php';



                    //Query to select the Entire table [MAIN QUERY]
                    $selectquery = " select  *  from  pharmacy ";



                    //Executing the QUERY
                    $query = mysqli_query($con, $selectquery);

                    //Iterating through Entire table using while loop
                    //Using MYSQLI Fetch fuction to show that table
                    while ($res = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td> <?php echo $res['P_NAME'];  ?></td>
                            <td> <?php echo $res['P_LOCATION'];  ?></td>
                            <td> <?php echo $res['email'];   ?></td>
                            <td> <?php echo $res['PHONE'];  ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

</body>

</html>