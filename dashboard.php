<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/admin_dashboard.css">
    <title>MakeUp - Admin Dashboard</title>
</head>
<body style="background-color: floralwhite">
    
    <section id="mainsection">
    <h1> ADMIN DASHBOARD, WELCOME <span style="color: purple"><?php echo strtoupper($_SESSION['userUid'])?></span> </h1>
        <div class="add-room-form">
        <h1> ADD PRODUCTS TO PAGE </h1>
        <a href="index.php" style="color: black"><img src="image/Gallery4.jpg" width="200"></a>
            <form method="post" action="" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">
                <div>
                    <input type="file" name="image">
                </div>
                <div>
                    <textarea name="text" cols="40" rows="4" placeholder="What's the name of the product?"> </textarea>
                </div>
                <div>
                    <label> Price per night </label>
                    <input type="number" name="product-price" style="width: 50px" value="1">
                </div>
                <div>
                    <input type="submit" name="upload-product" value="Uploade Image">
                </div>

            </form>
        </div>
    </section>
    <div class="user-table">
    <h1> Insert, edit or delete users </h1>
    <table class="content-table">
            <thead>
                <tr>
                    <th> ID </th>
                    <th> Username </th>
                    <th> Email </th>
                    <th> Usergroup </th>
                </tr>
            </thead>
            <tbody>
            <?php 

                $db = mysqli_connect("localhost", "root", "", "MakeUp_db");
                $sql = "SELECT * FROM users";
                $result = mysqli_query($db, $sql);
                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>
                            <td>" . $row['idUsers'] . "</td>
                            <td>" . $row['uidUsers'] . "</td>
                            <td>" . $row['emailUsers'] . "</td>
                            <td>" . $row['usergroup'] . "</td>";
                    echo "</tr>";
                };
            ?>
            </tbody>
        </table>
        <div class="insert-update">
            <form action="includes/insert.php" method="POST">
                <h1> Insert user </h1>
                <label>Username </label> <input type="text" name="insert-username">
                <label>Email </label> <input type="email" name="insert-email">
                <label>Password </label> <input type="password" name="insert-password">
                <label>Usergroup </label> <input type="number" max="2" min="0" name="insert-usergroup">
                <input type="submit" name="insert-submit" value="Insert user">
            </form>
            <form action="includes/update.php" method="POST">
                <h1> Edit user </h1>
                <label>Select Users ID to edit </label> <input type="number" name="update-id">
                <label>New username </label> <input type="text" name="update-username">
                <label>New email </label> <input type="email" name="update-email">
                <label>New usergroup </label> <input type="number" max="2" min="0" name="update-usergroup">
                <input type="submit" name="update-submit" value="Edit user">
            </form>
            <form action="includes/delete.php" method="POST">
                <h1> Delete user </h1>
                <label>User ID </label> <input type="number" name="delete-id">
                <input type="submit" name="delete-submit" value="Delete user">
            </form>
        </div>
        </div>
        
    <?php require 'includes/footer.php' ?>

</body>
</html>