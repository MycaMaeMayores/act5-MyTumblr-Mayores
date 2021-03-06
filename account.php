<?php
session_start();

if (isset($_SESSION['ses_username'])===false){
    header("Location: index.php?logfirst");
} else if (isset($_REQUEST['logout'])===true){
    session_destroy();
    header("Location: index.php?logout");
}

?>


<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Portfolio Page</title>

                                <link href='css/bootstrap.min.css' rel='stylesheet'>

                                <script type='text/javascript' src='js/jquery.min.js'></script>

                                <style>.profile-head {
    transform: translateY(5rem)
}
.cover {
    background-image: url('images/bg.jpg');
    background-size: cover;
    background-repeat: no-repeat;

}

body {
    background: #7b80b5;
    min-height: 100vh;
    overflow-x: hidden
}</style>
                                </head>
                                <body oncontextmenu='return false' class='snippet-body'>
                                <div class="row py-10 px-10">
    <div class="col-md-5 mx-auto">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-3 pb-0 cover">
                <div class="media align-items-end profile-head">
                    <div class="profile mr-5"><img src="images/my.png" alt="..." width="150" >
                        <a href="?logout" class="btn btn-outline-dark btn-sm btn-block mt-1 ">Sign Out</a>


                    </div>
                    <div class="media-body mb-5 text-white">
                        <h4 class="mt-5 mb-4"> <?php echo $_SESSION['ses_fullname']; ?> </h4>
                        <p class="small mb-5"> <i class="fas fa-map-marker-alt mr-1"></i>
                            <?php echo $_SESSION['ses_address']; ?>
                         </p>
                    </div>
                </div>
            </div>
            <div class="bg-light p-4 d-flex justify-content-end text-center">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">1,500</h5><small class="text-muted"> <i class="fas fa-image mr-1"></i>Photos</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">1M</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Followers</small>
                    </li>
                    <li class="list-inline-item">
                        <h5 class="font-weight-bold mb-0 d-block">250</h5><small class="text-muted"> <i class="fas fa-user mr-1"></i>Following</small>
                    </li>
                </ul>
            </div>

            <div class="px-4 py-3">
                <h5 class="mb-0">Expertise </h5>
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">Web Developer</p>
                    <p class="font-italic mb-0">Mobile App Developer</p>
                    <p class="font-italic mb-0">Photographer/Videographer</p>
                </div>
            </div>

            <div class="py-4 px-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="mb-0">Recent Captures</h5><a href="#" class="btn btn-link text-muted">Show all</a>
                </div>
                <div class="row">
                    
                    <div class="col-lg-4 mb-2 pr-lg-1 p-2"><img src="images/one.jpg" alt="" class="img-fluid rounded shadow-sm"></div>              
                    <div class="col-lg-4 mb-2 pr-lg-1 p-2"><img src="images/fpink.jpg" alt="" class="img-fluid rounded shadow-sm"></div>  
                    <div class="col-lg-4 mb-2 pr-lg-1 p-2"><img src="images/two.jpg" alt="" class="img-fluid rounded shadow-sm"></div>               
                    <div class="col-lg-6 pr-lg-1 mb-1 p-2"><img src="images/cousin.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                    <div class="col-lg-6 pr-lg-1 p-2"><img src="images/cards.jpg" alt="" class="img-fluid rounded shadow-sm"></div>
                </div> 
            </div>

            <div class="px-4 py-3">
                <div class="p-4 rounded shadow-sm bg-light">
                    <p class="font-italic mb-0">All Rights Reserved. Copyright 2022</p>
                </div>
            </div>



        </div>
    </div>
</div>
                                <script type='text/javascript' src='js/bootstrap.bundle.min.js'></script>
                                </body>
                            </html>