<?php
/*
    * initiate_payment method initiate payment and call dispay the payment page.
    *
    * param  string $params - holds the $_POST form data.
    * param  string $merchant_key - holds the merchant key.
    * param  string $salt - holds the merchant salt key.
    * param  string $env - holds the env(enviroment)
    *
    * ##Return values
    *
    * - return array $result - holds the payment link and status.
    *
    * @param  string $params - holds the $_POST form data.
    * @param  string $merchant_key - holds the merchant key.
    * @param  string $salt - holds the merchant salt key.
    * @param  string $env - holds the env(enviroment)
    *
    * @return array $result - holds the payment link and status.
    *
    */
    function initiate_payment($params, $redirect, $merchant_key, $salt, $env){
        $result = _payment($params, $redirect, $merchant_key, $salt, $env);
        
        if ($redirect) {
            return _paymentResponse((object) $result);
        } else {
            
            if($result->status==1){

                $iframe_result = array(
                    "status"=>$result->status,
                    'key' => $merchant_key,
                    'access_key' => $result->data,
                );

                return json_encode($iframe_result);
            }
            else{ 
                return json_encode($result);
            }
            }
            
        }


/*
    * _payment method use for initiate payment.
    * 
    * param string $key - holds the merchant key.
    * param string $txnid - holds the transaction id.
    * param string $firstname - holds the first name. 
    * param string $email - holds the email.
    * param string $amount - holds the amount.
    * param string $phone - holds the phone.
    * param string $hash - holds the hash key. 
    * param string $productInfo - holds the product information. 
    * param string $successURL - holds the success URL. 
    * param string $failureURL - holds the failure URL. 
    * param string $udf1 - holds the udf1. 
    * param string $udf2 - holds the udf2. 
    * param string $udf3 - holds the udf3.
    * param string $udf4 - holds the udf4. 
    * param string $udf5 - holds the udf5.
    * param string $address1 - holds the first address.
    * param string $address2 - holds the second address.
    * param string $city - holds the city.
    * param string $state - holds the state.
    * param string $country - holds the country.
    * param string $zipcode - holds the zipcode.
    *
    * #### Define variable
    *  
    * $postedArray array - holds merchant key and $_POST form data.
    * $URL        string - holds url based on the $env(enviroment : 'test' or 'prod')
    *
    * ##Return values
    *
    * - return array $pay_result - holds the response with status and data.
    *
    * - return integer status = 1 successful.
    *
    * - return integer status = 0 error.
    *
    * @param  string $key - holds the merchant key.
    * @param  string $txnid - holds the transaction id.
    * @param  string $firstname - holds the first name. 
    * @param  string $email - holds the email.
    * @param  string $amount - holds the amount.
    * @param  string $phone - holds the phone.
    * @param  string $hash - holds the hash key. 
    * @param  string $productInfo - holds the product information. 
    * @param  string $successURL - holds the success URL. 
    * @param  string $failureURL - holds the failure URL. 
    * @param  string $udf1 - holds the udf1. 
    * @param  string $udf2 - holds the udf2. 
    * @param  string $udf3 - holds the udf3.
    * @param  string $udf4 - holds the udf4. 
    * @param  string $udf5 - holds the udf5.
    * @param  string $address1 - holds the first address.
    * @param  string $address2 - holds the second address.
    * @param  string $city - holds the city.
    * @param  string $state - holds the state.
    * @param  string $country - holds the country.
    * @param  string $zipcode - holds the zipcode.
    *
    * @return array $pay_result - holds the response with status and data.
    * @return integer status = 1 successful.
    * @return integer status = 0 error.
    *
    */
    function _payment($params, $redirect, $merchant_key, $salt, $env){

        $postedArray = '';
        $URL = '';

        // argument validation
        $argument_validation = _checkArgumentValidation($params, $merchant_key, $salt, $env);
        if (is_array($argument_validation) && $argument_validation['status'] === 0) {
            return $argument_validation;
        }

        // push merchant key into $params array.
        $params['key'] =  $merchant_key;

        // remove white space, htmlentities(converts characters to HTML entities), prepared $postedArray.
        $postedArray = _removeSpaceAndPreparePostArray($params);

        // empty validation
        $empty_validation = _emptyValidation($postedArray, $salt);
        if (is_array($empty_validation) && $empty_validation['status'] === 0) {
            return $empty_validation;
        }

        // check amount should be float or not 
        if (preg_match("/^([\d]+)\.([\d]?[\d])$/", $postedArray['amount'])) {
            $postedArray['amount'] = (float) $postedArray['amount'];
        }

        // type validation
        $type_validation = _typeValidation($postedArray, $salt, $env);
        if ($type_validation !== true) {
            return $type_validation;
        }

        // again amount convert into string
        $diff_amount_string = abs(strlen($params['amount']) - strlen("" . $postedArray['amount'] . ""));
        $diff_amount_string = ($diff_amount_string === 2) ? 1 : 2;
        $postedArray['amount'] = sprintf("%." . $diff_amount_string . "f", $postedArray['amount']);

        // email validation
        $email_validation = _email_validation($postedArray['email']);
        if ($email_validation !== true)
            return $email_validation;

        // get URL based on enviroment like ($env = 'test' or $env = 'prod')
        $URL = _getURL($env);
       
        // process to start pay
        $pay_result = _pay($postedArray, $redirect, $salt, $URL);

        return $pay_result;
    }


/*
    *  _checkArgumentValidation method Check number of Arguments Validation. Means how many arguments submitted 
    *  from form and verify with 
    * API documentation.
    * 
    * param  array $params - holds the all $_POST data.
    * param  string $salt - holds the merchant salt key.
    * param  string $env - holds the enviroment.
    *
    * ##Return values
    * 
    * - return interger 1 number of  arguments match.
    *
    * - return array status = 0 number of arguments mismatch.
    *
    * @param  array $params - holds the all $_POST data.
    * @param  string $salt - holds the merchant salt key.
    * @param  string $env - holds the enviroment.
    *
    * @return interger 1 number of  arguments match. 
    * @return array status = 0 number of arguments mismatch.
    *  
    */
    function _checkArgumentValidation($params, $merchant_key, $salt, $env){
        $args = func_get_args();
        $argsc = count($args);
        if ($argsc !== 4) {
            return array(
                'status' => 0,
                'data' => 'Invalid number of arguments.'
            );
        }
        return 1;
    }


/*  
    *  _removeSpaceAndPreparePostArray method Remove white space, converts characters to HTML entities 
    *   and prepared the posted array.
    * 
    * param array $params - holds $_POST array, merchant key and transaction key.
    *
    * ##Return values
    *
    * - return array $temp_array - holds the all posted value after removing space.
    *
    * @param array $params - holds $_POST array, merchant key and transaction key.
    * 
    * @return array $temp_array - holds the all posted value after removing space.c
    *
    */
    function _removeSpaceAndPreparePostArray($params){
       /*
        $temp_array = array(
            'key' => trim(htmlentities($params['key'], ENT_QUOTES)),
            'txnid' => trim(htmlentities($params['txnid'], ENT_QUOTES)),
            'amount' => trim(htmlentities($params['amount'], ENT_QUOTES)),
            'firstname' => trim(htmlentities($params['firstname'], ENT_QUOTES)),
            'email' => trim(htmlentities($params['email'], ENT_QUOTES)),
            'phone' => trim(htmlentities($params['phone'], ENT_QUOTES)),
            'udf1' => trim(htmlentities($params['udf1'], ENT_QUOTES)),
            'udf2' => trim(htmlentities($params['udf2'], ENT_QUOTES)),
            'udf3' => trim(htmlentities($params['udf3'], ENT_QUOTES)),
            'udf4' => trim(htmlentities($params['udf4'], ENT_QUOTES)),
            'udf5' => trim(htmlentities($params['udf5'], ENT_QUOTES)),
            'productinfo' => trim(htmlentities($params['productinfo'], ENT_QUOTES)),
            'surl' => trim(htmlentities($params['surl'], ENT_QUOTES)),
            'furl' => trim(htmlentities($params['furl'], ENT_QUOTES)),
            'address1' => trim(htmlentities($params['address1'], ENT_QUOTES)),
            'address2' => trim(htmlentities($params['address2'], ENT_QUOTES)),
            'city' => trim(htmlentities($params['city'], ENT_QUOTES)),
            'state' => trim(htmlentities($params['state'], ENT_QUOTES)),
            'country' => trim(htmlentities($params['country'], ENT_QUOTES)),
            'zipcode' => trim(htmlentities($params['zipcode'], ENT_QUOTES))
        );

        if (array_key_exists("sub_merchant_id", $params)  and !empty($params['sub_merchant_id']) )
            $temp_array['sub_merchant_id'] = trim( htmlentities($params['sub_merchant_id'], ENT_QUOTES) );

        if (array_key_exists("unique_id", $params)  and  !empty($params['unique_id']) )
            $temp_array['unique_id'] = trim( htmlentities($params['unique_id'], ENT_QUOTES) );

        if (array_key_exists("split_payments", $params)  and  !empty($params['split_payments']) )
            $temp_array['split_payments'] = trim($params['split_payments']);

        if (array_key_exists("show_payment_mode", $params)  and  !empty($params['show_payment_mode']) )
            $temp_array['show_payment_mode'] = trim($params['show_payment_mode']);
        */
        $temp_array = array();
        foreach ($params as $key => $value) {            
                if (array_key_exists($key, $params)  and  !empty($key) ){
                    if($key != "split_payments"){
                        $temp_array[$key] = trim(htmlentities($value, ENT_QUOTES));
                     }else{
                        $temp_array[$key] = trim($value);
                     }
                }            
        }        
        return $temp_array;
    }


/*
    * _emptyValidation method check empty validation for Mandatory Parameters.
    *
    * param  array $params - holds the all $_POST data
    * param  string $salt - holds the merchant salt key.
    * param  string $env - holds the enviroment.
    *
    * ##Return values
    *
    * - return boolean true - all $params Mandatory parameters is not empty.
    *
    * - return array with status and data - $params parameters or $salt are empty.
    * 
    * @param  array $params - holds the all $_POST data.
    * @param  string $salt - holds the merchant salt key.
    * @param  string $env - holds the enviroment.
    *
    * @return boolean true - all $params Mandatory parameters is not empty.
    * @return array with status and data - $params parameters or $salt are empty.
    * 
    */
    function _emptyValidation($params, $salt){
        $empty_value = false;
        if (empty($params['key']))
            $empty_value = 'Merchant Key';

        if (empty($params['txnid']))
            $empty_value = 'Transaction ID';

        if (empty($params['amount']))
            $empty_value = 'Amount';

        if (empty($params['firstname']))
            $empty_value = 'First Name';

        if (empty($params['email']))
            $empty_value = 'Email';

        if (empty($params['phone']))
            $empty_value = 'Phone';

        if (!empty($params['phone'])){
            if (strlen((string)$params['phone'])!=10){
                $empty_value = 'Phone number must be 10 digit and ';
            }
        }


        if (empty($params['productinfo']))
            $empty_value = 'Product Infomation';

        if (empty($params['surl']))
            $empty_value = 'Success URL';

        if (empty($params['furl']))
            $empty_value = 'Failure URL';

        if (empty($salt))
            $empty_value = 'Merchant Salt Key';

        if ($empty_value !== false) {
            return array(
                'status' => 0,
                'data' => 'Mandatory Parameter ' . $empty_value . ' can not empty'
            );
        }
        return true;
    }


/*
    * _typeValidation method check type validation for field.
    *
    * param  array $params - holds the all $_POST data.
    * param  string $salt - holds the merchant salt key.
    * param  string $env - holds the enviroment.
    *
    * ##Return values
    *
    * - return boolean true - all params parameters type are correct.
    *
    * - return array with status and data - params parameters type mismatch.
    *
    * @param  array $params - holds the all $_POST data.
    * @param  string $salt - holds the merchant salt key.
    * @param  string $env - holds the enviroment.
    *
    * @return boolean true - all params parameters type are correct.
    * @return array with status and data - params parameters type mismatch.
    * 
    */
    function _typeValidation($params, $salt, $env){
        $type_value = false;
        if (!is_string($params['key']))
            $type_value = "Merchant Key should be string";

        if (!is_float($params['amount']))
            $type_value = "The amount should float up to two or one decimal.";

        if (!is_string($params['productinfo']))
            $type_value =  "Product Information should be string";

        if (!is_string($params['firstname']))
            $type_value =  "First Name should be string";

        if (!is_string($params['phone']))
            $type_value = "Phone Number should be number";

        if (!is_string($params['email']))
            $type_value = "Email should be string";

        if (!is_string($params['surl']))
            $type_value = "Success URL should be string";

        if (!is_string($params['furl']))
            $type_value = "Failure URL should be string";

        if ($type_value !== false) {
            return array(
                'status' => 0,
                'data' => $type_value
            );
        }
        return true;
    }


/*
    * _email_validation method check email format validation
    * 
    * param string $email - holds the email address.
    *
    * ##Return values
    *
    * - return boolean true - email format is correct.
    *
    * - return array with status and data - email format is incorrect.
    * 
    * @param string $email - holds the email address.
    *
    * @return boolean true - email format is correct.
    * @return array with status and data - email format is incorrect.
    * 
    */
    function _email_validation($email){
        $email_regx = "/^([\w\.-]+)@([\w-]+)\.([\w]{2,8})(\.[\w]{2,8})?$/";
        if (!preg_match($email_regx, $email)) {
            return array(
                'status' => 0,
                'data' => 'Email invalid, Please enter valid email.'
            );
        }
        return true;
    }


/*
    * _getURL method set based on enviroment ($env = 'test' or $env = 'prod') and 
    * generate url link.
    *   
    * param string $env - holds the enviroment.
    *
    * ##Return values
    *
    * - return string $url_link - holds the full url link. 
    *   
    * @param string $env - holds the enviroment.
    *  
    * @return string $url_link - holds the full URL.
    *
    */
    function _getURL($env){
        $url_link = '';
        switch ($env) {
            case 'test':
                $url_link = "https://testpay.easebuzz.in/";
                break;
            case 'prod':
                $url_link = 'https://pay.easebuzz.in/';
                break;
            case 'local':
                $url_link = 'http://localhost:8005/';
                break;
            case 'dev':
                $url_link = 'https://devpay.easebuzz.in/';
                break;
            default:
                $url_link = "https://testpay.easebuzz.in/";
        }
        return $url_link;
    }


/*
    * _pay method initiate payment will be start from here.
    *
    * params array $params_array - holds all form data with merchant key, transaction id etc.
    * params string $salt_key - holds the merchant salt key.
    * params string $url - holds the url based in env(enviroment type $env = 'test' or $env = 'prod')
    * 
    * param  string $key - holds the merchant key.
    * param  string $txnid - holds the transaction id.
    * param  string $firstname - holds the first name. 
    * param  string $email - holds the email.
    * param  float $amount - holds the amount.
    * param  string $phone - holds the phone.
    * param  string $hash - holds the hash key. 
    * param  string $productInfo - holds the product information. 
    * param  string $successURL - holds the success URL. 
    * param  string $failureURL - holds the failure URL. 
    * param  string $udf1 - holds the udf1. 
    * param  string $udf2 - holds the udf2. 
    * param  string $udf3 - holds the udf3.
    * param  string $udf4 - holds the udf4. 
    * param  string $udf5 - holds the udf5.
    * param  string $address1 - holds the first address.
    * param  string $address2 - holds the second address.
    * param  string $city - holds the city.
    * param  string $state - holds the state.
    * param  string $country - holds the country.
    * param  string $zipcode - holds the zipcode.
    *
    * ##Return values
    *
    * - return array with status and data - holds the details
    *
    * - return integer status = 0 means error.
    *
    * - return integer status = 1 means success and go the url link.
    *
    * @params array $params_array - holds all form data with merchant key, transaction id etc.
    * @params string $salt_key - holds the merchant salt key.
    * @params string $url - holds the url based in env(enviroment type $env = 'test' or $env = 'prod')
    * 
    * @param  string $key - holds the merchant key.
    * @param  string $txnid - holds the transaction id.
    * @param  string $firstname - holds the first name. 
    * @param  string $email - holds the email.
    * @param  float $amount - holds the amount.
    * @param  string $phone - holds the phone.
    * @param  string $hash - holds the hash key. 
    * @param  string $productInfo - holds the product information. 
    * @param  string $successURL - holds the success URL. 
    * @param  string $failureURL - holds the failure URL. 
    * @param  string $udf1 - holds the udf1. 
    * @param  string $udf2 - holds the udf2. 
    * @param  string $udf3 - holds the udf3.
    * @param  string $udf4 - holds the udf4. 
    * @param  string $udf5 - holds the udf5.
    * @param  string $address1 - holds the first address.
    * @param  string $address2 - holds the second address.
    * @param  string $city - holds the city.
    * @param  string $state - holds the state.
    * @param  string $country - holds the country.
    * @param  string $zipcode - holds the zipcode.
    *
    * @return array with status and data - holds the details
    * @return integer status = 0 means error.
    * @return integer status = 1 means success and go the url link.  
    *   
    */
    function _pay($params_array, $redirect, $salt_key, $url){

        $hash_key = '';
        // generate hash key and push into params array.
        $hash_key = _getHashKey($params_array, $salt_key);
        $params_array['hash'] = $hash_key;
       
        // call curl_call() for initiate pay link
        $curl_result = _curlCall($url . 'payment/initiateLink', http_build_query($params_array));
         
        //  print_r($curl_result);
        //  die;
         
        $accesskey = ($curl_result->status === 1) ? $curl_result->data : null;
        
        if (empty($accesskey)) {
            return $curl_result;
        } else {
            if ($redirect == true) {
                $curl_result->data = $url . 'pay/' . $accesskey;
            } else {
                $curl_result->data = $accesskey;
                // return $accesskey;
            }
            return $curl_result;
        }
    }


/*
    * _getHashKey method generate Hash key based on the API call (initiatePayment API).
    *
    * hash format (hash sequence) :
    *  $hash = key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10|salt
    *  
    * params string $hash_sequence - holds the format of hash key (sequence).
    * params array $params - holds the passed array.
    * params string $salt - holds merchant salt key.	
    *
    * ##Return values
    *
    * - return string $hash - holds the generated hash key.
    *
    * @params string $hash_sequence - holds the format of hash key (sequence).
    * @params array $params - holds the passed array.
    * @params string $salt - holds merchant salt key.
    *
    * @return string $hash - holds the generated hash key.  
    *
    */
    function _getHashKey($posted, $salt_key){
        $hash_sequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";

        // make an array or split into array base on pipe sign.
        $hash_sequence_array = explode('|', $hash_sequence);
        $hash = null;

        // prepare a string based on hash sequence from the $params array.
        foreach ($hash_sequence_array as $value) {
            $hash .= isset($posted[$value]) ? $posted[$value] : '';
            $hash .= '|';
        }

        $hash .= $salt_key;
        #echo $hash;
        #echo " ";
        #echo strtolower(hash('sha512', $hash));
        // generate hash key using hash function(predefine) and return
        return strtolower(hash('sha512', $hash));
    }


/*
    *  _curlCall method call CURL for initialized payment link.
    *
    * params string $url - holds the payment URL which will be redirect to.
    * params array $params_array - holds the passed array.
    *
    * ##Return values
    * 
    * - return array with curl_status and data - holds the details.
    *
    * - return integer curl_status = 0 means error.
    *
    * - return integer curl_status = 1 means success.
    * 
    * @params string $url - holds the payment URL which will be redirect to.
    * @params array $params_array - holds the passed array.
    *
    * @return array with curl_status and data - holds the details.
    * @return integer curl_status = 0 means error.
    * @return integer curl_status = 1 means success and go the url link.
    *
    * ##Method call
    * - curl_init() - Initializes a new session and return a cURL.
    * - curl_setopt_array() - Set multiple options for a cURL transfer.
    * - curl_exec() - Perform a cURL session.
    * - curl_errno() -  Return the last error number.
    * - curl_error() - Return a string containing the last error for the current session.
    *
    * ##Used value
    * - curl_status => 0 : means failure.
    * - curl_status => 1 : means Success.
    *
    */
    function _curlCall($url, $params_array){
        // Initializes a new session and return a cURL.
        $cURL = curl_init();

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        // Set multiple options for a cURL transfer.
        curl_setopt_array(
            $cURL,
            array(
                CURLOPT_URL => $url,
                CURLOPT_POSTFIELDS => $params_array,
                CURLOPT_POST => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_USERAGENT => 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/36.0.1985.125 Safari/537.36',
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0
            )
        );

        // Perform a cURL session
        $result = curl_exec($cURL);


        // check there is any error or not in curl execution.
        if (curl_errno($cURL)) {
            $cURL_error = curl_error($cURL);
            if (empty($cURL_error))
                $cURL_error = 'Server Error';

            return array(
                'curl_status' => 0,
                'error' => $cURL_error
            );
        }

        $result = trim($result);
        $result_response = json_decode($result);

        return $result_response;
    }


/*
    * _paymentResponse method show response after API call.
    *
    * params array $params_array - holds the passed array.
    *
    * ##Return values
    *
    * - return string URL $result->status = 1 - means go to easebuzz page.
    *
    * - return string URL $result->status = 0 - means error.
    *
    * @params array $params_array - holds the passed array.
    * 
    * @return string URL $result->status = 1 - means go to easebuzz page.
    * @return string URL $result->status = 0 - means error
    *
    */
    function _paymentResponse($result){
        
        if ($result->status === 1) {
            //first way
            header('Location:' . $result->data);

            // second wayre
            // echo "
            //    <script type='text/javascript'>
            //           window.location ='".$result->data."'
            //    </script>
            // ";

            exit();
        } else {
            //echo '<h3>'.$result['data'].'</h3>';
            return json_encode($result);
        }
    }


/*
    * response method verify API response is acceptable or not and returns the response object.
    *  
    * params array $response_params - holds the response array.
    * params string $salt - holds the merchant salt key.
    *
    * ##Return values
    *
    * - return array with status and data - holds the details.
    *
    * - return integer status = 0 means error.
    *
    * - return integer status = 1 means success. 
    *
    * @params array $response_params - holds the response array.  
    * @params string $salt - holds the merchant salt key.
    *
    * @return array with status and data - holds the details.
    * @return integer status = 0 means error.
    * @return integer status = 1 means success. 
    *
    */
    function response($response_params, $salt_key){

        // check return response params is array or not
        if (!is_array($response_params) || count($response_params) === 0) {
            return array(
                'status' => 0,
                'data' => 'Response params is empty.'
            );
        }

        // remove white space, htmlentities, prepared $easebuzzPaymentResponse.
        $easebuzzPaymentResponse = _removeSpaceAndPrepareAPIResponseArray($response_params);

        // empty validation 
        $empty_validation = _emptyValidation($easebuzzPaymentResponse, $salt_key);
        if (is_array($empty_validation) && $empty_validation['status'] === 0) {
            return $empty_validation;
        }

        // empty validation for response params status
        if (empty($easebuzzPaymentResponse['status'])) {
            return array(
                'status' => 0,
                'data' => 'Response status is empty.'
            );
        }

        // check response the correct or not
        $response_result = _getResponse($easebuzzPaymentResponse, $salt_key);

        return $response_result;
    }


/*
    *  _removeSpaceAndPrepareAPIResponseArray method Remove white space, converts characters to HTML entities 
    *   and prepared the posted array.
    * 
    * param array $response_array - holds the API response array.
    *
    * ##Return values
    *
    * - return array $temp_array - holds the all posted value after removing space.
    *
    * @param array $response_array - holds the API response array.
    * 
    * @return array $temp_array - holds the all posted value after removing space.
    *
    */
    function _removeSpaceAndPrepareAPIResponseArray($response_array){
        $temp_array = array();
        foreach ($response_array as $key => $value) {
            $temp_array[$key] = trim(htmlentities($value, ENT_QUOTES));
        }
        return $temp_array;
    }


/*
    * _getResponse check response is correct or not.
    *
    * param array $response_array - holds the API response array.
    * param array $s_key - holds the merchant salt key
    *
    * ##Return values
    * 
    * - return array with status and data - holds the details.
    *
    * - return integer status = 0 means error.
    *
    * - return integer status = 1 means success.
    *
    * @param array $response_array - holds the API response array.
    * @param array $s_key - holds the merchant salt key
    *
    * @return array with status and data - holds the details.
    * @return integer status = 0 means error.
    * @return integer status = 1 means success.
    *
    */
    function _getResponse($response_array, $s_key){

        // reverse hash key for validation means response is correct or not.
        $reverse_hash_key = _getReverseHashKey($response_array, $s_key);

        if ($reverse_hash_key === $response_array['hash']) {
            switch ($response_array['status']) {
                case 'success':
                    return array(
                        'status' => 1,
                        'url' => $response_array['surl'],
                        'data' => $response_array
                    );
                    break;
                case 'failure':
                    return array(
                        'status' => 1,
                        'url' => $response_array['furl'],
                        'data' => $response_array
                    );
                    break;
                default:
                    return array(
                        'status' => 1,
                        'data' => $response_array
                    );
            }
        } else {
            return array(
                'status' => 0,
                'data' => 'Hash key Mismatch'
            );
        }
    }


/*
    * _getReverseHashKey to generate Reverse hash key for validation
    *
    * reverse hash format (hash sequence) :
    *  $reverse_hash = salt|status|udf10|udf9|udf8|udf7|udf6|udf5|udf4|udf3|udf2|udf1|email|firstname|productinfo|amount|txnid|key
    * 
    * status in $reverse_hash means => it will the response status which is getting from the response. 
    *
    * params string $reverse_hash_sequence - holds the format of reverse hash key (sequence).
    * params array $response_array - holds the response array.
    * params string $s_key - holds the merchant salt key.
    *
    * ##Return values
    *
    * - return string  $reverse_hash - holds the generated reverse hash key.
    *
    * @params string $reverse_hash_sequence - holds the format of reverse hash key (sequence).
    * @params array $response_array - holds the response array.
    * @params string $s_key - holds the merchant salt key.
    *
    * @return string  $reverse_hash - holds the generated reverse hash key.
    *
    */
    function _getReverseHashKey($response_array, $s_key){
        $reverse_hash_sequence = "udf10|udf9|udf8|udf7|udf6|udf5|udf4|udf3|udf2|udf1|email|firstname|productinfo|amount|txnid|key";

        // make an array or split into array base on pipe sign.
        $reverse_hash = "";
        $reverse_hash_sequence_array = explode('|', $reverse_hash_sequence);
        $reverse_hash .= $s_key . '|' . $response_array['status'];

        // prepare a string based on reverse hash sequence from the $response_array array.
        foreach ($reverse_hash_sequence_array as $value) {
            $reverse_hash .= '|';
            $reverse_hash .= isset($response_array[$value]) ? $response_array[$value] : '';
        }

        // generate reverse hash key using hash function(predefine) and return
        return strtolower(hash('sha512', $reverse_hash));
    }
