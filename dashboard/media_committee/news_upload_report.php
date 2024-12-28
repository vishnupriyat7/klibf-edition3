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
                            <h5 class="card-title mb-0">News Upload Report</h5>
                        </div>
                        <div class="card-body overflow-auto">
                            <!-- <button onclick="exportTableToExcel('example', 'publisher_book_discussion_report')"
                                class="btn btn-primary">Export Table Data To Excel File</button> -->
                            <div class="card" style="width:85vw;">
                                <table id="example" class="table table-bordered dt-responsive nowrap table-striped"
                                    style="font-style:normal; font-size: 12px;">
                                    <thead class="text-center">
                                        <tr>

                                            <th data-ordering="false">Sl.No</th>
                                            <th data-ordering="false">Action</th>
                                            <th data-ordering="false">News Paper</th>
                                            <th data-ordering="false">News Title</th>
                                            <th data-ordering="false">News Image</th>
                                            <th data-ordering="false">Date</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php

                                        $qry_news_upload = "SELECT * FROM newspaper_upload ";
                                        $news_uploads = mysqli_query($con, $qry_news_upload);
                                        $counter = 0;
                                        while ($news_upload = mysqli_fetch_array($news_uploads)) {
                                            $id = $news_upload['id'];
                                            $news_paper = $news_upload['news_paper'];
                                            $news_title = $news_upload['img_title'];
                                            $news_img = $news_upload['img'];
                                            $news_date = $news_upload['news_date'];

                                        ?>
                                            <tr class="text-center">
                                                <td><?= ++$counter; ?></td>
                                                <td>
                                                    <a href='edit_news.php?id=<?= $id; ?>' class='btn btn-sm btn-primary' title='Edit'>
                                                        <i class='mdi mdi-pencil'></i>
                                                    </a>
                                                    <a href='delete_news.php?id=<?= $id; ?>' class='btn btn-sm btn-danger' title='Delete' onclick="return confirm('Are you sure you want to delete this News?');">
                                                        <i class='mdi mdi-delete'></i>
                                                    </a>
                                                </td>
                                                <td><?= $news_paper; ?></td>
                                                <td><?= $news_title; ?></td>

                                                <td>
                                                    
                                                <img src="<?= $base_url ?>/dashboard/media_committee/news_uploads/<?= $news_img; ?>"
                                                height="70vh">
                                                
                                              </td>

                                                <td><?= $news_date; ?></td>


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