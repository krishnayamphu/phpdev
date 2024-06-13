<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <main>
        <div class="container py-5">
            <div class="">
                <h3>Search Users</h3>
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="search users" oninput="getUsers(this.value)">
                </div>
            </div>
            <table class="table mt-3">
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Created At</th>
                </tr>
                <tbody id="users">
                </tbody>
            </table>
        </div>
    </main>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        function getUsers(user) {
            $.get("allusers.php?username=" + user, function(data, status) {
                // alert("Data: " + data + "\nStatus: " + status);
                document.getElementById("users").innerHTML = data;
            });
        }
        getUsers("");
    </script>

</body>

</html>