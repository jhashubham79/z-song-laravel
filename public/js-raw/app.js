(()=>{

    const myDoc = document;

    const header = myDoc.getElementById('siteHeader');
    const sticky = header.offsetTop;
    //console.log(header);
    const onScroll = () => {
      // const scroll = document.documentElement.scrollTop;
      // console.log(scroll);
      if (window.scrollY > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky")
      }
    }
    window.addEventListener('scroll', onScroll);
    
    const menuDropdown = () => {
        let mediaQ = window.matchMedia(`(max-width: 991px)`);
        let menu = myDoc.querySelector('.nav-min-menu');
        let dropMenuItems = menu.querySelectorAll('.haveChild');
        if(mediaQ.matches) {            
            let mobMnuHdr = myDoc.querySelector('.nav-min-header');
            let mobMnuCloser = myDoc.querySelector('.nav-min-close');
            Object.keys(dropMenuItems).forEach((key) => {
                let item = dropMenuItems[key].querySelector('a');
                //console.log(item);
                let subMenu = dropMenuItems[key].querySelector('.dropdown-menu');
                let chieldCloseBtn = subMenu.querySelector('.nav-min-menu-children-closer');
                item.addEventListener('click', (e) => {                
                    e.preventDefault();
                    subMenu.classList.add('show');
                    mobMnuHdr.classList.add('position-fixed');
                });
                chieldCloseBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    subMenu.classList.remove('show');
                    setTimeout(() => {
                        mobMnuHdr.classList.remove('position-fixed');
                    }, 10);
                });
                mobMnuCloser.addEventListener('click', (e) => {
                    subMenu.classList.remove('show');
                    setTimeout(() => {
                        mobMnuHdr.classList.remove('position-fixed');
                    }, 10);
                });
            });

            myDoc.addEventListener('click', (e) => {
                if(e.target.closest('.offcanvas-backdrop') === null) {
                    setTimeout(() => {
                        mobMnuHdr.classList.remove('position-fixed');
                    }, 10);
                }
            });
            
        }else{
            Object.keys(dropMenuItems).forEach((key) => {
                let item = dropMenuItems[key].querySelector('a');
                item.addEventListener('click', (e) => {                
                    e.preventDefault();    
                    if(e.target.classList.contains('show')) {
                        myDoc.querySelector('.deskMenu-backdrop').classList.add('active');
                    }else{
                        myDoc.querySelector('.deskMenu-backdrop').classList.remove('active');
                    }
                });
            });
            myDoc.addEventListener('click', (e) => {
                if(e.target.closest('.deskMenu-backdrop')) {
                    myDoc.querySelector('.deskMenu-backdrop').classList.remove('active');
                }
            });
        }
        
    };
    menuDropdown();
    window.addEventListener('resize', menuDropdown);


    //input select dropdown selectted image needs to show on image tag
    let imgTag = myDoc.querySelector('#bookImg');
    if(imgTag) {
        let prevSec = imgTag.src;
        myDoc.addEventListener('change', function(event) {
            if (event.target.classList.contains('select-img')) {
                let img = event.target.options[event.target.selectedIndex].getAttribute('data-value');
                if(img){
                    imgTag.src = img;
                }else{
                    imgTag.src = prevSec;
                }
            }
        });
    };



    //fbrt
    myDoc.addEventListener('click', function(event) {
        if (event.target.classList.contains('save-favourite')) {
            event.target.classList.toggle('active');
            
            if (event.target.classList.contains('active')) {
                event.target.parentElement.querySelector('.favourites-message .text').textContent = 'Added to favourites!';
            } else {
                event.target.parentElement.querySelector('.favourites-message .text').textContent = 'Removed from Favourites!';
            }            
            event.target.parentElement.querySelector('.favourites-message').classList.add('active');
        }
    });
    
    myDoc.addEventListener('click', function(event) {
        if (event.target.classList.contains('favourites-close')) {
            event.target.parentElement.classList.remove('active');
        }
    });

    myDoc.addEventListener('click', function(event) {
        if (!event.target.closest('.favourites')) {
            myDoc.querySelectorAll('.favourites-message').forEach(function(message) {
                message.classList.remove('active');
            });
        }
    });


    //rota popup
    let rotaPupup = () => {
        let mediaQ = window.matchMedia(`(min-width: 768px)`);
        if(mediaQ.matches) {
            myDoc.addEventListener('click', function(event) {
                if (event.target.closest('.rota-close')) {
                    let parent = event.target.closest('.border-success');
                    parent.querySelector('.btn-collapse').classList.add('collapsed');
                    parent.querySelector('.rota-md-floated').classList.remove('show');
                }
        
                if (! event.target.closest('.rota-close') ) {
                    myDoc.querySelectorAll('.rota-md-floated').forEach(function(item) {
                        item.classList.remove('show');
                    });
                    myDoc.querySelectorAll('.btn-collapse').forEach(function(item) {
                        item.classList.add('collapsed');
                    });
                }
            });
        }
    };    
    rotaPupup();
    window.addEventListener('resize', rotaPupup);

    const date = myDoc.querySelector('.date');
    const datervw = myDoc.querySelector('.review-date');
    const time = myDoc.querySelector('.time');
    if(date){
        setTimeout(()=>{
            flatpickr(date, {
                minDate: "today",
                altFormat: "F j, Y",
                maxDate: new Date().fp_incr(14) // 14 days from now
            });
        }, 1800)        
    }
    if(datervw){
        setTimeout(()=>{
            flatpickr(datervw, {
                altInput: true,
                altFormat: "F j, Y",
                dateFormat: "Y-m-d",
            });
        }, 1800)        
    }
    if(time){
        setTimeout(()=>{
            flatpickr(time, {
                enableTime: true,
                noCalendar: true,
                dateFormat: "h:i",
                time_24hr: true
            });
        }, 1800)        
    }

    const inputFilewrap = myDoc.querySelectorAll('.inputFile');
    if(inputFilewrap) {
      Object.keys(inputFilewrap).forEach(function(key) {
          inputFilewrap[key].querySelector('[type="file"]').addEventListener('change', function() {
              if (inputFilewrap[key].querySelector('[type="file"]').files.length > 0) {
                  inputFilewrap[key].querySelector('label').innerText = inputFilewrap[key].querySelector('[type="file"]').files[0].name;
              }
          });
      });
    }

    //accordion
    let accordianBody = myDoc.querySelectorAll('.accordion-collapse');
    if(accordianBody) {
        Object.keys(accordianBody).forEach(function(key) {
            accordianBody[key].addEventListener('shown.bs.collapse', function(e) {
                //accordianBody[key].parentElement.classList.add('active');
                console.log(accordianBody[key]);
                e.stopPropagation();
                let accorItem = e.target.closest('.accordion-item');
                window.scrollTo({
                    top: accorItem.offsetTop - 100,
                    behavior: 'smooth'
                });
            });
        });
    }

    let btnCollapse = myDoc.querySelectorAll('.rota-tags .collapse');
    if(btnCollapse) {
        Object.keys(btnCollapse).forEach(function(key) {
            btnCollapse[key].addEventListener('shown.bs.collapse', function(e) {
                //e.stopPropagation();
                let accorItem = e.target.closest('.rota-tags');
                console.log(accorItem);
                window.scrollTo({
                    top: accorItem.offsetTop - 100,
                    behavior: 'smooth'
                });
            });
        });
    }


    //sorting the favarites items
    const fbrtfilterOption = myDoc.querySelectorAll('.favourites-filter li');
    if(fbrtfilterOption) {
        Object.keys(fbrtfilterOption).forEach(function(key) {
            fbrtfilterOption[key].addEventListener('click', function() {
                fbrtfilterOption.forEach(function(item) {
                    item.classList.remove('active');
                });
                fbrtfilterOption[key].classList.add('active');
                let filter = fbrtfilterOption[key].getAttribute('data-val');
                let fbrtItems = myDoc.querySelectorAll('.favourites-gallery > div');
                if(filter === '') {
                    fbrtItems.forEach(function(item) {
                        item.style.display = 'block';
                    });
                }else{
                    fbrtItems.forEach(function(item) {
                        if(item.classList.contains(filter)) {
                            item.style.display = 'block';
                        }else{
                            item.style.display = 'none';
                        }
                    });
                }
            });
        });                
    }


    //prifile image slider with splider js
    const profileImgSlider = myDoc.querySelector('.gallery-single-slider');
    if(profileImgSlider) {
        var splide = new Splide( profileImgSlider, {
            pagination : true,
            autoplay   : false,
            interval   : 3000,
            fixedWidth : '457px',
            fixedHeight: '598px',
            gap        : '1.2rem',
            trimSpace: 'move',
            focus    : 'center',
            breakpoints: {
                1199: {
                    fixedWidth : '272px',
                    fixedHeight: '350px',
                },
                575: {
                    fixedWidth : '100%',
                    fixedHeight: '482px',
                }
            }
        } ).mount();

        let liCounter = () => {
            let dot = myDoc.querySelector('.splide__pagination');
            dot.setAttribute('data-count', dot.querySelectorAll('li').length);
            dot.querySelectorAll('li').forEach((item, index) => {
                item.querySelector('button').innerHTML = index + 1;
            });
        };
        liCounter();
        splide.on('resize', ()=>{
            liCounter();
        });

    }

    Fancybox.bind('.single-profile');  


})();