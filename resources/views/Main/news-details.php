
<?php include('./common/header.php') ?>

<div class="container container-small blog-details pt-lg-5 pb-5">
    <div class="row">
        <div class="col-xl-8 col-lg-7 px-lg-3 px-0">
            <div class="media-holder blogMedia w-100 position-relative">
                <img src="./images/blog/blog.jpg" width="369" height="267" alt="Blog Image">
            </div>
            <div class="cms cms-blog p-lg-3 px-3 position-relative">
                <div class="d-lg-none pt-5 bg-dark-bg rounded-bottom-0 rounded-5 position-absolute bottom-100 w-100 start-0 mt-2"></div>
                <span class="batch-new py-lg-1 px-2 bg-primary d-inline-block text-black f700 mb-2">NEW</span>
                <span class="d-block f300 text-md-small text-light-primary-1 text-uppercase mb-1">14 jun / 2024</span>
                <h1>Where to take your escort for a holiday?</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Many desktop web page editors and designers use Lorem Ipsum as their default model text for the chosen font. Lorem Ipsum is simply <a href="#">dummy text of the printing</a> and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Many desktop web page editors and designers use Lorem Ipsum as their default model text for the chosen font.</p>
                <p>Lorem Ipsum is simply <strong>dummy text of the printing</strong> and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Many desktop web page editors and designers use Lorem Ipsum as their default model text for the chosen font.</p>

                <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been <em>the industry's</em> standard dummy text ever since the 1500s. Many desktop web page editors and designers use Lorem Ipsum as their default model text for the chosen font. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Many desktop web page editors and designers use Lorem Ipsum as their default model text for the chosen font.</blockquote>

                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been <em>the industry's</em> standard dummy text ever since the 1500s. Many desktop web page editors and designers use Lorem Ipsum as their default model text for the chosen font. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Many desktop web page editors and designers use Lorem Ipsum as their default model text for the chosen font.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Many desktop web page editors and designers use Lorem Ipsum as their default model text for the chosen font.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Many desktop web page editors and designers use Lorem Ipsum as their default model text for the chosen font. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Many desktop web page editors and designers use Lorem Ipsum as their default model text for the chosen font.</p>
            </div>
        </div>
        <div class="col-12 px-5 d-lg-none pt-4 pb-5">
            <div class="divider mx-auto border-top border-dark-primary-2"></div>
        </div>
        <div class="col-xl-4 col-lg-5">
            <div class="h2">Related posts</div>
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="d-flex position-relative align-items-center mb-2 pb-1">
                    <a href="#" class="media-holder blogThumb flex-shrink-0 me-3 position-relative">
                        <img src="./images/blog/serv.jpg" width="122" height="122" loading="lazy" alt="Blog Image">
                    </a>
                    <div>
                        <span class="d-block f300 text-md-small text-light-primary-1 text-uppercase mb-1">14 jun / 2024</span>
                        <a class="h4 f300 text-primary text-hover-white" href="#">Where to take your escort for a holiday?</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?/*
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
    */?>
</div>

<?php include('./common/footer.php') ?>