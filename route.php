<?php include "header.php";?>

<div class="container-fluid p-0">

    <div class="w-100">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item col-6" role="presentation">
                <button class="nav-link w-100 active p-0 rounded-0" id="pills-map-tab" data-bs-toggle="pill" data-bs-target="#pills-map" type="button" role="tab" aria-controls="pills-map" aria-selected="true">
                    <h1 class="p-3 mb-0">Evacuation Route Map</h1>
                </button>
            </li>
            <li class="nav-item col-6" role="presentation">
                <button class="nav-link w-100 p-0 rounded-0" id="pills-simulation-tab" data-bs-toggle="pill" data-bs-target="#pills-simulation" type="button" role="tab" aria-controls="pills-simulation" aria-selected="false">
                    <h1 class="p-3 mb-0">Evacuation Simulation</h1>
                </button>
            </li>
        </ul>
    </div>
    

    <div class="tab-content container mt-3" id="pills-tabContent">

        <!-- Evacuation Route -->
        <div class="tab-pane fade show active " id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
            <div id="carouselExampleIndicators" class="carousel slide w-auto " data-bs-theme="dark">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="##carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="##carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="##carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="##carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="##carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/Evacuation Route G.jpg" class="d-block m-auto img-fluid" alt="Evacuation Route G">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Evacuation Route Ground Floor</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Evacuation Route LG.jpg" class="d-block m-auto img-fluid" alt="Evacuation Route LG">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Evacuation Route Lower Ground Floor</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Evacuation Route 1F.jpg" class="d-block m-auto img-fluid" alt="Evacuation Route 1F">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Evacuation Route 1st Floor</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Evacuation Route 2F.jpg" class="d-block m-auto img-fluid" alt="Evacuation Route 2F">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Evacuation Route 2nd Floor</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/Evacuation Route 3F.jpg" class="d-block m-auto img-fluid" alt="Evacuation Route 3F">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Evacuation Route 3rd Floor</h5>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


        <!-- Simlator -->
        <div class="tab-pane fade" id="pills-simulation" role="tabpanel" aria-labelledby="pills-simulation-tab">
            <!-- <iframe src="" frameborder="0"></iframe> -->
            <?php include "LG_evacuation_model.html"?>
        </div>

    </div>

</div>
</body>

<script>
    document.getElementById("navRoute").classList.add("active");
    // document.getElementById("pills-map-tab").addEventListener("click", mapActive);
    // document.getElementById("pills-simulation-tab").addEventListener("click", faqActive);

    // function mapActive(){ 
    //     document.getElementById("pills-simulation-tab").classList.add("bg-body-secondary",);
    //     document.getElementById("pills-map-tab").classList.remove("bg-body-secondary");
    //     document.getElementById("pills-map-tab").classList.add("navlinkActive");
    //     document.getElementById("pills-simulation-tab").classList.remove("navlinkActive");
    // }

    // function faqActive(){
    //     document.getElementById("pills-map-tab").classList.add("bg-body-secondary");
    //     document.getElementById("pills-simulation-tab").classList.remove("bg-body-secondary");
    //     document.getElementById("pills-map-tab").classList.remove("navlinkActive");
    //     document.getElementById("pills-simulation-tab").classList.add("navlinkActive");
    // }
</script>

</html>