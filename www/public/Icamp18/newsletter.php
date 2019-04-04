<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off





try {
            $db_host = 'localhost';  //  hostname
            $db = 'icamp_2018'; //database name
            $user_pw = 'db@2018'; 
            $db_user = 'root';

            $con = new PDO('mysql:host='.$db_host.'; dbname='.$db, $db_user, $user_pw);  
            $con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            $con->exec("SET CHARACTER SET utf8");  //  return all sql requests as UTF-8               
        }
        catch (PDOException $err) {  
            $result = array( 'response' => 'error', 'message'=> 'harmless error message if the connection fails' );
            echo json_encode($result );
            $err->getMessage() . "<br/>";
            file_put_contents('PDOErrors.txt',$err, FILE_APPEND);  // write some details to an error-log outside public_html  
            die();  //  terminate connection
        }






        try {

            $query = "SELECT * FROM Newsletter WHERE Email = :Email";
            $stmt2 = $con->prepare($query);
            $stmt2->bindParam(':Email', $_POST['subscribeEmail'], PDO::PARAM_STR); 
            $stmt2->execute();
            if( $stmt2->rowCount() > 0 ) {
                $result = array( 'response' => 'error', 'message'=> 'This email already exists!' );
                echo json_encode($result );
                die();
            }

            else{
               $sql = "INSERT Newsletter SET Email = :Email";
            $stmt = $con->prepare($sql);

            $stmt->bindParam(':Email', $_POST['subscribeEmail'], PDO::PARAM_STR);   

            $stmt->execute();

            $result = array( 'response' => 'success', 'message'=>'<strong>Thank You!</strong>&nbsp; Your email has been added.' );
             echo json_encode($result ); 
         }
            

        }



        catch(PDOException $e)
        {
            $result = array( 'response' => 'error', 'message'=>$e->getMessage() );
            echo json_encode($result );
            die();
        }



        ?>