
     <?php
error_reporting(E_ERROR | E_PARSE);
header('Content-Type:text/plain');


        $num = $_POST["number"];
        $pass0 = $_POST["password"];
        $pass1 = $_POST["passwordconfirmed"];
        $boolean=preg_match('/[0-9]{8}/', $num);
        
        if ($boolean==false)
        {
            die("your phone number should be a number of 8 characters");
        }
        else if(strcmp($pass1,$pass0)!=0 )
        {
            die("the password doesn't match");
        }
        else
        {

            $db_host = "localhost";
            $db_user="root";
            $dbt_pass=null;
            $db_name="project";
            $mysqli= new mysqli($db_host,$db_user,$dbt_pass,$db_name);
            
            if (mysqli_connect_errno()){
                printf("connect failed : %s \n" , mysqli_connect_error());
                exit();
            }

        if (isset($_POST["email"]) && isset($_POST["password"]))
        {   
                $name1= $_POST["username"];
                $email1 = $_POST["email"];
                $password1 = $_POST["password"];
                $number1 = $_POST["number"];

                session_start();
                $_SESSION["signedin"]=$email1;
                
                $stmt0= $mysqli -> prepare("SELECT phone_number FROM info WHERE phone_number = ?");
                $stmt0-> bind_param ("s", $number1); 
                $stmt0-> execute();
                $stmt0-> store_result();
                $stmt0-> bind_result($numb);
                $count0= $stmt0->num_rows; 

                if($count0 != 0)
                {
                    die("this phone number already exists");
                }
        
                $stmt= $mysqli -> prepare("SELECT email, password FROM users WHERE email = ? AND password = ? AND name = ?");
                $stmt -> bind_param ("sss", $email1, hash('md5', $password1), $name1); 
                $stmt -> execute();
                $stmt -> store_result();
                $stmt -> bind_result($email, $password);
                $count= $stmt->num_rows;  

            if ($count !=0 )
            {
                die("this user already exists");
            }
            else if($count == 0)
            {
                $stmt2 = $mysqli->prepare("INSERT INTO users (name, email, password) VALUES(?, ?, ?)");
                $stmt2->bind_param("sss", $name1, $email1, hash('md5', $password1));
                $stmt2->execute();
                $stmt3= $mysqli -> prepare("INSERT INTO info (phone_number, email) VALUES(?, ?)");
                $stmt3 -> bind_param ("ss", $number1, $email1); #i:integer , s : string , b:boolean , d:double
                $stmt3 -> execute();
                
                die("successfully signed up");
            }
        
        }


        }
        
        
        ?>
