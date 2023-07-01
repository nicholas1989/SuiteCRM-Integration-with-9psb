<?php

require_once 'modules/Accounts/views/view.detail.php';

class CustomAccountsViewDetail extends AccountsViewDetail
{

    static function fetchCustomerDetail($token){


        if(isset($_GET['record']) && !empty($_GET['record'])){
            $userId = $_GET['record'];
            
            $queryPayload = ['id' => $userId];
            $accountsBean = BeanFactory::getBean('Accounts');
            $getCustomerPhoneNumber = $accountsBean->retrieve_by_string_fields($queryPayload);
            
            // var_dump($getCustomerPhoneNumber->phone_office);

            $ch = curl_init();
            $customerDetailsUrl = 'http://102.216.128.75:9090/customer-account-details/api/v1/customer-details';
        
            // $accountNo = '06630381010001142'; // Test_Phone_number: 07037415745; test_accountNo: 06630381010001142
            // 08134943416

            $payload = json_encode([
                'accountNo' => $getCustomerPhoneNumber->phone_office,
            ]);
        
            $headers = [
                'Content-type: application/json; charset=utf-8',
                'Accept-language: en',
                'Authorization: Bearer '.$token
            ];
        
            // var_dump($headers);
            // exit;
        
            curl_setopt_array($ch, [
                CURLOPT_URL => $customerDetailsUrl,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_HTTPHEADER => $headers,
                CURLOPT_POSTFIELDS => $payload
            ]);
        
            $data = curl_exec($ch);
            $error = curl_error($ch);
            curl_close($ch);
        
            if ($error) {
                throw new Exception('Failed to fetch customer details: ' . $error);
            }

            $response = json_decode($data, false);
            

            if (!$response) {
                throw new Exception('Invalid response while fetching customer details');
            }

            if ($response->status === 'Failed') {
                throw new Exception('Error fetching customer details: ' . $response->message);
            }

            return $response;

        }else{
            throw new Exception('Empty params provided.');
        }
    
    }

    static function generateAuthToken(){

        $ch = curl_init();
    
        $loginUrl = 'http://102.216.128.75:9090/customer-account-details/api/v1/login';
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
            CURLOPT_URL => $loginUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_POSTFIELDS => $payload,
            // CURLOPT_HEADER => true
    
        ]);
    
        $data = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);

        if ($error) {
            throw new Exception('Token auto-generating failed: ' . $error);
        }
    
        $response = json_decode($data, true);
        //var_dump($response['jwttoken']);

        if (!$response) {
            throw new Exception('Invalid response while generating authentication token.');
        }

        if (!isset($response['jwttoken'])) {
            throw new Exception('Invalid authentication token received.');
        }
    
        $write_to_file = file_put_contents('./token.txt', $response['jwttoken']);
        if(!$write_to_file){
            throw new Exception('Token auto-generating failed: Unable to write token to file');
        }

        return self::fetchCustomerDetail($response['jwttoken']);
    }

    // Check if the token has expired
    static function isTokenExpired($tokenData) {
        if (!isset($tokenData['expiresin']) || empty($tokenData['expiresin'])) {
            return true; // Token data is incomplete, consider it expired
        }

        $expiryTimestamp = strtotime($tokenData['expiresin']);
        $currentTimestamp = time();
        return ($currentTimestamp  > $expiryTimestamp);
    }


    public function display()
    {
        //parent::display();

        try {
            $tokenFilePath = './token.txt';
            $customerDetails = null;
            if (file_exists($tokenFilePath)) {
                // Get the token data from the file
                $tokenData = json_decode(file_get_contents($tokenFilePath), true);

                if (!empty($tokenData) && isset($tokenData['jwttoken']) && !self::isTokenExpired($tokenData)) {
                    $customerDetails = self::fetchCustomerDetail($tokenData['jwttoken']);
                    
                } else {
                    // Token is expired or invalid, generate a new token and fetch customer details
                    $customerDetails =  self::generateAuthToken();

                    // Write the new token to the file
                    $write_to_file = file_put_contents($tokenFilePath, json_encode(['jwttoken' => $customerDetails->token]));
                    if (!$write_to_file) {
                        throw new Exception('Failed to write token to file.');
                    }
                }
            } else {
                // Token file does not exist, generate a new token and fetch customer details 
                $customerDetails = self::generateAuthToken();

                // Write the new token to the file
                $write_to_file = file_put_contents($tokenFilePath, json_encode(['jwttoken' => $customerDetails->token]));
                if (!$write_to_file) {
                    throw new Exception('Failed to write token to file.');
                }
            }
            $template = '';
            $error = '';
            // var_dump($customer->lastFiveTransactions);
            // var_dump($customer);
        
            $template .='<div class="custom-card-container">
                            <div class="custom-card-header">
                                <h3>Customer Account Info</h3>
                        </div>';

            if($customerDetails->status !== 'Failed'){
                $template .='
                <div class="custom-row">
                    <div class="custom-inner-card-container">
                        <div class="custom-inner-row">
                            <label>Full Name: </label><p class="custom-paragraph">'.$customerDetails->fullName.'</p>
                        </div>
                        <div class="custom-inner-row">
                            <label>Mobile Number: </label><p class="custom-paragraph">'.$customerDetails->mobileNumber.'</p>
                        </div>
                    </div>
                    <div class="custom-inner-card-container">
                        <div class="custom-inner-row">
                            <label>Account Number: </label> <p class="custom-paragraph">'.$customerDetails->customerAccountNumber.'</p>
                        </div>
                        <div class="custom-inner-row">
                            <label>D.O.B: </label><p class="custom-paragraph">'.$customerDetails->dateOfBirth.'</p>
                        </div>
                    </div>
                </div>
                <div class="custom-row">
                    <div class="custom-inner-card-container">
                        <div class="custom-inner-row">
                            <label>BVN: </label><p class="custom-paragraph">'.$customerDetails->bvn.'</p>
                        </div>
                        <div class="custom-inner-row">
                            <label>Account Officer: </label><p class="custom-paragraph">'.$customerDetails->accountOfficer.'</p>
                        </div>
                    </div>
                    <div class="custom-inner-card-container">
                        <div class="custom-inner-row">
                            <label>Email Address: </label> <p class="custom-paragraph">'.$customerDetails->emailAddress.'</p>
                        </div>
                        <div class="custom-inner-row">
                            <label>Account Status: </label><p class="custom-paragraph">'.$customerDetails->accountStatus.'</p>
                        </div>
                    </div>
                </div>
                <div class="custom-row">
                    <div class="custom-inner-card-container">
                        <div class="custom-inner-row">
                            <label>Residential Address: </label><p class="custom-paragraph">
                                '.$customerDetails->residentialAddress.'.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="custom-card-header">
                    <h3>Last Five(5) Transactions</h3>
                </div>';
                foreach ($customerDetails->lastFiveTransactions as $transaction) 
                {
                    $template .='
                    <div class="custom-row">
                        <div class="custom-inner-card-container">
                            <div class="custom-inner-row">
                                <label>Balance: </label><p class="custom-paragraph">'.$transaction->balance.'</p>
                            </div>
                            <div class="custom-inner-row">
                                <label>Reversal ReferenceNo: </label><p class="custom-paragraph">'.$transaction->reversalReferenceNo.'</p>
                            </div>
                        </div>
                        <div class="custom-inner-card-container">
                            <div class="custom-inner-row">
                                <label>UniqueIdentifier:</label> <p class="custom-paragraph">'.$transaction->uniqueIdentifier.'</p>
                            </div>
                            <div class="custom-inner-row">
                                <label>Transaction Date: </label><p class="custom-paragraph">'.$transaction->transactionDateString.'</p>
                            </div>
                        </div>
                    </div>


                    <div class="custom-row">
                        <div class="custom-inner-card-container">
                            <div class="custom-inner-row">
                                <label>Posting Type: </label><p class="custom-paragraph">'.$transaction->postingType.'</p>
                            </div>
                            <div class="custom-inner-row">
                                <label>Debit: </label><p class="custom-paragraph">'.$transaction->debit.'</p>
                            </div>
                        </div>
                        <div class="custom-inner-card-container">
                            <div class="custom-inner-row">
                                <label>Credit:</label> <p class="custom-paragraph">'.$transaction->credit.'</p>
                            </div>
                            <div class="custom-inner-row">
                                <label>InstrumentNo: </label><p class="custom-paragraph">'.$transaction->instrumentNo.'</p>
                            </div>
                        </div>
                    </div>


                    <div class="custom-row">
                        <div class="custom-inner-card-container">
                            <div class="custom-inner-row">
                                <label>Record Type: </label><p class="custom-paragraph">'.$transaction->recordType.'</p>
                            </div>
                            <div class="custom-inner-row">
                                <label>Current Date: </label><p class="custom-paragraph">'.$transaction->currentDate.'</p>
                            </div>
                        </div>
                        <div class="custom-inner-card-container">
                            <div class="custom-inner-row">
                                <label>Account Number:</label> <p class="custom-paragraph">'.$transaction->accountNumber.'</p>
                            </div>
                            <div class="custom-inner-row">
                                <label>ReferenceID: </label><p class="custom-paragraph">'.$transaction->referenceID.'</p>
                            </div>
                        </div>
                    </div>


                    <div class="custom-row">
                        <div class="custom-inner-card-container">
                            <div class="custom-inner-row">
                                <label>Amount: </label><p class="custom-paragraph">'.$transaction->amount.'</p>
                            </div>
                            <div class="custom-inner-row">
                                <label>Narration: </label><p class="custom-paragraph">'.$transaction->narration.'</p>
                            </div>
                        </div>
                        <div class="custom-inner-card-container">
                            <div class="custom-inner-row">
                                <label>Reversed: </label><p class="custom-paragraph">'.$transaction->reversed.'</p>
                            </div>
                            <div class="custom-inner-row">
                                <label>Card Transation: </label><p class="custom-paragraph">'.$transaction->cardTransation.'</p>
                            </div>
                        </div>
                    </div>


                    <hr style="border-bottom: 1px solid #534d64; width: 100%;"/>';
                }

            }else{
                $template .= '<h3 class="custom-error-text">'.$customerDetails->message.'</h3>';
            }

            $template .= '</div>';
            echo $template;
                
        } catch(Exception $e) {
            echo 'An error occured: ' . $e->getMessage();
        }

    }

}


