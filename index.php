<?php
    require ('./inc/retrieve.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <form class="container mb-5" action="./inc/create.php" method="post">
        <h3>Create User</h3>
        <input type="text" name="first_name" placeholder="Enter first name" required>
        <input type="text" name="last_name" placeholder="Enter last name" required>
        <input type="email" name="email" placeholder="Enter email" required>
        <input type="password" name="password" placeholder="Enter password" required>
        <select name="gender" id="">
            <option value="">Select gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <select name="user_role" id="">
            <option value="">Select user role</option>
            <option value="Admin">Admin</option>
            <option value="User">User</option>
        </select>
        <input type="submit" name="create" value="Create">
    </form>
    <table class="table container w-50">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>User Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while ($row = mysqli_fetch_array($sql_retrieve)) {
            ?>
                <tr>
                    <td><?php echo $row['first_name']?></td>
                    <td><?php echo $row['last_name']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['gender']?></td>
                    <td><?php echo $row['user_role']?></td>
                    <td>
                        <form action="./inc/update.php" method="post">
                            <input type="submit" class="btn btn-success" name="update" value="Update">
                            <input type="hidden" name="id" value="<?php echo $row['id']?>">
                        </form>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            <?php 
            }
        ?>
        </tbody>
    </table>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>