
<?php include('./common/header.php') ?>

<div class="container pt-4 pb-5">
    <h1 class="text-center mb-4 mb-md-5">Make a booking</h1>
    <div class="row">
        <div class="col-lg-6 order-lg-2 ps-xl-5">
            <form class="border-md border-dark-primary-2 rounded-5 p-md-4" action="">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item border-0 border-bottom border-dark-primary-2 bg-transparent">
                        <button class="accordion-button text-small f700 text-primary border-0 bg-transparent shadow-none text-uppercase px-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Choose your escort
                        </button>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body px-md-3 px-0 mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="media-holder bookingThumbnail rounded-circle border border-dark-primary-2 me-3">
                                        <img id="bookImg" class="w-100 h-100 position-relative rounded-circle" src="./images/staff/staff.jpeg" width="369" height="267" alt="Blog Image">
                                    </div>
                                    <div class="form-group flex-grow-1">
                                        <select id="bookSlict" class="form-control bg-transparent border-light-black-4 text-white select-img" name="" id="">
                                            <option value="">Select a service</option>
                                            <option data-value="./images/staff/staff-a.jpg" value="">Service 1</option>
                                            <option data-value="./images/staff/staff-b.jpg" value="">Service 2</option>
                                            <option data-value="./images/staff/staff-c.jpg" value="">Service 3</option>
                                        </select>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item accordion-item border-0 border-bottom border-dark-primary-2 bg-transparent">
                        <button class="accordion-button collapsed text-small f700 text-primary border-0 bg-transparent shadow-none text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            booking details
                        </button>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body  px-md-3 px-0 mb-4">
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Booking date" class="form-control date form-control-date bg-transparent border-light-black-4 text-white">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Booking Time" class="form-control time form-control-time bg-transparent border-light-black-4 text-white">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Duration" class="form-control bg-transparent border-light-black-4 text-white">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Address" class="form-control bg-transparent border-light-black-4 text-white">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="text-white f300 text-md-small ps-3 mb-2">*All services and extras are on lady’s sole discretion</label>
                                    <textarea name="" id="" class="form-control bg-transparent border-light-black-4 text-white"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item accordion-item border-0 border-bottom border-dark-primary-2 bg-transparent rounded-0">
                        <button class="accordion-button collapsed text-small f700 text-primary border-0 bg-transparent shadow-none text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Contact details
                        </button>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body px-md-3 px-0 mb-4">
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Full name" class="form-control bg-transparent border-light-black-4 text-white">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="tel" placeholder="Contact number" class="form-control bg-transparent border-light-black-4 text-white">
                                </div>
                                <div class="form-group mb-3">
                                    <input type="email" placeholder="Contact email" class="form-control bg-transparent border-light-black-4 text-white">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="text-center mt-4">
                    <button class="btn bg-primary-dark text-black f300">Submit Request</button>
                </div>  
            </form>
        </div>
        <div class="col-lg-6 order-lg-1 pt-lg-0 pt-5 pe-xl-5">
            <div class="cms ">
                <h2>booking etiquette</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Many desktop web page editors and designers use Lorem Ipsum as their default model text for the chosen font. Lorem Ipsum is simply <a href="#">dummy text of the printing</a> and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Many desktop web page editors and designers use Lorem Ipsum as their default model text for the chosen font.</p>
                <p>Lorem Ipsum is simply <strong>dummy text of the printing</strong> and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Many desktop web page editors and designers use Lorem Ipsum as their default model text for the chosen font.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been <em>the industry's</em> standard dummy text ever since the 1500s. Many desktop web page editors and designers use Lorem Ipsum as their default model text for the chosen font. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Many desktop web page editors and designers use Lorem Ipsum as their default model text for the chosen font.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Many desktop web page editors and designers use Lorem Ipsum as their default model text for the chosen font.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Many desktop web page editors and designers use Lorem Ipsum as their default model text for the chosen font. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Many desktop web page editors and designers use Lorem Ipsum as their default model text for the chosen font.</p>
            </div>
        </div>        
    </div>    
</div>

<?php include('./common/footer.php') ?>