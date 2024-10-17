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
                <table id="preview-tab">
                    <tr>
                        <td class="td-head" colspan="2">
                            <label>House / Organization</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Name:</label>
                        </td>
                        <td>
                            <label id="org_name_lab"></label>
                            <input type="text" id="org_name_prv" hidden>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Year of Establishment</label>
                        </td>
                        <td>
                            <label id="yers_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Registration No.</label>
                        </td>
                        <td>
                            <label id="reg_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>GST No.</label>
                        </td>
                        <td>
                            <label id="gst_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Language(s) in which books are published:</label>
                        </td>
                        <td>
                            <label id="lang_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>No.of Titles Published</label>
                        </td>
                        <td>
                            <label id="titl_lab"></label>
                        </td>
                    </tr>
                    <tr id="nature_row">
                        <td>
                            <label>Nature of Organization</label>
                        </td>
                        <td>
                            <label id="natr_lab"></label>
                        </td>
                    </tr>
                    <tr id="nature_new"></tr>

                    <tr>
                        <td class="td-head" colspan="2">
                            <label>Head of the Publishing House / Organization</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Name</label>
                        </td>
                        <td>
                            <label id="head_nam_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Address</label>
                        </td>
                        <td>
                            <label id="head_addr_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Mobile</label>
                        </td>
                        <td>
                            <label id="head_mob_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Email</label>
                        </td>
                        <td>
                            <label id="head_email_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Website</label>
                        </td>
                        <td>
                            <label id="head_site_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-head" colspan="2">
                            <label>Contact (In-charge) person for the fair</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Name</label>
                        </td>
                        <td>
                            <label id="prsn_nam_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Address</label>
                        </td>
                        <td>
                            <label id="prsn_addr_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Mobile</label>
                        </td>
                        <td>
                            <label id="prsn_mob_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Email</label>
                        </td>
                        <td>
                            <label id="prsn_email_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Whatsapp No.</label>
                        </td>
                        <td>
                            <label id="prsn_wp_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Facia</label>
                        </td>
                        <td>
                            <label id="fascia_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Remarks</label>
                        </td>
                        <td>
                            <label id="rmrk_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Estimated amount for stall booking</td>
                        </td>
                        <td>
                        <label id="3x3amt_lab"></label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label> Logo of Publishing House / Organization</label>
                        </td>
                        <td>
                            <label id="logo_lab"></label>
                        </td>
                    </tr>
                </table>
                <br>
            </form>
            <div class="row">
                <input type="checkbox" name="terms" required="required" class="text-justify" id="terms">&nbsp;I/We,&nbsp;<span id="org_name_term"></span>, hereby agree to abide by the <a href="terms&condition.php" target="_blank"><span style="color:blue"> &nbsp;Rules & Regulations</span> </a> of the Kerala Legislature International Book Festival 2022 (KLIBF 2022) given in the Terms and Conditions and as decided by the Kerala Legislature Secretariat from time to time.
            </div>
            <!-- <button  type=" button" class="btn btn-default" id="download">Print</button> -->
        </div>
    </div>
</section>