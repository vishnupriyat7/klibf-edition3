<style>
    .print-table {
        font-size: 16px;
        font-weight: bold;
        font-family: sans-serif;
        margin: 20px auto;
        width: 80%;
        border-collapse: collapse;
    }

    .print-btn {
        margin: 20px;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .print-btn:hover {
        background-color: #0056b3;
    }
</style>




<?php
include "config.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phone_no = $_POST['phone_no'];

    // Check if phone_no is valid
    if (!empty($phone_no)) {

        // $sql = "SELECT rq.inst_name, rq.inst_faclt_name, rq.inst_faclt_cntct, rq.team1_mem1_name, rq.team1_mem1_class, rq.team1_mem1_gndr, rq.team1_mem1_email,rq.team1_mem1_cntct, rq.team1_mem2_name, rq.team1_mem2_class, rq.team1_mem2_gndr, rq.team1_mem2_email, rq.team1_mem2_cntct, rq.team2_mem1_name, rq.team2_mem1_class, rq.team2_mem1_gndr,rq.team2_mem1_email,rq.team2_mem1_cntct,rq.team2_mem2_name,rq.team2_mem2_class,rq.team2_mem2_gndr,rq.team2_mem2_email,rq.team2_mem2_cntct, qc.category, qz.name, d.dt_name FROM reg_quiz rq join quiz_category qc on rq.category_id = qc.id join quiz_zone qz on zone_id = qz.id join district d on rq.district_id= d.id WHERE rq.team1_mem1_cntct = ? OR rq.team1_mem2_cntct = ? OR 
        //               rq.team2_mem1_cntct = ? OR rq.team2_mem2_cntct = ?";
        $sql = "SELECT 
        rq.id,
        rq.inst_name, 
        rq.inst_faclt_name, 
        qc.category, 
        qz.name AS zone_name, 
        d.dt_name AS district_name,
        CASE 
            WHEN ? IN (rq.team1_mem1_cntct, rq.team1_mem2_cntct) THEN 'Team 1'
            WHEN ? IN (rq.team2_mem1_cntct, rq.team2_mem2_cntct) THEN 'Team 2'
            ELSE NULL 
        END AS team_name,
        CASE 
            WHEN ? IN (rq.team1_mem1_cntct, rq.team1_mem2_cntct) THEN rq.team1_mem1_name
            ELSE rq.team2_mem1_name
        END AS team_mem1_name,
        CASE 
            WHEN ? IN (rq.team1_mem1_cntct, rq.team1_mem2_cntct) THEN rq.team1_mem2_name
            ELSE rq.team2_mem2_name
        END AS team_mem2_name,
        CASE 
            WHEN ? IN (rq.team1_mem1_cntct, rq.team1_mem2_cntct) THEN rq.team1_mem1_class
            ELSE rq.team2_mem1_class
        END AS team_mem1_class,
        CASE 
            WHEN ? IN (rq.team1_mem1_cntct, rq.team1_mem2_cntct) THEN rq.team1_mem2_class
            ELSE rq.team2_mem2_class
        END AS team_mem2_class,
        CASE 
            WHEN ? IN (rq.team1_mem1_cntct, rq.team1_mem2_cntct) THEN rq.team1_mem1_gndr
            ELSE rq.team2_mem1_gndr
        END AS team_mem1_gender,
        CASE 
            WHEN ? IN (rq.team1_mem1_cntct, rq.team1_mem2_cntct) THEN rq.team1_mem2_gndr
            ELSE rq.team2_mem2_gndr
        END AS team_mem2_gender,
        CASE 
            WHEN ? IN (rq.team1_mem1_cntct, rq.team1_mem2_cntct) THEN rq.team1_mem1_email
            ELSE rq.team2_mem1_email
        END AS team_mem1_email,
        CASE 
            WHEN ? IN (rq.team1_mem1_cntct, rq.team1_mem2_cntct) THEN rq.team1_mem2_email
            ELSE rq.team2_mem2_email
        END AS team_mem2_email,
        CASE 
            WHEN ? IN (rq.team1_mem1_cntct, rq.team1_mem2_cntct) THEN rq.team1_mem1_cntct
            ELSE rq.team2_mem1_cntct
        END AS team_mem1_cntct,
        CASE 
            WHEN ? IN (rq.team1_mem1_cntct, rq.team1_mem2_cntct) THEN rq.team1_mem2_cntct
            ELSE rq.team2_mem2_cntct
        END AS team_mem2_cntct
    FROM reg_quiz rq
    JOIN quiz_category qc ON rq.category_id = qc.id
    JOIN quiz_zone qz ON rq.zone_id = qz.id
    JOIN district d ON rq.district_id = d.id
    WHERE ? IN (rq.team1_mem1_cntct, rq.team1_mem2_cntct, rq.team2_mem1_cntct, rq.team2_mem2_cntct)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param(
            "sssssssssssss",
            $phone_no,
            $phone_no,
            $phone_no,
            $phone_no,
            $phone_no,
            $phone_no,
            $phone_no,
            $phone_no,
            $phone_no,
            $phone_no,
            $phone_no,
            $phone_no,
            $phone_no,
        );
        if ($stmt->execute()) {
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $data = $result->fetch_assoc();

                // Table structure


                echo "<button class='print-btn' onclick='printTable()' style='text-align: right;'>Print</button>";
                echo "<h4 style='text-align: center;'>Registration Details</h4>";
                echo "<table class='table table-bordered print-table' style='font-size: 16px; font-weight: bold; font-family: sans-serif;'>";
                if ($data['category'] !== 'Public') {
                    echo "<tr><th style='font-weight: bold;'>Institution Name</th><td>{$data['inst_name']}</td></tr>";
                    echo "<tr><th style='font-weight: bold;'>Faculty Name</th><td>{$data['inst_faclt_name']}</td></tr>";
                    echo "<tr><th style='font-weight: bold;'>Category</th><td>{$data['category']}</td></tr>";
                    echo "<tr><th style='font-weight: bold;'>Zone</th><td>{$data['zone_name']}</td></tr>";
                    echo "<tr><th style='font-weight: bold;'>District</th><td>{$data['district_name']}</td></tr>";
                }
                if($data['team_name'] == 'Team 1'){
                    echo "<tr><th colspan='2' style='text-align: center; font-weight: bold;'>Registration No- KLIBFQ03-{$data['id']} A </th></tr>";
                }
                else{
                    echo "<tr><th colspan='2' style='text-align: center; font-weight: bold;'>Registration No- KLIBFQ03-{$data['id']} B </th></tr>";

                }
               

                echo "<tr><th colspan='2' style='text-align: center; font-weight: bold;'>{$data['team_name']} Details</th></tr>";

                // Participant Details Header
                echo "<tr>";
                echo "<th style='text-align: center; font-weight: bold; '>Participant 1</th>";
                echo "<th style='text-align: center; font-weight: bold;'>Participant 2</th>";
                echo "</tr>";

                // Participant Names
                echo "<tr>";
                echo "<td><b>Name:</b> {$data['team_mem1_name']}</td>";
                echo "<td><b>Name:</b> {$data['team_mem2_name']}</td>";
                echo "</tr>";

                // Participant Classes
                if ($data['category'] !== 'Public') {
                    echo "<tr>";
                    echo "<td><b>Class:</b> {$data['team_mem1_class']}</td>";
                    echo "<td><b>Class:</b> {$data['team_mem2_class']}</td>";
                    echo "</tr>";
                }
                // Participant Genders
                echo "<tr>";
                echo "<td><b>Gender:</b> {$data['team_mem1_gender']}</td>";
                echo "<td><b>Gender:</b> {$data['team_mem2_gender']}</td>";
                echo "</tr>";

                // Participant Emails
                echo "<tr>";
                echo "<td><b>Email:</b> {$data['team_mem1_email']}</td>";
                echo "<td><b>Email:</b> {$data['team_mem2_email']}</td>";
                echo "</tr>";

                // Participant Phones
                echo "<tr>";
                echo "<td><b>Phone:</b> {$data['team_mem1_cntct']}</td>";
                echo "<td><b>Phone:</b> {$data['team_mem2_cntct']}</td>";
                echo "</tr>";

                echo "</table>";
               
            } else {
                echo "<p class='text-danger'>No registration details found for the provided phone number.</p>";
            }
        } else {
            echo "<p class='text-danger'>Error executing query: {$stmt->error}</p>";
        }
    } else {
        echo "<p class='text-danger'>Please provide a valid phone number.</p>";
    }
}
?>