
<?php include('./common/header.php') ?>

<div class="container container-small pt-lg-5 pt-3 pb-5">
    <div class="d-lg-flex position-relative align-items-center mb-4 pb-1 mb-lg-5">
        <a href="./news-details.php" class="media-holder blogThumb-big flex-shrink-0 me-xl-4 me-lg-3 position-relative d-block mb-lg-0 mb-3">
            <img src="./images/blog/blog.jpg" width="369" height="267" alt="Blog Image">
        </a>
        <div class="position-relative">
            <span class="batch-new py-lg-1 px-2 bg-primary d-inline-block text-black f700 mb-2 position-lg-down-absolute top-0 end-0">NEW</span>
            <span class="d-block f300 text-md-small text-light-primary-1 text-uppercase mb-1">14 jun / 2024</span>
            <h1 class="h3 mb-3"><a class="f300 text-primary text-hover-white lh-base" href="./news-details.php">Where to take your escort for a holiday?</a></h1>
            <p class="text-md-small lh-base">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since..</p>
        </div>
    </div>
    <div class="col-lg-10 py-lg-4 mb-5 px-lg-0 px-5 mx-auto">
        <div class="divider mx-auto border-top border-dark-primary-2"></div>
    </div>

    <div class="row">
        <?php for ($i = 0; $i < 8; $i++) { ?>
            <div class="col-lg-6">
                <div class="d-flex position-relative align-items-center mb-2 pb-2">
                    <a href="./news-details.php" class="media-holder blogThumb blogThumb-md flex-shrink-0 me-3 position-relative">
                        <img src="./images/blog/serv.jpg" width="122" height="122" loading="lazy" alt="Blog Image">
                    </a>
                    <div>
                        <span class="d-block f300 text-md-small text-light-primary-1 text-uppercase mb-1">14 jun / 2024</span>
                        <a class="h4 f300 text-primary text-hover-white" href="./news-details.php">Where to take your escort for a holiday?</a>
                    </div>
                </div>
            </div>
        <?php } ?>

        <ul class="pagination d-flex justify-content-center align-items-center pt-md-5 pt-4 mt-3">
            <li class="prev">
                <a class="d-flex border border-primary rounded-circle align-items-center justify-content-center" href="#">
                    <span class="arrow arrow-left arrow-left-white"></span>
                </a>
            </li>
            <li>
                <a class="d-flex border border-primary rounded-circle align-items-center justify-content-center text-small" href="#">1</a>
            </li>
            <li class="active">
                <a class="d-flex border border-primary rounded-circle align-items-center justify-content-center text-small" href="#">2</a>
            </li>
            <li>
                <a class="d-flex border border-primary rounded-circle align-items-center justify-content-center text-small" href="#">3</a>
            </li>
            <li>
                <a class="d-flex border border-primary rounded-circle align-items-center justify-content-center text-small" href="#">4</a>
            </li>
            <li class="prev">
                <a class="d-flex border border-primary rounded-circle align-items-center justify-content-center" href="#">
                    <span class="arrow arrow-right arrow-right-white"></span>
                </a>
            </li>
        </ul>
    </div>
</div>

<?php include('./common/footer.php') ?>