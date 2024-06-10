<?php include "header.php";?>

<div class="container-fluid p-0">

    <div class="w-100">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item col-6" role="presentation">
                <button class="nav-link w-100 active p-0 rounded-0" id="pills-procedure-tab" data-bs-toggle="pill" data-bs-target="#pills-procedure" type="button" role="tab" aria-controls="pills-procedure" aria-selected="true">
                    <h1 class="p-3 mb-0">Evacuation Procedure</h1>
                </button>
            </li>
            <li class="nav-item col-6" role="presentation">
                <button class="nav-link w-100 p-0 rounded-0" id="pills-guideline-tab" data-bs-toggle="pill" data-bs-target="#pills-guideline" type="button" role="tab" aria-controls="pills-guideline" aria-selected="false">
                    <h1 class="p-3 mb-0">Evacuation Guideline</h1>
                </button>
            </li>
        </ul>
    </div>

   

    <div class="tab-content container-fluid mt-3" id="pills-tabContent">

        <!-- PROCEDURE TAB -->
        <div class="tab-pane fade show active" id="pills-procedure" role="tabpanel" aria-labelledby="pills-procedure-tab">
            <div class=" card container py-3 px-5 fs-4">

                <div class="h1 text-center">How to evacuate safely</div>
                <ol class="ps-3 ">
                    <li>When you hear a fire alarm, take it seriously. Stay calm and focused and leave immediately.</li>
                    <li>Exit the building as quickly as possible.</li>
                    <li>Move away from the building and assist anyone who needs help evacuating.</li>
                    <li>Head and gather at the designated assembly point. </li> 
                    <li>Ensure everyone from your group is present.</li>
                    <li>Call for Help. Dial emergency services and report the fire an provide accurate information.</li>
                    <li>Stay informed about the situation. Follow official announcements.</li>
                </ol>
            </div>

            

        </div>

        


        <!-- GUIDELINE TAB -->
        <div class="tab-pane fade" id="pills-guideline" role="tabpanel" aria-labelledby="pills-guideline-tab">
            <div>
                <table class="guidelineTable table table-responsive table-bordered  w-100 fs-4 ">
                    <tr>
                        <td class="w-50 text-center bg-success text-white">Do</td>
                        <td class="w-50 text-center bg-danger text-white">Dont's</td>
                    </tr>
                    <tr>
                        <td class="w-50">Sound the alarm</td>
                        <td class="w-50">Use the elevator</td>
                    </tr>
                    <tr>
                        <td class="w-50">Evacuate through fire escape following the evacuation route</td>
                        <td class="w-50">Open doors that are hot</td>
                    </tr>
                    <tr>
                        <td class="w-50">Turn off electrical equipment</td>
                        <td class="w-50">Return to get belongings</td>
                    </tr>
                    <tr>
                        <td class="w-50">Gather at assembly point</td>
                        <td class="w-50">Jump through the window</td>
                    </tr>
                </table>
            </div>
           
        </div>
    </div>

</div>
</body>

<script>
    document.getElementById("navProcedure").classList.add("active");
    // document.getElementById("pills-procedure-tab").addEventListener("click", procedureActive);
    // document.getElementById("pills-guideline-tab").addEventListener("click", guidelineActive);

    // function procedureActive(){ 
    //     document.getElementById("pills-guideline-tab").classList.add("bg-body-secondary",);
    //     document.getElementById("pills-procedure-tab").classList.remove("bg-body-secondary");
    //     document.getElementById("pills-procedure-tab").classList.add("navlinkActive");
    //     document.getElementById("pills-guideline-tab").classList.remove("navlinkActive");
    // }

    // function guidelineActive(){
    //     document.getElementById("pills-procedure-tab").classList.add("bg-body-secondary");
    //     document.getElementById("pills-guideline-tab").classList.remove("bg-body-secondary");
    //     document.getElementById("pills-procedure-tab").classList.remove("navlinkActive");
    //     document.getElementById("pills-guideline-tab").classList.add("navlinkActive");
    // }
</script>

</html>