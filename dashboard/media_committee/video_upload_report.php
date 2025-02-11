<?php include "../header.php"; ?>
<?php include "sidebar.php"; ?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Report</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <a class="dropdown-item" href="../logout.php">
                                    <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i>
                                    <span class="align-middle" data-key="t-logout">Logout</span>
                                </a>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Video Upload Report</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <!-- <button onclick="exportTableToExcel('example', 'publisher_book_discussion_report')"
                                class="btn btn-primary">Export Table Data To Excel File</button> -->
                            <div class="card" style="width:100vw;">
                                <table id="example" class="table table-bordered dt-responsive nowrap table-striped"
                                    style="font-style:normal; font-size: 12px;">
                                    <thead class="text-center">
                                        <tr>

                                            <th data-ordering="false">Sl.No</th>
                                            <th data-ordering="false">Action</th>
                                            <th data-ordering="false">Video Category</th>
                                            <th data-ordering="false">Video Details</th>
                                            <th data-ordering="false">Video Links</th>
                                            <th data-ordering="false">Date</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php

                                        $qry_video_upload = "SELECT * FROM video_dtls_upload ";
                                        $video_uploads = mysqli_query($con, $qry_video_upload);
                                        $counter = 0;
                                        while ($video_upload = mysqli_fetch_array($video_uploads)) {
                                            $id = $video_upload['id'];
                                            $video_category = $video_upload['video_ctgry'];
                                            $video_details = $video_upload['video_dtls'];
                                            $video_link = $video_upload['video_link'];
                                            $video_date = $video_upload['video_date'];

                                        ?>
                                            <tr>
                                                <td><?= ++$counter; ?></td>
                                                <td>
                                                    <a href='edit_video.php?id=<?= $id; ?>' class='btn btn-sm btn-primary' title='Edit'>
                                                        <i class='mdi mdi-pencil'></i>
                                                    </a>
                                                    <a href='delete_video.php?id=<?= $id; ?>' class='btn btn-sm btn-danger' title='Delete' onclick="return confirm('Are you sure you want to delete this video?');">
                                                        <i class='mdi mdi-delete'></i>
                                                    </a>
                                                </td>
                                                <td><?= $video_category; ?></td>
                                                <td><?= $video_details; ?></td>

                                                <td><?= $video_link; ?></td>

                                                <td><?= $video_date; ?></td>


                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <?php include "../footer.php"; ?>