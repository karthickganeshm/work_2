<?php
include "Includes/header.php";
if (isset($_POST['loginbtn'])) {
    // Check if the usertype is selected
    if ($_POST['usertype'] !== 'select') {
        // Prepare the SQL statement
        $stmt = $pdo->prepare("INSERT INTO users (user_type, name, username, password) VALUES(?,?,?,?)");
        
        // Bind parameters
        $stmt->bindParam(1, $_POST['usertype']);
        $stmt->bindParam(2, $_POST['name']);
        $stmt->bindParam(3, $_POST['username']);
        $stmt->bindParam(4, $_POST['password']);
        
        // Execute the statement
        $stmt->execute();
        
        // Check if the insertion was successful
        if ($stmt->rowCount() > 0) {
            ?>
            <script>
                alert("User registered successfully!");
            </script>
            <?php
        } else {
            echo "Error registering user.";
        }
    } else {
        echo "Please select a user type.";
    }
}
?>

    <main>
        <div class="content container d-flex justify-content-center">
            <div class="card p-3 mt-5 bg-dark d-flex">
                <h1 class="text-white" >Register</h1>
                <form action="index.php?page=register" method="post">
                    <div class="form-group">
                        <label for="usertype" class="text-white">User</label>
                        <select name="usertype" id="usertype" class="form-control">
                            <option value="select" id="opt1">--Select any one--</option>
                            <option value="user1" id="opt1">User 1</option>
                            <option value="user2" id="opt2">User 2</option>
                            <option value="user3" id="opt3">User 3</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="name" class="text-white">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="username" class="text-white">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password" class="text-white">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="password" class="text-white"> Confirm Password</label>
                        <input type="password" name="conpassword" id="conpassword" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" value="Login" name="loginbtn" id="loginbtn" class="btn btn-success">
                    </div>
                    <br>
                    <div class="form-group">
                        <a href="index.php?page=login" class="option">Already have account</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
<?php
include "Includes/footer.php"
?>
    