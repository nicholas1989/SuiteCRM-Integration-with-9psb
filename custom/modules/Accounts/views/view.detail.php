<?php

require_once 'modules/Accounts/views/view.detail.php';


class CustomAccountsViewDetail extends AccountsViewDetail
{

    static public function registerNewCustomer($response, $bean){
        var_dump($response);
    }


    static function fetchCustomerDetail($token){


        if(isset($_GET['record']) || isset($_GET['ANI'])){

           if(!empty($_GET['record'])){
                $userId = $_GET['record'];

                // var_dump($userId);

                $bean = BeanFactory::getBean('Accounts', $userId);


                $phone_number = $bean->phone_office;

                $ch = curl_init();
                $customer_details_url = 'http://102.216.128.75:9090/customer-account-details/api/v1/customer-details';
            
                // $accountNo = '06630381010001142'; // Test_Phone_number: 07037415745; test_accountNo: 06630381010001142
            
                $payload = json_encode([
                    'accountNo' => $phone_number,
                ]);
            
                $headers = [
                    'Content-type: application/json; charset=utf-8',
                    'Accept-language: en',
                    'Authorization: Bearer '.$token
                ];
            
                // var_dump($headers);
                // exit;
            
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


                self::registerNewCustomer($response, $bean);
            
                return $response;

           }else if($_GET['ANI']){
                $userId = $_GET['ANI'];
                $bean = BeanFactory::getBean('Accounts', $userId);
                $phone_number = $bean->phone_office;


                $ch = curl_init();
                $customer_details_url = 'http://102.216.128.75:9090/customer-account-details/api/v1/customer-details';
            
                // $accountNo = '06630381010001142'; // Test_Phone_number: 07037415745; test_accountNo: 06630381010001142
            
                $payload = json_encode([
                    'accountNo' => $phone_number,
                ]);
            
                $headers = [
                    'Content-type: application/json; charset=utf-8',
                    'Accept-language: en',
                    'Authorization: Bearer '.$token
                ];
            
                // var_dump($headers);
                // exit;
            
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
            
                return $response;
           }else{
            echo 'Empty params provided.';
           }

        }else{
            echo 'No information about current customer.';
        }
    
    }


    static function generateAuthToken(){

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
           return self::fetchCustomerDetail($response->jwttoken);
        }else{
            var_dump('Token auto-generating failed.');
        }
    
    }

    public function display()
    {
        parent::display();


        $customer = self::generateAuthToken();
        $template = '';
        // var_dump($customer->lastFiveTransactions);
        var_dump($customer);

      
        $template .= '
            <div class="custom-card-container">
            <div class="custom-card-header">
                <h3>Customer Account Info</h3>
            </div>
        ';

        if($customer->status !== 'Failed'){

            $template .='
            <div class="custom-row">
                <div class="custom-inner-card-container">
                    <div class="custom-inner-row">
                        <label>Full Name: </label><p class="custom-paragraph">'.$customer->fullName.'</p>
                    </div>
                    <div class="custom-inner-row">
                        <label>Mobile Number: </label><p class="custom-paragraph">'.$customer->mobileNumber.'</p>
                    </div>
                </div>
                <div class="custom-inner-card-container">
                    <div class="custom-inner-row">
                        <label>Account Number: </label> <p class="custom-paragraph">'.$customer->customerAccountNumber.'</p>
                    </div>
                    <div class="custom-inner-row">
                        <label>D.O.B: </label><p class="custom-paragraph">'.$customer->dateOfBirth.'</p>
                    </div>
                </div>
            </div>
            <div class="custom-row">
                <div class="custom-inner-card-container">
                    <div class="custom-inner-row">
                        <label>BVN: </label><p class="custom-paragraph">'.$customer->bvn.'</p>
                    </div>
                    <div class="custom-inner-row">
                        <label>Account Officer: </label><p class="custom-paragraph">'.$customer->accountOfficer.'</p>
                    </div>
                </div>
                <div class="custom-inner-card-container">
                    <div class="custom-inner-row">
                        <label>Email Address: </label> <p class="custom-paragraph">'.$customer->emailAddress.'</p>
                    </div>
                    <div class="custom-inner-row">
                        <label>Account Status: </label><p class="custom-paragraph">'.$customer->accountStatus.'</p>
                    </div>
                </div>
            </div>
            <div class="custom-row">
                <div class="custom-inner-card-container">
                    <div class="custom-inner-row">
                        <label>Residential Address: </label><p class="custom-paragraph">
                            '.$customer->residentialAddress.'.
                        </p>
                    </div>
                </div>
            </div>
            <div class="custom-card-header">
                <h3>Last Five(5) Transactions</h3>
            </div>';
            foreach ($customer->lastFiveTransactions as $transaction) 
            {
                // var_dump($transaction->balance);
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


                <hr style="border-bottom: 1px solid #534d64; width: 100%;"/>
                ';
            }

        }else{
            $template .= '<h3 class="custom-error-text">'.$customer->message.'</h3>';
        }
        $template .= '</div>';
        echo $template;
    }

}


