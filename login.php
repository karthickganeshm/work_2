<?php
include "Includes/header.php";

if (isset($_POST['loginbtn'])) {
    // Prepare SQL statement to fetch user details based on username
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$_POST['username']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // Verify password
        if ($_POST['password'] == $user['password'] && $_POST['usertype'] == $user['user_type'] ) {
            $_SESSION['id'] = $user['id']; // Store user ID in session
            if ($_POST['usertype'] == 'user1') {
                header('Location:index.php?page=user1');
            }
            else if($_POST['usertype'] == 'user2'){
                header('Location:index.php?page=user2');
            }
            else {
                header('Location:index.php?page=user3');
            }
            exit();
        } else {
            echo '<script>alert("Incorrect password");</script>'; // Inform the user about the incorrect password
        }
    } else {
        echo '<script>alert("User not found");</script>'; // Inform the user if the username is not found
    }
}
?>

    <main>
        <div class="content container d-flex justify-content-center">
            <div class="card p-3 mt-5 bg-dark d-flex">
                <h1 class="text-white" >Login</h1>
                <form action="index.php?page=login" method="post">
                    <div class="form-group">
                        <label for="usertype" class="text-white">User</label>
                        <div class="d-flex">
                        <select name="usertype" id="usertype" class="form-control">
                            <option value="user1" id="opt1">User 1</option>
                            <option value="user2" id="opt2">User 2</option>
                            <option value="user3" id="opt3">User 3</option>
                        </select>

                        </div>
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
                        <input type="submit" value="Login" name="loginbtn" id="loginbtn" class="btn btn-success">
                    </div>
                    <br>
                    <div class="form-group">
                        <a href="" class="option">Forgot Password</a>
                    </div>
                    <br>
                    <div class="form-group">
                        <a href="register.php" class="option">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
<?php
include "Includes/footer.php";
?>
    