<DOCTYPE html>
    <html>
        
        <body>
            <h1><center>Done</h1>

            <?php
            
            $server="localhost:3306";
            $user="root";
            $pwd="";
            $database="portfolio";
            $conn=new mysqli($server,$user,$pwd,$database);
            if ($conn)
            {
                echo "<body style='background-color:pink'>";
                echo "Successfully send your message";
            }
            
                //echo "Name";
                $name=$_POST["name"];
                //echo $name; 
    
                //echo "E-mail";
                $email=$_POST["email"];
                //echo $email;
    
                //echo "Message";
                $message=$_POST["message"];
                //echo $message;

                $insert=mysqli_query($conn,"insert into portfolio_contact values('$name','$email','$message')");
                if ($insert)
                {
                    //echo "record inserted successfully";
                }
            
            ?>
        </body>
    </html>        
