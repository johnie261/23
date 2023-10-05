<?php
if(ISSET($_GET['ordernumber'])){
    
    $inputphone = $_GET['phonenumber'];
    $phonenumber = "254" . substr($inputphone, 1);

    $amount = $_GET['amount'];
    $intNum = round($amount,0);//intval($amount);
    $ordernumber = $_GET['ordernumber'];


   $consumerkey = 'rsHARPaMNvLK7OEhj1J5mmLvwQcSV7Xy';
    $consumersecret = '1NXpfFhlmBtAAsX0';
    $headers = ['Content-type: application/json; charset=utf-8'];
    
    $access_token_url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
    
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $access_token_url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_HEADER, FALSE);
    curl_setopt($curl, CURLOPT_USERPWD, $consumerkey.':'.$consumersecret);
    $result = curl_exec($curl);
    $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    $result = json_decode($result);
    $access_token = $result->access_token;
    curl_close($curl);
   
    
  
    $initiate_url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
    
    $BusinessShortCode = '4100187';
    $Timestamp = date('YmdHis');
    $PartyA = $phonenumber;
 
    $CallBackURL =  'https://acumatica.futurekenya.com/StkPos/callback_url.php?ordernumber='.$ordernumber;
    $AccountReference = $ordernumber;
    $TransactionDesc = 'Lipa Na Mpesa Online';
    $Amount = $intNum;
    $Passkey = '5275035b66cc261b7c157783f8b9b0aa40c0f683ab61d187381cb8c6a4d78fe4';
    $Password = base64_encode($BusinessShortCode.$Passkey.$Timestamp);


   
   $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $initiate_url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$access_token)); //setting custom header
    $curl_post_data = array(
   
    'BusinessShortCode' => $BusinessShortCode,
    'Password' => $Password,
    'Timestamp' => $Timestamp,
    'TransactionType' => 'CustomerPayBillOnline',
    'Amount' => $Amount,
    'PartyA' => $PartyA,
    'PartyB' => $BusinessShortCode,
    'PhoneNumber' => $PartyA,
    'CallBackURL' => $CallBackURL,
    'AccountReference' => $AccountReference,
    'TransactionDesc' => $TransactionDesc
    );
    
    $data_string = json_encode($curl_post_data);
    
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    
    $curl_response = curl_exec($curl);
    print_r($curl_response);
    
    echo $curl_response;
}
?>