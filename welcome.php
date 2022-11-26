<html>
    <body>
        Welcome <?php echo $_POST["nama"];?><br>
        Your Email Addres is: <?php echo $_POST["email"];

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="mydb";
    $nama=$_POST["nama"];
    $email=$_POST["email"];
    $saran=$_POST["saran"];
    
    //Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //Check connection
    if ($conn->connect_error) {
        die("Connection failed:".$conn->connect_error);
    }
    
    $sql = "INSERT INTO myguests (nama, email, saran)
    VALUES ('$nama', '$email', '$saran');";
    
    if($conn->query($sql) === TRUE){
        echo "New records created succesfully";
    } else {
        echo "Error: ". $sql . "<br>" . $conn->error;
    }
    
    $conn = new mysqli ($servername, $username, $password, $dbname);
    $sql=  "SELECT nama, email, saran FROM myguests";
    ?>
    </body>
</html>