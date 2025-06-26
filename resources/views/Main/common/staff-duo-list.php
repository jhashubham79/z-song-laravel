
<div class="row pt-md-3 mb-md-0 mb-2 border-md-0 border-bottom border-dark-primary-2">
    <div class="col-6 border-md-0 border-end border-dark-primary-2 px-md-3 px-4">
        <div class="dropdown ">
            <button class="btn border-0 text-primary text-uppercase text-small px-0 d-flex align-items-center " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Refine by <i class="fa-equalizer fs-5 ms-3"></i>
            </button>
            <div class="dropdown-menu bg-dark-bg rounded-0 border-dark-primary-2">
                <ul class="dropdown-list">
                    <li><a class="dropdown-item text-small d-inline-block pe-3 position-relative" href="#">Action</a></li>
                    <li><a class="dropdown-item text-small d-inline-block pe-3 position-relative" href="#">Another action</a></li>
                    <li><a class="dropdown-item text-small d-inline-block pe-3 position-relative" href="#">Something else here</a></li>
                    <li><a class="dropdown-item text-small d-inline-block pe-3 position-relative" href="#">Action</a></li>
                    <li><a class="dropdown-item text-small d-inline-block pe-3 position-relative" href="#">Another action</a></li>
                    <li><a class="dropdown-item text-small d-inline-block pe-3 position-relative" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-6 d-md-flex justify-content-md-end px-md-3 px-4">
        <div class="dropdown">
            <button class="btn border-0 text-primary text-uppercase text-small px-0 d-flex align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Show All <span class="arrow-bottom arrow-bottom-xl arrow-bottom-primary ms-3 mb-2"></span>
            </button>
            <div class="dropdown-menu bg-dark-bg rounded-0 border-dark-primary-2">
                <ul class="dropdown-list">
                    <li><a class="dropdown-item text-small d-inline-block pe-3 position-relative" href="#">Action</a></li>
                    <li><a class="dropdown-item text-small d-inline-block pe-3 position-relative" href="#">Another action</a></li>
                    <li><a class="dropdown-item text-small d-inline-block pe-3 position-relative" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
        <div class="col-lg-6 gallery-item-duo">
            <div class="row mx-0 position-relative mt-5 mb-4">
                <div class="position-absolute px-0 start-0 bottom-100">
                    <div class="px-3 bg-dark-bg position-relative d-inline-block z-2 text-md-small text-uppercase text-primary gallery-duo-title">Exclusive duo</div>
                    <div class="w-100 border-top border-light-black-4 position-absolute top-50 start-0 translate-middle-y"></div>
                </div>
                <div class="col-6 px-0">
                    <a href="./single-profile.php">
                        <span class="media-holder d-block position-relative">
                            <img src="./images/staff/duo1.jpg" alt="Staff Image">
                            <span class="position-absolute top-0 start-0 batch-notAbailable w-100 d-flex justify-content-center">
                                <img src="./images/not-available.svg" width="144" height="14" loading="lazy" alt="">
                            </span>
                        </span>
                    </a>
                    <span class="d-block text-center mt-3 position-relative">
                        <span class="d-block f300 mb-1"><a class="h3" href="#">Olivia</a></span>
                        <span class="d-block text-small text-uppercase text-white lh-1 mb-1 tagline">Fashion model</span>
                        <span class="text-small text-white-5 lh-1 text-uppercase d-block location">Paddington</span>
                    </span>
                </div>
                <div class="col-6 px-0">
                    <a href="./single-profile.php">
                        <span class="media-holder d-block position-relative">
                            <img src="./images/staff/duo2.png" alt="Staff Image">
                        </span>
                        <span class="position-absolute top-0 end-0 mt-1 batch-abailable">
                            <img src="./images/available.svg" width="72" height="32" loading="lazy" alt="">
                        </span>
                    </a>
                    <span class="d-block text-center mt-3 position-relative">
                        <span class="d-block f300 mb-1"><a class="h3" href="#">Olivia</a></span>
                        <span class="d-block text-small text-uppercase text-white lh-1 mb-1 tagline">Fashion model</span>
                        <span class="text-small text-white-5 lh-1 text-uppercase d-block location">Paddington</span>
                    </span>
                </div>
                <span class="favourites d-flex justify-content-center align-items-center bottom-0 start-50 translate-middle-x mb-4 position-absolute">                            
                    <i class="fa-heart-f fs-4 save-favourite"></i>
                    <span class="favourites-message">
                        <span class="text"></span>
                        <span class="favourites-close"></span>
                    </span>
                </span>
            </div>
        </div>    
    <?php for ($i = 0; $i < 5; $i++) { ?>
        <div class="col-lg-6 gallery-item-duo">
            <div class="row mx-0 position-relative mt-5 mb-4">
                <div class="position-absolute px-0 start-0 bottom-100">
                    <div class="px-3 bg-dark-bg position-relative d-inline-block z-2 text-md-small text-uppercase text-primary gallery-duo-title">Exclusive duo</div>
                    <div class="w-100 border-top border-light-black-4 position-absolute top-50 start-0 translate-middle-y"></div>
                </div>
                <div class="col-6 px-0">
                    <a href="./single-profile.php">
                        <span class="media-holder d-block position-relative">
                            <img src="./images/staff/duo1.jpg" alt="Staff Image">
                            <span class="position-absolute top-0 start-0 mt-1 batch-abailable">
                                <img src="./images/available.svg" width="72" height="32" loading="lazy" alt="">
                            </span>
                        </span>
                    </a>
                    <span class="d-block text-center mt-3 position-relative">
                        <span class="d-block f300 mb-1"><a class="h3" href="#">Olivia</a></span>
                        <span class="d-block text-small text-uppercase text-white lh-1 mb-1 tagline">Fashion model</span>
                        <span class="text-small text-white-5 lh-1 text-uppercase d-block location">Paddington</span>
                    </span>
                </div>
                <div class="col-6 px-0">
                    <a href="./single-profile.php">
                        <span class="media-holder d-block position-relative">
                            <img src="./images/staff/duo2.png" alt="Staff Image">
                        </span>
                        <span class="position-absolute top-0 end-0 mt-1 batch-abailable">
                            <img src="./images/available.svg" width="72" height="32" loading="lazy" alt="">
                        </span>
                    </a>
                    <span class="d-block text-center mt-3 position-relative">
                        <span class="d-block f300 mb-1"><a class="h3" href="#">Olivia</a></span>
                        <span class="d-block text-small text-uppercase text-white lh-1 mb-1 tagline">Fashion model</span>
                        <span class="text-small text-white-5 lh-1 text-uppercase d-block location">Paddington</span>
                    </span>
                </div>
                <span class="favourites d-flex justify-content-center align-items-center bottom-0 start-50 translate-middle-x mb-4 position-absolute">                            
                    <i class="fa-heart-f fs-4 save-favourite"></i>
                    <span class="favourites-message">
                        <span class="text"></span>
                        <span class="favourites-close"></span>
                    </span>
                </span>
            </div>
        </div>        
    <?php } ?>    
</div>