<?php
ini_set('display_errors', '0');
include "header.php";
include "sidebar_publisher.php";
$user_id = $user['id'];
// var_dump($user_id);die;
?>
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
                        <h4 class="mb-sm-0">Special Event Proposal</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Profile</a></li> -->
                                <!-- <li class="breadcrumb-item active">Add</li> -->
                                <a class="dropdown-item" href="logout.php"><i class="mdi mdi-book_coverut text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-book_coverut">Logout</span></a>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <br><br>
            <div class="row">
                <!--end col-->
                <div class="col-xxl-9">
                    <div class="card mt-xxl-n5">
                        <!-- <div class="card-header">
                                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="false">
                                                <i class="fas fa-home"></i> New Blog
                                            </a>
                                        </li>
                                    </ul>
                                </div> -->
<?php if (isset($_POST['disc_save'])) {
     $status = "OK";
     $msg = "";
}?>
                        <div class="card-body p-4">
                            <div class="tab-content">
                                <form action="" method="post" enctype="multipart/form-data">
                                   <div class="row d-flex bg-grey">
                                        <div class="form-group col-6">
                                            <label>Name of Event</label>
                                            <input type="text" class="form-control" name="event_name" id="event_name" placeholder="Name of Event">
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Dignitaries / Celebrities / Guests</label>
                                            <textarea class="form-control" name="dignitaries" id="dignitaries" placeholder="Dignitaries / Celebrities / Guests"></textarea>
                                        </div>
                                        <div class="form-group col-12">
                                            <label>Brief Description</label>
                                            <textarea class="form-control" name="brf_descrptn" id="brf_descrptn" placeholder="Description"></textarea>
                                        </div>
                                        <div class="form-group col-6">
                                            <br>
                                            <label>Contact Person Name</label>
                                            <input type="text" class="form-control" name="prsn_cntct" id="prsn_cntct" placeholder="Contact Person Name">
                                        </div>
                                        <div class="form-group col-6">
                                            <br>
                                            <label>Contact No.</label>
                                            <input type="text" class="form-control" name="spcl_mobile" id="spcl_mobile" placeholder="Contact No.">
                                        </div>
                                        <div class="form-group col-6">
                                            <br>
                                            <label>Email Id</label>
                                            <input type="email" class="form-control" name="spcl_email" id="spcl_email" placeholder="Email Id">
                                        </div>
                                        <div class="form-group col-6">
                                            <br>
                                            <label>Remarks / Other information</label>
                                            <input class="form-control" name="spcl_remark" id="spcl_remark" placeholder="Remarks / Other information">
                                        </div>
                                    </div><br>
                                    <div class="col-lg-12">
                                        <button type="submit" name="spcl_save" class="btn btn-primary" id="spcl_save">Save</button>
                                        
                                    </div>
                                </form>
                            </div>
                            <!--end tab-pane-->

                            <!--end tab-pane-->

                            <!--end tab-pane-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

<?php include "footer.php"; ?>