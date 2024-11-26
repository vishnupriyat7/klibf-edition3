<?php
include "config.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phone_no = $_POST['phone_no'];

    // Check if phone_no is valid
    if (!empty($phone_no)) {

        $sql = "SELECT rq.inst_name, rq.inst_faclt_name, rq.inst_faclt_cntct, rq.team1_mem1_name, rq.team1_mem1_class, rq.team1_mem1_gndr, rq.team1_mem1_email,rq.team1_mem1_cntct, rq.team1_mem2_name, rq.team1_mem2_class, rq.team1_mem2_gndr, rq.team1_mem2_email, rq.team1_mem2_cntct, rq.team2_mem1_name, rq.team2_mem1_class, rq.team2_mem1_gndr,rq.team2_mem1_email,rq.team2_mem1_cntct,rq.team2_mem2_name,rq.team2_mem2_class,rq.team2_mem2_gndr,rq.team2_mem2_email,rq.team2_mem2_cntct, qc.category, qz.name, d.dt_name FROM reg_quiz rq join quiz_category qc on rq.category_id = qc.id join quiz_zone qz on zone_id = qz.id join district d on rq.district_id= d.id WHERE rq.team1_mem1_cntct = ? OR rq.team1_mem2_cntct = ? OR 
                      rq.team2_mem1_cntct = ? OR rq.team2_mem2_cntct = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $phone_no, $phone_no, $phone_no, $phone_no);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();

            // Render the details
            echo "<h4>Registration Details</h4>";
            echo "<p><b>Institution Name:</b> " . $data['inst_name'] . "</p>";
            echo "<p><b>Faculty Name:</b> " . $data['inst_faclt_name'] . "</p>";
            echo "<p><b>Category:</b> " . $data['category'] . "</p>";
            echo "<p><b>Zone:</b> " . $data['name'] . "</p>";
            echo "<p><b>District:</b> " . $data['dt_name'] . "</p>";
            echo "<h5>Team Members:</h5>";
            echo "<p><b>Team 1 Member 1:</b> " . $data['team1_mem1_name'] . " (" . $data['team1_mem1_class'] . ")</p>";
            echo "<p><b>Team 1 Member 2:</b> " . $data['team1_mem2_name'] . " (" . $data['team1_mem2_class'] . ")</p>";
            echo "<p><b>Team 2 Member 1:</b> " . $data['team2_mem1_name'] . " (" . $data['team2_mem1_class'] . ")</p>";
            echo "<p><b>Team 2 Member 2:</b> " . $data['team2_mem2_name'] . " (" . $data['team2_mem2_class'] . ")</p>";
        } else {
            echo "<p class='text-danger'>No registration details found for the provided phone number.</p>";
        }
    } else {
        echo "<p class='text-danger'>Please provide a valid phone number.</p>";
    }
}
