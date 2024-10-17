<style>
    #preview {
        font-family: Arial, Helvetica, sans-serif;
        /* border-collapse: collapse; */
        width: 100%;
        color: black;
    }

    #preview td,
    th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #preview th {
        text-align: center;
        /* font-size: xx-large; */
        color: black;
        /* font-weight: bold; */
    }

    /* #preview-stall td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    } */

    #preview tr:nth-child(odd) {
        background-color: #f2f2f2;
    }

    #preview tr:hover {
        background-color: #ddd;
    }

    /* #preview-stall th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        background-color: #f2f2f2;
        color: black;
        font-size: medium;
    } */

    .td-head {
        text-align: center;
        font-size: medium;
        color: black;
        font-weight: bold;
    }
</style>
<section id="preview" class="preview-area align-items-center">
    <!-- <button id="download">Download</button> -->
    <div class="container align-items-center">
        <div class="row">
            <form>
                <table id="preview-quiz-tab">
                    <tr>
                        <td>
                            <label>Category</label>
                        </td>
                        <td>
                            <label id="category_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Name of Institution</label>
                        </td>
                        <td>
                            <label id="inst_name_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Address of Institution</label>
                        </td>
                        <td>
                            <label id="addr_inst_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">Details of first partcipant</td>
                    </tr>
                    <tr>
                        <td>
                            <label>Name</label>
                        </td>
                        <td>
                            <label id="part1_nme_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Date of Birth</label>
                        </td>
                        <td>
                            <label id="part1_dob_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Gender</label>
                        </td>
                        <td>
                            <label id="part1_gndr_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Address</label>
                        </td>
                        <td>
                            <label id="part1_addr_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Contact Number</label>
                        </td>
                        <td>
                            <label id="part1_cntct_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Email ID</td>
                        <td>
                            <label id="part1_email_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">Details of second partcipant</td>
                    </tr>
                    <tr>
                        <td>
                            <label>Name</label>
                        </td>
                        <td>
                            <label id="part2_nme_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Date of Birth</label>
                        </td>
                        <td>
                            <label id="part2_dob_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Gender</label>
                        </td>
                        <td>
                            <label id="part2_gndr_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Address</label>
                        </td>
                        <td>
                            <label id="part2_addr_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Contact Number</label>
                        </td>
                        <td>
                            <label id="part2_cntct_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>Email ID</td>
                        <td>
                            <label id="part2_email_lab"></label>
                        </td>
                    </tr>
                </table>
                <br>
            </form>
            <!-- <div class="row">
                <input type="checkbox" name="terms" required="required" class="text-justify" id="terms">&nbsp;I/We,&nbsp;<span id="org_name_term"></span>, hereby agree to abide by the <a href="terms&condition.php" target="_blank"><span style="color:blue"> &nbsp;Rules & Regulations</span> </a> of the Kerala Legislature International Book Festival 2022 (KLIBF 2022) given in the Terms and Conditions and as decided by the Kerala Legislature Secretariat from time to time.
            </div> -->
            <!-- <button  type=" button" class="btn btn-default" id="download">Print</button> -->
        </div>
    </div>
</section>