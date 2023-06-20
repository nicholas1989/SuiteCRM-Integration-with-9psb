<?php
    // $mobile = "0".$_REQUEST['phone'];

    $mobile = $_REQUEST['ANI'];
    // $mobile = substr($mobile, 1); 
    // $mobile = $mobile; 
try{ 
    $pdo = new PDO("mysql:host=localhost; 
                    dbname=db_psb", "root", "Password123"); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE,  
                        PDO::ERRMODE_EXCEPTION); 
} catch(PDOException $e){ 
    die("ERROR: Could not connect. "  
                    . $e->getMessage()); 
} 
  
try{ 

        $res = $pdo->prepare("SELECT id FROM accounts WHERE phone_office= :mobile LIMIT 1");
        $res->bindParam(':mobile', $mobile);
        $res->execute(); 

        if ($res->rowCount() > 0) {
            $row = $res->fetch();
    //    var_dump($row);die();
            header("Location: http://localhost/psb/index.php?module=Accounts&action=DetailView&record=".$row['id']);
            unset($res); 
    }else{
            header("Location: http://localhost/psb/index.php?module=Accounts&action=EditView&phone_office=".$mobile);
    }

} catch(PDOException $e){ 
    die("ERROR: Could not able to execute $sql. "  
                                   . $e->getMessage()); 
} 
unset($pdo); 
?> 

