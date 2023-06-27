<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

    function fetchCustomerDetail($mobile, $pdo, $token){
        $ch = curl_init();
        $customer_details_url = 'http://102.216.128.75:9090/customer-account-details/api/v1/customer-details';
    
        // $accountNo = '06630381010001142'; // Test_Phone_number: 07037415745; test_accountNo: 06630381010001142
        // 08134943416

        $payload = json_encode([
            'accountNo' => $mobile,
        ]);
    
        $headers = [
            'Content-type: application/json; charset=utf-8',
            'Accept-language: en',
            'Authorization: Bearer '.$token
        ];
    
        curl_setopt_array($ch, [
            CURLOPT_URL => $customer_details_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POSTFIELDS => $payload
        ]);
    
        $data = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($data, false);
        // var_dump($response);
        // die;

        if($response->status !== 'Failed'){
            if((!empty($response->fullName) || $response->fullName !== null) && (!empty($response->mobileNumber) || $response->mobileNumber !== null)){
                $_string = '12345\67890/abcdefg/hijklm/nopqr\stuv/wxyz';
                $string_sub = substr($_string, 0, 36);
                $shuffle_str = str_shuffle($string_sub);
                $id = preg_replace("/[^\w]+/", "-", $shuffle_str);
                // echo strtolower($id);

                $statement = $pdo->prepare("INSERT INTO `Accounts` (id, name, phone_office) VALUES (:id, :name, :phone_office) ");
                $statement->execute([
                    'id' => $id,
                    'name' => $response->fullName,
                    'phone_office' => $response->mobileNumber
                ]);

                header("Location: http://localhost/psb/index.php?module=Accounts&action=DetailView&record=".$id);
                
            }else{
                header("Location: http://localhost/psb/index.php?module=Accounts&action=EditView");
            }

        }else{
            header("Location: http://localhost/psb/index.php?module=Accounts&action=EditView&phone_office=".$mobile);
        }
        
    }


    function generateAuthToken($mobile, $pdo){

        $ch = curl_init();

        $login_url = 'http://102.216.128.75:9090/customer-account-details/api/v1/login';
        $username = 'testuser';
        $password = 'super_admin';

        $payload = json_encode([
            'username' => $username, 
            'password' => $password
        ]);

        $headers = [
            'Content-type: application/json; charset=utf-8',
            'Accept-language: en',
        ];

        curl_setopt_array($ch, [
            CURLOPT_URL => $login_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POSTFIELDS => $payload,
            // CURLOPT_HEADER => true

        ]);

        $data = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($data, false);
        // var_dump($response->jwttoken);

        $write_to_file = file_put_contents('./token.txt', $response->jwttoken);
        if($write_to_file){
        return fetchCustomerDetail($mobile, $pdo, $response->jwttoken);
        }else{
            var_dump('Token auto-generating failed.');
        }

    }


    // $mobile = "0".$_REQUEST['phone'];
    $mobile = $_REQUEST['ANI'];
    // $mobile = substr($mobile, 1); 
    // $mobile = $mobile; 
try{ 
    $pdo = new PDO("mysql:host=localhost; 
                    dbname=db_psb", "root", ""); 
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
        generateAuthToken($mobile, $pdo);
    }

} catch(PDOException $e){ 
    die("ERROR: Could not able to execute $sql. "  
                                   . $e->getMessage()); 
} 
unset($pdo); 
?> 

