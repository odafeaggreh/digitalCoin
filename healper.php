<?php

function validate_input_text($text_input){
    if (!empty($text_input)) {
        $trim_text = trim($text_input);
        // sanitie string 
        $sanitie_str = filter_var($trim_text, FILTER_SANITIZE_STRING);
        return $sanitie_str;
    }
    return "";
}


function validate_input_email($email_input){
    if (!empty($email_input)) {
        $trim_text = trim($email_input);
        // sanitie string 
        $sanitie_str = filter_var($trim_text, FILTER_SANITIZE_EMAIL);
        return $sanitie_str;
    }
    return "";
}

// get user info
function get_user_info($con, $userID) {
    $query = "SELECT userID, firstName, lastName, email, totalbalance, totaldeposit, profit, status, plan, roi FROM users WHERE userID=?";

    $q = mysqli_stmt_init($con);

    mysqli_stmt_prepare($q, $query);

    // bind params
    mysqli_stmt_bind_param($q, 'i', $userID);

    // execute statement
    mysqli_stmt_execute($q);

    $result = mysqli_stmt_get_result($q);

    $row = mysqli_fetch_assoc($result);
    return empty($row)? false: $row;
}