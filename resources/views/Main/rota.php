
<?php include('./common/header.php') ?>

<div class="rota pt-3 pb-5">
    <div class="container px-md-2 px-0">
        <h1 class="h2 text-primary mb-1 px-4">ROTA</h1>
        <div class="f300 text-md-small text-primary mb-3 px-4 ms-md-2">24-30 June</div>
        <div class="rota-week border border-md-down-bottom-0 border-md-down-start-0 border-md-down-end-0 border-dark-primary-2">
            <div class="w-100 py-2 px-3 d-flex align-items-center border-bottom border-dark-primary-2">
                <a class="btn text-md-small f700 text-white bg-primary-dark bg-hover-primary py-2 px-4 rounded-2 lh-1 my-1" href="./rota.php">WEEKLY</a>
                <a class="btn text-md-small f700 text-white border-primary-dark bg-hover-primary py-2 px-4 rounded-2 lh-1 ms-2 my-1" href="./rota-day.php">DAILY</a>
                <div class="dropdown ms-auto">
                    <button class="btn p-0 fs-5 text-primary border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-equalizer"></i>
                    </button>
                    <div class="dropdown-menu bg-dark-bg rounded-0 border-dark-primary-2">
                        <ul class="dropdown-list">
                            <li><a class="dropdown-item text-small d-inline-block pe-3 position-relative f700 text-uppercase" href="#">Action</a></li>
                            <li><a class="dropdown-item text-small d-inline-block pe-3 position-relative f700 text-uppercase" href="#">Another action</a></li>
                            <li><a class="dropdown-item text-small d-inline-block pe-3 position-relative f700 text-uppercase" href="#">Something else here</a></li>
                            <li><a class="dropdown-item text-small d-inline-block pe-3 position-relative f700 text-uppercase" href="#">Action</a></li>
                            <li><a class="dropdown-item text-small d-inline-block pe-3 position-relative f700 text-uppercase" href="#">Another action</a></li>
                            <li><a class="dropdown-item text-small d-inline-block pe-3 position-relative f700 text-uppercase" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="rota-week-wrap px-md-0 px-3">
                <div class="d-md-flex">
                    <div class="rota-col pb-3 border-md-end border-dark-primary-2 d-md-block d-flex pt-md-0 pt-3 border-bottom-md-0 border-bottom flex-grow">
                        <div class="text-center px-md-3 pe-3 my-md-3 rota-date">
                            <span class="d-block text-small text-uppercase f700 lh-1 text-primary rota-day">Mon</span>
                            <span class="fs-5 text-primary">24</span>
                        </div>
                        <div class="align-self-center rota-days-items w-100">
                            <div class="rounded-2 w-100 notavailable rota-tags align-self-center mb-2">
                                <div class="border border-3 border-primary-alt border-top-0 border-bottom-0 border-end-0 ps-2">
                                    <span class="d-block lh-base text-light-primary-1 text-md-small">Christina not available</span>
                                </div>
                            </div>
                            <div class="rounded-2 w-100 notavailable rota-tags align-self-center mb-2">
                                <div class="border border-3 border-primary-alt border-top-0 border-bottom-0 border-end-0 ps-2">
                                    <span class="d-block lh-base text-light-primary-1 text-md-small">Alina not available</span>
                                </div>
                            </div>
                            <div class="rounded-2 w-100 rota-tags align-self-center mb-2">
                                <div class="border border-3 border-success border-top-0 border-bottom-0 border-end-0 ps-2">
                                    <button class="d-block btn btn-collapse p-0 text-light-primary-1 text-hover-light-primary-1 border-0 text-md-small lh-base f300 w-100 pe-4 text-start collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMon24Rota" aria-expanded="false" aria-controls="collapseMon24Rota">Nicole</button>
                                    <div class="collapse mt-2 pb-1 pe-3 rota-md-floated" id="collapseMon24Rota">
                                        <div class="text-md-small text-primary f400 d-md-block d-none">Nicole</div>
                                        <div class="text-small 300 text-primary mb-4 d-md-block d-none">26 June, 24</div>
                                        <span class="btn-close rota-close d-md-block d-none position-absolute top-0 end-0 mt-2 me-2"></span>
                                        <div class="text-small lh-base px-3 py-1 rounded-2 border border-primary text-light-primary-1 f400 mb-2 text-center">12:00pm-17:00pm </div>
                                        <div class="text-small lh-base px-3 py-1 rounded-2 text-light-primary-1 border border-primary f400 mb-2 text-center">19:00pm-22:00pm </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse d-md-block" id="collapseExample">
                                <div class="rounded-2 w-100 rota-tags align-self-center">
                                    <div class="border border-3 border-success border-top-0 border-bottom-0 border-end-0 ps-2">
                                        <button class="d-block btn btn-collapse p-0 text-light-primary-1 text-hover-light-primary-1 border-0 text-md-small lh-base f300 w-100 pe-4 text-start collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTue27Rota" aria-expanded="false" aria-controls="collapseTue27Rota">Melissa</button>
                                        <div class="collapse mt-2 pb-1 pe-3 rota-md-floated" id="collapseTue27Rota">
                                            <div class="text-md-small text-primary f400 d-md-block d-none">Melissa</div>
                                            <div class="text-small 300 text-primary mb-4 d-md-block d-none">26 June, 24</div>
                                            <span class="btn-close rota-close d-md-block d-none position-absolute top-0 end-0 mt-2 me-2"></span>
                                            <div class="text-small lh-base px-3 py-1 rounded-2 border border-primary text-light-primary-1 f400 mb-2 text-center">12:00pm-17:00pm </div>
                                            <div class="text-small lh-base px-3 py-1 rounded-2 text-light-primary-1 border border-primary f400 mb-2 text-center">19:00pm-22:00pm </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-readmore p-0 text-uppercase text-primary border-0 text-small d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"></button>
                        </div>
                    </div>
                    <div class="rota-col pb-3 border-md-end border-dark-primary-2  d-md-block d-flex pt-md-0 pt-3 border-bottom-md-0 border-bottom flex-grow">
                        <div class="text-center px-md-3 pe-3 my-md-3 rota-date">
                            <span class="d-block text-small text-uppercase f700 lh-1 text-primary rota-day">Tue</span>
                            <span class="fs-5 text-primary">25</span>
                        </div>
                        <div class="align-self-center rota-days-items w-100">
                            <div class="rounded-2 w-100 notavailable rota-tags align-self-center mb-2">
                                <div class="border border-3 border-primary-alt border-top-0 border-bottom-0 border-end-0 ps-2">
                                    <span class="d-block lh-base text-light-primary-1 text-md-small">Christina not available</span>
                                </div>
                            </div>
                            <div class="rounded-2 w-100 notavailable rota-tags align-self-center mb-2">
                                <div class="border border-3 border-primary-alt border-top-0 border-bottom-0 border-end-0 ps-2">
                                    <span class="d-block lh-base text-light-primary-1 text-md-small">Alina not available</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rota-col pb-3 border-md-end border-dark-primary-2  d-md-block d-flex pt-md-0 pt-3 border-bottom-md-0 border-bottom flex-grow">
                        <div class="text-center px-md-3 pe-3 my-md-3 rota-date">
                            <span class="d-block text-small text-uppercase f700 lh-1 text-primary rota-day">Web</span>
                            <span class="fs-5 text-primary">26</span>
                        </div>
                        <div class="align-self-center rota-days-items w-100">
                            <div class="rounded-2 w-100 notavailable rota-tags align-self-center mb-2">
                                <div class="border border-3 border-primary-alt border-top-0 border-bottom-0 border-end-0 ps-2">
                                    <span class="d-block lh-base text-light-primary-1 text-md-small">Christina not available</span>
                                </div>
                            </div>
                            <div class="rounded-2 w-100 notavailable rota-tags align-self-center mb-2">
                                <div class="border border-3 border-primary-alt border-top-0 border-bottom-0 border-end-0 ps-2">
                                    <span class="d-block lh-base text-light-primary-1 text-md-small">Alina not available</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rota-col pb-3 border-md-end border-dark-primary-2  d-md-block d-flex pt-md-0 pt-3 border-bottom-md-0 border-bottom flex-grow">
                        <div class="text-center px-md-3 pe-3 my-md-3 rota-date">
                            <span class="d-block text-small text-uppercase f700 lh-1 text-primary rota-day">Thu</span>
                            <span class="fs-5 text-primary">27</span>
                        </div>
                        <div class="align-self-center rota-days-items w-100">
                            <div class="rounded-2 w-100 notavailable rota-tags align-self-center mb-2">
                                <div class="border border-3 border-primary-alt border-top-0 border-bottom-0 border-end-0 ps-2">
                                    <span class="d-block lh-base text-light-primary-1 text-md-small">Christina not available</span>
                                </div>
                            </div>
                            <div class="rounded-2 w-100 notavailable rota-tags align-self-center mb-2">
                                <div class="border border-3 border-primary-alt border-top-0 border-bottom-0 border-end-0 ps-2">
                                    <span class="d-block lh-base text-light-primary-1 text-md-small">Alina not available</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rota-col pb-3 border-md-end border-dark-primary-2  d-md-block d-flex pt-md-0 pt-3 border-bottom-md-0 border-bottom flex-grow">
                        <div class="text-center px-md-3 pe-3 my-md-3 rota-date">
                            <span class="d-block text-small text-uppercase f700 lh-1 text-primary rota-day">Fri</span>
                            <span class="fs-5 text-primary">28</span>
                        </div>
                        <div class="align-self-center rota-days-items w-100">
                            <div class="rounded-2 w-100 notavailable rota-tags align-self-center mb-2">
                                <div class="border border-3 border-primary-alt border-top-0 border-bottom-0 border-end-0 ps-2">
                                    <span class="d-block lh-base text-light-primary-1 text-md-small">Christina not available</span>
                                </div>
                            </div>
                            <div class="rounded-2 w-100 notavailable rota-tags align-self-center mb-2">
                                <div class="border border-3 border-primary-alt border-top-0 border-bottom-0 border-end-0 ps-2">
                                    <span class="d-block lh-base text-light-primary-1 text-md-small">Alina not available</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rota-col pb-3 border-md-end border-dark-primary-2  d-md-block d-flex pt-md-0 pt-3 border-bottom-md-0 border-bottom flex-grow">
                        <div class="text-center px-md-3 pe-3 my-md-3 rota-date">
                            <span class="d-block text-small text-uppercase f700 lh-1 text-primary rota-day">Sat</span>
                            <span class="fs-5 text-primary">29</span>
                        </div>
                        <div class="align-self-center rota-days-items w-100">
                            <div class="rounded-2 w-100 notavailable rota-tags align-self-center mb-2">
                                <div class="border border-3 border-primary-alt border-top-0 border-bottom-0 border-end-0 ps-2">
                                    <span class="d-block lh-base text-light-primary-1 text-md-small">Christina not available</span>
                                </div>
                            </div>
                            <div class="rounded-2 w-100 notavailable rota-tags align-self-center mb-2">
                                <div class="border border-3 border-primary-alt border-top-0 border-bottom-0 border-end-0 ps-2">
                                    <span class="d-block lh-base text-light-primary-1 text-md-small">Alina not available</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rota-col pb-3 border-dark-primary-2  d-md-block d-flex pt-md-0 pt-3 border-bottom-md-0 border-bottom flex-grow">
                        <div class="text-center px-md-3 pe-3 my-md-3 rota-date">
                            <span class="d-block text-small text-uppercase f700 lh-1 text-primary rota-day">Sun</span>
                            <span class="fs-5 text-primary">30</span>
                        </div>
                        <div class="align-self-center rota-days-items w-100">
                            <div class="rounded-2 w-100 notavailable rota-tags align-self-center mb-2">
                                <div class="border border-3 border-primary-alt border-top-0 border-bottom-0 border-end-0 ps-2">
                                    <span class="d-block lh-base text-light-primary-1 text-md-small">Christina not available</span>
                                </div>
                            </div>
                            <div class="rounded-2 w-100 notavailable rota-tags align-self-center mb-2">
                                <div class="border border-3 border-primary-alt border-top-0 border-bottom-0 border-end-0 ps-2">
                                    <span class="d-block lh-base text-light-primary-1 text-md-small">Alina not available</span>
                                </div>
                            </div>
                            <div class="rounded-2 w-100 rota-tags align-self-center mb-2">
                                <div class="border border-3 border-success border-top-0 border-bottom-0 border-end-0 ps-2">
                                    <button class="d-block btn btn-collapse p-0 text-light-primary-1 text-hover-light-primary-1 border-0 text-md-small lh-base f300 w-100 pe-4 text-start collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSun30Rota" aria-expanded="false" aria-controls="collapseSun30Rota">Nicole</button>
                                    <div class="collapse mt-2 pb-1 pe-3 rota-md-floated" id="collapseSun30Rota">
                                        <div class="text-md-small text-primary f400 d-md-block d-none">Nicole</div>
                                        <div class="text-small 300 text-primary mb-4 d-md-block d-none">26 June, 24</div>
                                        <span class="btn-close rota-close d-md-block d-none position-absolute top-0 end-0 mt-2 me-2"></span>
                                        <div class="text-small lh-base px-3 py-1 rounded-2 border border-primary text-light-primary-1 f400 mb-2 text-center">12:00pm-17:00pm </div>
                                        <div class="text-small lh-base px-3 py-1 rounded-2 text-light-primary-1 border border-primary f400 mb-2 text-center">19:00pm-22:00pm </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rounded-2 w-100 rota-tags align-self-center">
                                <div class="border border-3 border-success border-top-0 border-bottom-0 border-end-0 ps-2">
                                    <button class="d-block btn btn-collapse p-0 text-light-primary-1 text-hover-light-primary-1 border-0 text-md-small lh-base f300 w-100 pe-4 text-start collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSun30MRota" aria-expanded="false" aria-controls="collapseSun30MRota">Melissa</button>
                                    <div class="collapse mt-2 pb-1 pe-3 rota-md-floated" id="collapseSun30MRota">
                                        <div class="text-md-small text-primary f400 d-md-block d-none">Melissa</div>
                                        <div class="text-small 300 text-primary mb-4 d-md-block d-none">26 June, 24</div>
                                        <span class="btn-close rota-close d-md-block d-none position-absolute top-0 end-0 mt-2 me-2"></span>
                                        <div class="text-small lh-base px-3 py-1 rounded-2 border border-primary text-light-primary-1 f400 mb-2 text-center">12:00pm-17:00pm </div>
                                        <div class="text-small lh-base px-3 py-1 rounded-2 text-light-primary-1 border border-primary f400 mb-2 text-center">19:00pm-22:00pm </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('./common/footer.php') ?>