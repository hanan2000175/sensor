<html>
    <body>
            <h1>The Result is :  </h1>
                <?php
                    $SERVER ="localhost";
                    $username="root";
                    $password="";
                    $dbname="testdb";

                    $conn=mysqli_connect($SERVER,$username,$password,$dbname);
                   if(empty($_GET['value']))
                   {
                    echo " not submitted";
                   }
                   else
                   {
                    $value=$_GET['value'];
                    echo "the value is:" . $_GET['value'];
                    echo "<br> successfully submitted";
                   }

                   $query= "insert into sensorValues values($value)" ;
                   $run=mysqli_query($conn,$query)
                ?>
            </form>

    </body>
</html>
