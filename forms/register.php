<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $registerName =
        mysqli_real_escape_string($con, $_POST['registerName']);
    $registerEmail =
        mysqli_real_escape_string($con, $_POST['registerEmail']);
    $contactNo =
        mysqli_real_escape_string($con, $_POST['contactNo']);
    $cnctNo = intval($contactNo);
    $registerPassword =
        mysqli_real_escape_string($con, $_POST['registerPassword']);
    $registerRepeatPassword =
        mysqli_real_escape_string($con, $_POST['registerRepeatPassword']);
    // var_dump($registerName);die;
    if (strlen($registerName) < 3) {
        $msg = $msg . "Organisation name must be more than 3 characters length.<BR>";
        $status = "NOTOK";
    }
    if (!filter_var($registerEmail, FILTER_VALIDATE_EMAIL)) {
        $msg = $msg . "Invalid email address.<BR>";
        $status = "NOTOK";
    }
    if (!isValidContactNumber($cnctNo)) {
        // Invalid contact number format
        $msg = $msg . "Invalid contact number.<BR>";
        $status = "NOTOK";
    }
    if (strlen($registerPassword) < 3) {
        $msg = $msg . "Password must be more than 3 characters length.<BR>";
        $status = "NOTOK";
    }
    if ($registerPassword != $registerRepeatPassword) {
        $msg = $msg . "Your password and confirmation password must be the same.<BR>";
        $status = "NOTOK";
    }
    $user_type = 'P';
    $sql1 = "SELECT id FROM admin WHERE username = ?";
    // Prepare the statement
    $stmt1 = $con->prepare($sql1);
    // Bind the parameter to the statement
    $stmt1->bind_param("s", $registerEmail);
    // Execute the query
    $stmt1->execute();
    // Bind the result variables
    $stmt1->bind_result($id);
    if ($stmt1->fetch()) {
        $msg = $msg . "You have already registered with same email Id. Please use another email Id to register.<BR>";
        $status = "NOTOK";
    }
    $errormsg = "";
    if ($status == "NOTOK") {
        $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>" .
            $msg . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                           </div>"; //printing error if found in validation
    } else {
        $sql2 = "INSERT INTO admin (username, password) VALUES (?, ?)";
        $stmt2 = $con->prepare($sql2);
        $stmt2->bind_param("ss", $registerEmail, $registerPassword);
        if ($stmt2->execute()) {
            $sql3 = "SELECT id FROM admin WHERE username = ?";
            $stmt3 = $con->prepare($sql3);
            $stmt3->bind_param("s", $registerEmail);
            $stmt3->execute();
            $result = $stmt3->get_result();
            $admin_id = $result->fetch_assoc();
            $sql4 = "INSERT INTO users_profile (admin_id, user_type, org_name, cntct_prsn_mobile, cntct_prsn_email) VALUES (?, ?, ?, ?, ?)";
            $stmt4 = $con->prepare($sql4);
            $stmt4->bind_param("issss", $admin_id['id'], $user_type, $registerName, $contactNo, $registerEmail);
            if ($stmt4->execute()) {
                $errormsg = "
          <div class='alert alert-success alert-dismissible alert-outline fade show'>
                            Registered Successfully. We shall get back to you ASAP.
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
            } else {
                $errormsg = "
                <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                           Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help.
                           <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                           </div>";
            }
        }
    }
    // $stmt->close();
}

print $errormsg;




// $selectquery = "SELECT * from admin where (username = '$registerEmail' and head_org_mobile = '$head_mobile')";
// $selectresult = mysqli_query($con, $selectquery);
// if ($selectresult->num_rows > 0) {
//     $msg = $msg . "You have already registered with same email Id and contact number. Please use another email Id and contact number to register.<BR>";
//     $status = "NOTOK";
// }
// $errormsg = "";
// if ($status == "NOTOK") {
//     $errormsg = "<div class='alert alert-danger alert-dismissible alert-outline fade show'>" .
//         $msg . "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
//                        </div>"; //printing error if found in validation
// } else {
//     $query = "INSERT INTO book_stall (org_name, estb_year, reg_no, gst_no, book_lang, title_no, org_nature, mgr_house_name, head_org_name, head_org_addr, head_org_mobile, head_org_email, head_org_website, cntct_prsn_name, cntct_prsn_addr, cntct_prsn_mobile, cntct_prsn_email, cntct_prsn_watsapp, stalls_3x3, stalls_3x2, status, date, logo, fascia, remarks) VALUES ('$comp_name', '$estb_year', '$reg_no', '$gst_no', '$book_lang', '$title_no', '$org_nature', '$mgr_pub_hse', '$head_name', '$head_addr', '$head_mobile', '$head_email', '$head_site', '$prsn_name', '$prsn_addr', '$prsn_mobile', '$prsn_email', '$whatsapp', '$stall3x3', '$stall3x2', 'E', '$current_date', '$new_file_name', '$fascia', '$remark')";
//     $result = mysqli_query($con, $query);
//     if ($result) {
//         $errormsg = "
//       <div class='alert alert-success alert-dismissible alert-outline fade show'>
//                         Registered Successfully. We shall get back to you ASAP.
//                         <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
//                         </div>
//        ";
//     } else {
//         $errormsg = "
//             <div class='alert alert-danger alert-dismissible alert-outline fade show'>
//                        Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help.
//                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
//                        </div>";
//     }
// }
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     print $errormsg;
// }

function isValidContactNumber($number)
{
    // Regular expression for contact number validation
    // For example, allow only 10-digit numeric numbers (can be adapted to your specific rules)
    $contactPattern = '/^[0-9]{10}$/';
    return preg_match($contactPattern, $number);
}