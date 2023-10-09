<?php

    /*
    * get_transaction_details method use for transaction
    *
    * param  string $params - holds the $_POST form data.
    * param  string $merchant_key - holds the merchant key.
    * param  string $salt - holds the merchant salt key.
    * param  string $env - holds the env(enviroment)
    *
    * ##Return values
    *
    * - return array $result - holds the single transaction details.
    *
    * @param  string $params - holds the $_POST form data.
    * @param  string $merchant_key - holds the merchant key.
    * @param  string $salt - holds the merchant salt key.
    * @param  string $env - holds the env(enviroment)
    *
    * @return array $result - holds the single transaction details.
    *
    */
    function get_transaction_details($params, $merchant_key, $salt, $env){
        $result = _transaction($params, $merchant_key, $salt, $env);

        // verify transaction api response
        $easebuzz_transaction_response =  _validateTransactionResponse((object)$result, $salt); 

        return $easebuzz_transaction_response;
    }


    /*
    * _transaction method use for get single transaction details.
    * 
    * param string $key - holds the merchant key.
    * param string $txnid - holds the transaction id.
    * param string $email - holds the email.
    * param string $amount - holds the amount.
    * param string $phone - holds the phone.
    * param string $hash - holds the hash key. 
    *
    * #### Define variable
    *  
    * $postedArray array - holds merchant key and $_POST form data.
    *
    * ##Return values
    *
    * - return array $result - holds the response with status and data.
    *
    * - return integer status = 1 successful.
    *
    * - return integer status = 0 error.
    *
    * @param  string $key - holds the merchant key.
    * @param  string $txnid - holds the transaction id.
    * @param  string $email - holds the email.
    * @param  string $amount - holds the amount.
    * @param  string $phone - holds the phone.
    * @param  string $hash - holds the hash key. 
    *
    * @return array $result - holds the response with status and data.
    * @return integer status = 1 successful.
    * @return integer status = 0 error.
    *
    */
    function _transaction($params, $merchant_key, $salt, $env){

        $postedArray = '';

        // argument validation
        $argument_validation = _checkArgumentValidation($params, $merchant_key, $salt, $env);
        if(is_array($argument_validation) && $argument_validation['status'] === 0){
            return $argument_validation;
        }

        // push merchant key into $params array.
        $params['key'] =  $merchant_key;

        // remove white space, htmlentities(converts characters to HTML entities), prepared $postedArray.
        $postedArray = _removeSpaceAndPreparePostArray($params);

        // empty validation
        $empty_validation = _emptyValidation($postedArray, $salt);
        if(is_array($empty_validation) && $empty_validation['status'] === 0){
            return $empty_validation;
        }

        // check amount should be float or not 
        if(preg_match("/^([\d]+)\.([\d]?[\d])$/", $postedArray['amount'])){
            $postedArray['amount'] = floatval($postedArray['amount']);
            
        }

        // type validation
        $type_validation = _typeValidation($postedArray, $salt, $env);
        if($type_validation !== true){
            return $type_validation;
        }

        // again amount convert into string
        $temp = strval($postedArray['amount']);
        $temp = explode('.', $temp);
        //echo $temp;
        $diff_amount_string = '';
        if(strlen($temp[1]) == 0){
            $diff_amount_string = $temp[0].'.0';
            $postedArray['amount'] =$diff_amount_string;
            
        }
         elseif( strlen($temp[1])==1 || strlen($temp[1])==2 ){
            $diff_amount_string = $temp[0].'.'.$temp[1];
            
        } else{
            return array(
                'status' => 0,
                'data' => 'Amount should be float and support upto 2 decimal'
            ); 
        }

        // $diff_amount_string = abs( strlen($params['amount']) - strlen("".$postedArray['amount'] ."") );
        // echo $diff_amount_string;
        // $diff_amount_string = ($diff_amount_string === 2) ? 1 : 2;
        // echo $diff_amount_string;
        // $postedArray['amount'] = sprintf("%.". $diff_amount_string ."f", $postedArray['amount']);

        // email validation
        $email_validation = _email_validation($postedArray['email']);
        if($email_validation !== true)
            return $email_validation;

        // get URL based on enviroment like ($env = 'test' or $env = 'prod')
        $URL = _getURL($env);

        // process to start get transaction details
        $transaction_result = _getTransaction($postedArray, $salt, $URL);
        
        return $transaction_result;        
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
        if($argsc !== 4){
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
    * @return array $temp_array - holds the all posted value after removing space.
    *
    */
    function _removeSpaceAndPreparePostArray($params){
        /*$temp_array = array(
            'key' => trim( htmlentities($params['key'], ENT_QUOTES) ),
            'txnid' => trim( htmlentities($params['txnid'], ENT_QUOTES) ),
            'amount' => trim( htmlentities($params['amount'], ENT_QUOTES) ),
            'email' => trim( htmlentities($params['email'], ENT_QUOTES) ),
            'phone' => trim( htmlentities($params['phone'], ENT_QUOTES) )
        );*/
        $temp_array = array();
        foreach ($params as $key => $value) {
            $temp_array[$key] = trim(htmlentities($value, ENT_QUOTES));
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
        if(empty($params['key'])) 
            $empty_value = 'Merchant Key';

        if(empty($params['txnid'])) 
            $empty_value = 'Transaction ID';

        if(empty($params['amount'])) 
            $empty_value = 'Transaction Amount';

        if(empty($params['email'])) 
            $empty_value ='Email';

        if(empty($params['phone'])) 
            $empty_value = 'Phone';

        if(empty($salt))
            $empty_value = 'Merchant Salt Key';

        if($empty_value !== false){
            return array(
                'status' => 0,
                'data' => 'Mandatory Parameter '.$empty_value.' can not empty'
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
        if(!is_string($params['key']))
            $type_value = "Merchant Key should be string";

        if(!is_float($params['amount']))
            $type_value = "The transaction amount should float up to two or one decimal.";

        if(!is_string($params['txnid']))
            $type_value =  "Merchant Transaction ID should be string";

        if(!is_string($params['phone']))
            $type_value = "Customer Phone Number should be number";

        if(!is_string($params['email']))
            $type_value = "Customer Email ID should be string";

        if($type_value !== false){
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
        if(!preg_match($email_regx, $email)){
            return array(
                'status' => 0,
                'data' => 'Email invalid, Please enter valid email.'
            );
        }
        return true;
    }


    /*
    * _getURL method set based on enviroment ($env = 'test' or $env = 'prod') 
    *  cand generate url link.
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
        switch($env){
            case 'test' :
                $url_link = "https://testdashboard.easebuzz.in/";
                break;
            case 'prod' :
                $url_link = 'https://dashboard.easebuzz.in/';
                break;
            default :
                $url_link = "https://testdashboard.easebuzz.in/";
        }
        return $url_link;
    }


    /*
    * _getTransaction method get all details of a single transaction.
    *
    * params array $params_array - holds all form data with merchant key, transaction id etc.
    * params string $salt_key - holds the merchant salt key.
    * params string $url - holds the url based in env(enviroment type $env = 'test' or $env = 'prod')
    * 
    * param  string $key - holds the merchant key.
    * param  string $txnid - holds the transaction id.
    * param  string $email - holds the email.
    * param  float $amount - holds the amount.
    * param  string $phone - holds the phone.
    * param  string $hash - holds the hash key. 
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
    * @param  string $email - holds the email.
    * @param  float $amount - holds the amount.
    * @param  string $phone - holds the phone.
    * @param  string $hash - holds the hash key. 
    *
    * @return array with status and data - holds the details
    * @return integer status = 0 means error.
    * @return integer status = 1 means success and go the url link.  
    *   
    */
    function _getTransaction($params_array, $salt_key, $url){
        $hash_key = '';

        // generate hash key and push into params array.
        $hash_key = _getHashKey($params_array, $salt_key);
        $params_array['hash'] = $hash_key;

        // call curl_call() for initiate pay link
        $curl_result = _curlCall( $url.'transaction/v1/retrieve', http_build_query($params_array) );

        return $curl_result;
    }


    /*
    * _getHashKey method generate Hash key based on the API call (initiatePayment API).
    *
    * hash format (hash sequence) :
    *  $hash = key|txnid|amount|email|phone|salt
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
        $hash_sequence = "key|txnid|amount|email|phone";

        // make an array or split into array base on pipe sign.
        $hash_sequence_array = explode( '|', $hash_sequence );
        $hash = null;

        // prepare a string based on hash sequence from the $params array.
        foreach($hash_sequence_array as $value ) {
            $hash .= isset($posted[$value]) ? $posted[$value] : '';
            $hash .= '|';
        }

        $hash .= $salt_key;
        #echo $hash;
        // generate hash key using hash function(predefine) and return
        return strtolower( hash('sha512', $hash) );
    }


    /*
    *  _curlCall method call CURL for get data from the API.
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

        // Set multiple options for a cURL transfer.
        curl_setopt_array( 
            $cURL, 
            array ( 
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
        if( curl_errno($cURL) ){
            $cURL_error = curl_error($cURL);
            if( empty($cURL_error) )
                $cURL_error = 'Server Error';
            
            return array(
                'status' => 0, 
                'data' => $cURL_error
            );
        }

        $result = trim($result);
        $result_response = json_decode($result);

        return $result_response;
    }


    /*
    * _validateTransactionResponse method call response method for verify the response
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
    function _validateTransactionResponse($response_array, $salt_key){

        if ($response_array->status === 1){

            // reverse hash key for validation means response is correct or not.
            $reverse_hash_key = _getReverseHashKey($response_array, $salt_key);

            if($reverse_hash_key === $response_array->data->hash){
                return $response_array;
            }else{
                return array(
                    'status' => 0,
                    'data' => 'Hash key Mismatch'
                );
            }    
        }
        return $response_array;
    }


    /*
    * _getReverseHashKey to generate Reverse hash key for validation
    *
    * reverse hash format (hash sequence) :
    * $reverse_hash = salt|status|udf10|udf9|udf8|udf7|udf6|udf5|udf4|udf3|udf2|udf1|email|firstname|productinfo|amount|txnid|key
    *  
    * status in $reverse_hash means => it will the response status which is getting from the response. 
    * 
    * params string $reverse_hash_sequence - holds the format of reverse hash key (sequence).
    * params object $response_obj - holds the response object.
    * params string $s_key - holds the merchant salt key.
    *
    * ##Return values
    *
    * - return string  $reverse_hash - holds the generated reverse hash key.
    *
    * @params string $reverse_hash_sequence - holds the format of reverse hash key (sequence).
    * @params object  $response_obj - holds the response object.
    * @params string $s_key - holds the merchant salt key.
    *
    * @return string  $reverse_hash - holds the generated reverse hash key.
    *
    */
    function _getReverseHashKey($response_obj, $s_key){
        $reverse_hash_sequence = "udf10|udf9|udf8|udf7|udf6|udf5|udf4|udf3|udf2|udf1|email|firstname|productinfo|amount|txnid|key";

        // make an array or split into array base on pipe sign.
        $reverse_hash = "";
        $reverse_hash_sequence_array = explode( '|', $reverse_hash_sequence );
        $reverse_hash .= $s_key.'|' . $response_obj['data']->status;

        // prepare a string based on reverse hash sequence from the $response_obj array.
        foreach($reverse_hash_sequence_array as $value ) {
            $reverse_hash .= '|';
            $reverse_hash .= $response_obj['data']->$value;
        }

        // generate reverse hash key using hash function(predefine) and return
        return strtolower( hash('sha512', $reverse_hash) );        
    }

?>

