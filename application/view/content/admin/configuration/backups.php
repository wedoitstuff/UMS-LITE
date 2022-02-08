
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Card-->


            <div class="card ">
                <div class="card-header">
                    <h3 class="card-title">Backup Management</h3>
                    <div class="card-toolbar">
                        <button type="button" class="btn btn-light-info btn-sm" id="kt_button_2" onclick="location.href='backup/db';">
                                        <span class="indicator-label">
                                            New DB Backup
                                        </span>
                            <span class="indicator-progress">
                                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                        </button>

                        <button type="button" class="btn btn-light btn-sm ms-5" id="kt_button_1" onclick="location.href='backup/config';">
                                        <span class="indicator-label">
                                            Download configuration
                                        </span>
                            <span class="indicator-progress">
                                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                        </button>
                    </div>
                </div>
                <div class="card-body py-0">
                    <div class = "row py-2 mt-4">
                        <div class="col">
                            <p class = 'lead'>Database backups occur at <strong>midnight</strong> every night.</p>
                        </div>
                    </div>
                    <table id="kt_datatable_example_1" class="table table-row-bordered gy-5 mt-4">
                        <thead>
                        <tr class="fw-bold fs-6 text-muted">
                            <th>File name</th>
                            <th>Date Created</th>
                            <th>File Size</th>
                            <th>Download</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(count(Backup::list('database')) < 1){
                            echo "<tr><td colspan='4' class='text-center'>OMG You have no backups!</td></tr>";
                        }else{
                            foreach(Backup::list('database') as $tr){echo $tr;}
                        }
                        ?>
                        </tfoot>
                        </table>
                    <div class="text-center px-4">
                        <img class="mw-100 mh-300px" alt="" src="<?=  "themes/" . Config::get("THEME"); ?>/assets/media/illustrations/sigma-1/14<?= UserModel::userMode() == 1 ? '-dark' : '' ?>.png" />
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<!--end::Content-->
<script>


    // Element to indecate
    var button = document.querySelector("#kt_button_1");

    // Handle button click event
    button.addEventListener("click", function() {
        // Activate indicator
        button.setAttribute("data-kt-indicator", "on");
        setTimeout(function() {
            button.removeAttribute("data-kt-indicator");
        }, 3000);
    });

    var button2 = document.querySelector("#kt_button_2");

    // Handle button click event
    button2.addEventListener("click", function() {
        // Activate indicator
        button2.setAttribute("data-kt-indicator", "on");
        setTimeout(function() {
            button2.removeAttribute("data-kt-indicator");
        }, 3000);
    });






</script>
