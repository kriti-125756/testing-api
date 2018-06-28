<?php
//sample php code

//this will collect data from form
$provider_id = $_POST['provider_id']; 
$number = $_POST['number'];
$amount = $_POST['amount'];
$client_id = "09919190"; //(your system unique id. that you can check in pay2all);
//end of data collection from form


//check whether user enter some data or not
        if(empty($provider_id)){
        echo"select operator";
        exit;
        }
        if(empty($number)){
        echo"enter mobile number";
        exit;
        }
        if(empty($amount)){
        echo"enter amount";
        exit;
        }
        $api_token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjM4ZmFkYzFlODA2MDU0NmI0YTAzZDlmMmQ2MmFlMjZmYzkyYjkwNTZiZTQ1OWMyNTU1MGM1NTI5ZWY5Mjk3YmViNmU0ZmM0NmY5MzU4NmU5In0.eyJhdWQiOiI1IiwianRpIjoiMzhmYWRjMWU4MDYwNTQ2YjRhMDNkOWYyZDYyYWUyNmZjOTJiOTA1NmJlNDU5YzI1NTUwYzU1MjllZjkyOTdiZWI2ZTRmYzQ2ZjkzNTg2ZTkiLCJpYXQiOjE1MjA0MjgyODUsIm5iZiI6MTUyMDQyODI4NSwiZXhwIjoxNTUxOTY0Mjg1LCJzdWIiOiIxMTQ1MSIsInNjb3BlcyI6W119.0pJg_IredTnkIDHGmZIDwcIW_yCiGtJ8nyh3iUH3PmoC7Z_jla8jH0ofg8zXPWTJ9MlrYc0jGH1wzfH2JP-x3smpTSnCX2XMnn2SMHaNZknoR6FZfVN6B2NljXiW3JyEh_O5-NG5LgJZtWQdd4pHUfiBHevfUMjrNfiIi_n95plBM8TQNmdUA-AetAdpnIeBQ8-w3FcAO9SLeNcRWc5hi1jBkoA_VxZoWMc8eCNmLVadWegRJv4ngcPP6fv5rXl2slYgdXkS77wGYVqnpar5iAleU0zKcrG-3L_RjH1lD93w2M1MNQGQVfnFlcrIUBQY-YBKUIBRb8Q67jjHBnIPrgQII_YYLuABvEdEfR0t3rTeE24FinGXoVYAJ1JpD3nurZ8TBCnSZAK4zUTfD9-7Lc8h4zvbB_aGsQjzgOC7vfe5OUurpVvJxUPf5kCoWaYV66RGY7L429Ev_N4icWfqe8_XuBOUFnyEQTdujpsGjfqINtpWWY-udAmOKB00iq7a6owX5NT-X_OLuPBRUGHDlQhoQpOAJil9mVWUrqsQZLuyONGArp06ZpNqymGSlNie9tqWUYCep96hEBDJ_THF9w6biRk_jOqMPf8Ag9wN1Fdke-wlYEaTsZ4rsw6DzVLtXmEbMpL_4W29Z2z5C_DKFPAGzHgKZQ-YIevyKr3idro"; // api_token token will in (https://www.pay2all.in/developers/recharge-api-doc) 
        $ch = curl_init();
        $url = "https://www.pay2all.in/web-api/paynow?api_token=$api_token&number=$number&provider_id=$provider_id&amount=$amount&client_id=$client_id";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        echo $response;


?>
