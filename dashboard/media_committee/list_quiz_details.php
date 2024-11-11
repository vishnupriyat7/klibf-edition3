<?php
include "../z_db.php";
$zone_id = $_POST['zone_id'];
$category_id = $_POST['category_id'];
$district_id = $_POST['district_id'];
$query = "SELECT a.*, b.category as category, c.name as zone, d.dt_name as dist_name FROM reg_quiz a join quiz_category b on a.category_id = b.id join quiz_zone c on a.zone_id = c.id join district d on a.district_id = d.id where a.category_id = $category_id and a.zone_id = $zone_id and a.district_id = $district_id ORDER BY id DESC";
$reg_quiz_zone = mysqli_query($con, $query);
$counter = 0;
$quizHtmlData = "";
$quizDatas = $reg_quiz_zone->fetch_all();
?>
<div class="card" style="width:150vw;">
<table id="example" class="table table-bordered dt-responsive nowrap table-striped"
    style="font-style:normal; font-size: 12px;">
    <thead class="text-center">
        <tr>
            <th data-ordering="false" rowspan="2">Sl.No</th>
            <th data-ordering="false" rowspan="2">Reg.No</th>
            <th data-ordering="false" rowspan="2">Category</th>
            <th data-ordering="false" rowspan="2">Zone</th>
            <th data-ordering="false" rowspan="2">District</th>
            <th data-ordering="false" rowspan="2">Institute Name</th>
            <th data-ordering="false" rowspan="2">Institute Address</th>
            <th data-ordering="false" rowspan="2">Principal's Contact</th>
            <th data-ordering="false" rowspan="2">In-Charge Name</th>
            <th data-ordering="false" rowspan="2">In-Charge Contact</th>                                        
            <th data-ordering="false" colspan="5">Team1 Member1 Details</th>
            <th data-ordering="false" colspan="5">Team1 Member2 Details</th>
            <th data-ordering="false" colspan="5">Team2 Member1 Details</th>
            <th data-ordering="false" colspan="5">Team2 Member2 Details</th>
            <th data-ordering="false" rowspan="2">Date Registered</th>
            <th>Action</th>
        </tr>
        <tr>
        <th data-ordering="false">Name</th>
            <th data-ordering="false">Class / Course</th>
            <th data-ordering="false">Gender</th>
            <th data-ordering="false">Phone</th>
            <th data-ordering="false">Email</th>
            <th data-ordering="false">Name</th>
            <th data-ordering="false">Class / Course</th>
            <th data-ordering="false">Gender</th>
            <th data-ordering="false">Phone</th>
            <th data-ordering="false">Email</th>
            <th data-ordering="false">Name</th>
            <th data-ordering="false">Class / Course</th>
            <th data-ordering="false">Gender</th>
            <th data-ordering="false">Phone</th>
            <th data-ordering="false">Email</th>
            <th data-ordering="false">Name</th>
            <th data-ordering="false">Class / Course</th>
            <th data-ordering="false">Gender</th>
            <th data-ordering="false">Phone</th>
            <th data-ordering="false">Email</th>
        </tr>
    </thead>
    <tbody id="quiz-data-list">
        <?php foreach($quizDatas as $quiz_zone) { ?>
        <tr> <td><?=++$counter?><td>
        <td>KLIBF03-Q<?=$quiz_zone[0]?></td>
         <td><?=$quiz_zone[32]?></td>
         <td><?=$quiz_zone[33]?></td>
         <td><?=$quiz_zone[34]?></td>
         <td><?=$quiz_zone[4]?></td>
         <td><?=$quiz_zone[5]?></td>
         <td><?=$quiz_zone[6]?></td>
         <td><?=$quiz_zone[7]?></td>
         <td><?=$quiz_zone[8]?></td>
         <td><?=$quiz_zone[9]?></td>
         <td><?=$quiz_zone[10]?></td>
         <td><?=$quiz_zone[11]?></td>
         <td><?=$quiz_zone[13]?></td>
         <td><?=$quiz_zone[12]?></td>
         <td><?=$quiz_zone[15]?></td>
         <td><?=$quiz_zone[16]?></td>
         <td><?=$quiz_zone[17]?></td>
        <td><?=$quiz_zone[19]?></td>
         <td><?=$quiz_zone[18]?></td>
         <td><?=$quiz_zone[21]?></td>
         <td><?=$quiz_zone[22]?></td>
         <td><?=$quiz_zone[23]?></td>
         <td><?=$quiz_zone[25]?></td>
         <td><?=$quiz_zone[24]?></td>
         <td><?=$quiz_zone[26]?></td>
         <td><?=$quiz_zone[27]?></td>
         <td><?=$quiz_zone[28]?></td>
         <td><?=$quiz_zone[30]?></td>
         <td><?=$quiz_zone[29]?></td>
         <td><?=$quiz_zone[31]?></td>
         <td>     </td>
</tr>
<?php } ?>
    </tbody>
</table>
</div>


