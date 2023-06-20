$(document).ready(function () {
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        keyboard: {
            enabled: true,
        },
        mousewheel: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    // $("#gaurdian").hide();
    // $("#education").hide();
    // $("#courses").hide();
    // $("#submission").hide();
    // $("#remove").hide();
    // $('#addMore').click(function () {
    //     qualification = '<div class="py-4 mt-4 mt-4 px-3 rounded-5" id="content" style="border: 1px solid #dadae9;">' +
    //         '<div class="row my-2">' +
    //         '<div class="col-md-6">' +
    //         '<label for="qualifications">Qualification: <span class="text-danger">*</span></label>' +
    //         '<select name="qualifications" id="" class="form-control mt-2">' +
    //         '<option value="..." selected>Choose Your Degree: </option>' +
    //         '<option value="matric">Matriculation</option>' +
    //         '<option value="inter">Intermediate</option>' +
    //         '<option value="ADP">Associate Degree Program</option>' +
    //         '<option value="BS">Bachelors</option>' +
    //         '<option value="MS/M.Sc">Masters</option>' +
    //         '</select>' +
    //         '</div>' +
    //         '<div class="col-md-6">' +
    //         '<label for="passingYear">Passing Year: <span class="text-danger">*</span></label>' +
    //         '<input type="month" class="form-control mt-2" name="passingYear" value="2022-11" max="2022-11">' +
    //         '</div>' +
    //         '</div>' +
    //         '<div class="row mb-2">' +
    //         '<div class="col-md-4">' +
    //         '<label for="totalMarks">Total Marks: <span class="text-danger">*</span></label>' +
    //         '<input type="number" name="totalMarks" class="form-control mt-2">' +
    //         '</div>' +
    //         '<div class="col-md-4">' +
    //         '<label for="obtMarks">Obtained Marks: <span class="text-danger">*</span></label>' +
    //         '<input type="number" name="obtMarks" class="form-control mt-2">' +
    //         '</div>' +
    //         '<div class="col-md-4">' +
    //         '<label for="obtMarks">Percentage: <span class="text-danger">*</span></label>' +
    //         '<div class="input-group mt-2">' +
    //         '<input type="number" name="obtMarks" class="form-control">' +
    //         '<div class="input-group-text">%</div>' +
    //         '</div>' +
    //         '</div>' +
    //         '</div>' +
    //         '<div class="row mb-2">' +
    //         '<div class="col-md-12">' +
    //         '<label for="board">Board of Examintation</label>' +
    //         '<select name="board" id="" class="form-control mt-2">' +
    //         '<option value="...">Choose Your Board:</option>' +
    //         '<optgroup label="Punjab">' +
    //         '<option value="bwp">Board of Intermediate and Secondary Education, Bahawalpur</option>' +
    //         '<option value="dg">Board of Intermediate and Secondary Education, DG Khan' +
    //         '</option>' +
    //         '<option value="sw">Board of Intermediate and Secondary Education, Sahiwal' +
    //         '</option>' +
    //         '<option value="fs">Board of Intermediate and Secondary Education, Faisalabad' +
    //         '</option>' +
    //         '<option value="gw">Board of Intermediate and Secondary Education, Gujranwala' +
    //         '</option>' +
    //         '<option value="lh">Board of Intermediate and Secondary Education, Lahore' +
    //         '</option>' +
    //         '<option value="mt">Board of Intermediate and Secondary Education, Multan' +
    //         '</option>' +
    //         '<option value="rwp">Board of Intermediate and Secondary Education, Rawalpindi' +
    //         '</option>' +
    //         '<option value="sgd">Board of Intermediate and Secondary Education, Sarghoda' +
    //         '</option>' +
    //         '</optgroup>' +
    //         '<optgroup label="Islamabad">' +
    //         '<option value="ibcc">Inter Board Committee of Chairman (IBCC) Islamabad</option>' +
    //         '<option value="fb">Federal Board of Intermediate and Secondary Education, Islamabad' +
    //         '</option>' +
    //         '</optgroup>' +
    //         '<optgroup label="Sindh">' +
    //         '<option value="krc">Aga Khan Educational Board, Karachi</option>' +
    //         '<option value="bkrc">Board of Intermediate Education, Karachi</option>' +
    //         '<option value="hdb">Board of Intermediate and Secondary Education, Hyderabad' +
    //         '</option>' +
    //         '<option value="lrk">Board of Intermediate and Secondary Education, Larkana</option>' +
    //         '<option value="skr">Board of Intermediate and Secondary Education, Sukkur</option>' +
    //         '<option value="bskrc">Board of Secondary Education, Karachi</option>' +
    //         '</optgroup>' +
    //         '<optgroup label="Khyber Pakhtoonkhwa (KPK)">' +
    //         '<option value="atb">Board of Intermediate and Secondary Education, Abbottabad' +
    //         '</option>' +
    //         '<option value="bannu">Board of Intermediate and Secondary Education, Bannu</option>' +
    //         '<option value="dik">Board of Intermediate and Secondary Education, Dera Ismail Khan' +
    //         '</option>' +
    //         '<option value="kht">Board of Intermediate and Secondary Education, Kohat</option>' +
    //         '<option value="mlk">Board of Intermediate and Secondary Education, Malakand</option>' +
    //         '<option value="mrd">Board of Intermediate and Secondary Education, Mardan</option>' +
    //         '<option value="psw">Board of Intermediate and Secondary Education, Peshawar</option>' +
    //         '<option value="swat">Board of Intermediate and Secondary Education, Swat</option>' +
    //         '</optgroup>' +
    //         '<optgroup label="Balochistan">' +
    //         '<option value="qta">Board of Intermediate and Secondary Education, Quetta</option>' +
    //         '<option value="trb">Board of Intermediate and Secondary Education, Turbat</option>' +
    //         '<option value="zhb">Board of Intermediate and Secondary Education, Zhob</option>' +
    //         '</optgroup>' +
    //         '<optgroup label="Azad & Jammu Kashmir (AJK)">' +
    //         '<option value="mrp">Board of Intermediate and Secondary Education, Mirpur</option>' +
    //         '</optgroup>' +
    //         '<optgroup label="Technical Boards of Pakistan">' +
    //         '<option value="tpsw">KPK Board of Technical Education, Peshawar</option>' +
    //         '<option value="tlhr">Punjab Board of Technical Education, Lahore</option>' +
    //         '<option value="tkrc">Sindh Board of Technical Education, Karachi</option>' +
    //         '</optgroup>' +
    //         '</select>' +
    //         '</div>' +
    //         '</div>' +
    //         '</div>';
    //     $(".qualification").prepend($(qualification));
    //     $("#remove").show();
    // });
    // $("#remove").click(function () {
    //     // alert("Record Removed");
    //     $("#content").remove();
    // });
    // $("#nextBtn1").click(function () {
    //     $('#personalForm .required').each(function () {
    //         if ($(this).val() == "") {
    //             alert('Please Fill All the Required Fields');
    //             return false;
    //         }
    //         else {
    //             $("#gaurdian").show();
    //             $("#personal").hide();
    //         }
    //     });
    // });
    // $("#nextBtn2").click(function () {
    //     $('#guardianForm .required').each(function () {
    //         if ($(this).val() == "") {
    //             alert('Please Fill All the Required Fields');
    //             return false;
    //         }
    //         else {
    //             $("#education").show();
    //             $("#gaurdian").hide();
    //             return true;
    //         }
    //     });
    // })
    // $("#nextBtn3").click(function () {
    //     $('#education .required').each(function () {
    //         if ($(this).val() == "") {
    //             alert('Please Fill All the Required Fields');
    //             return false;
    //         }
    //         else {
    //             $("#courses").show();
    //             $("#education").hide();
    //             return true;
    //         }
    //     });
    // })
    // // $("#nextBtn5").click(function () {
    // //     $('#courses .required').each(function () {
    // //         if ($(this).val() == "") {
    // //             alert('Please Fill All the Required Fields');
    // //             return false;
    // //         }
    // //         else {
    // //             $("#submission").show();
    // //             $("#courses").hide();
    // //             return true;
    // //         }
    // //     });
    // // })
    // $("#previousBtn1").click(function () {
    //     $("#personal").show();
    //     $("#gaurdian").hide();
    // })
    // $("#previousBtn2").click(function () {
    //     $("#gaurdian").show();
    //     $("#education").hide();
    // })
    // $("#previousBtn3").click(function () {
    //     $("#education").show();
    //     $("#courses").hide();
    // })
    // $("#previousBtn4").click(function () {
    //     $("#courses").show();
    //     $("#submission").hide();
    // })

    /**
     * Initiate glightbox
     */
    const glightbox = GLightbox({
        selector: '.glightbox'
    });

    let portfolionIsotope = document.querySelector('.portfolio-isotope');

    if (portfolionIsotope) {

        let portfolioFilter = portfolionIsotope.getAttribute('data-portfolio-filter') ? portfolionIsotope.getAttribute('data-portfolio-filter') : '*';
        let portfolioLayout = portfolionIsotope.getAttribute('data-portfolio-layout') ? portfolionIsotope.getAttribute('data-portfolio-layout') : 'masonry';
        let portfolioSort = portfolionIsotope.getAttribute('data-portfolio-sort') ? portfolionIsotope.getAttribute('data-portfolio-sort') : 'original-order';

        window.addEventListener('load', () => {
            let portfolioIsotope = new Isotope(document.querySelector('.portfolio-container'), {
                itemSelector: '.portfolio-item',
                layoutMode: portfolioLayout,
                filter: portfolioFilter,
                sortBy: portfolioSort
            });

            let menuFilters = document.querySelectorAll('.portfolio-isotope .portfolio-flters li');
            menuFilters.forEach(function (el) {
                el.addEventListener('click', function () {
                    document.querySelector('.portfolio-isotope .portfolio-flters .filter-active').classList.remove('filter-active');
                    this.classList.add('filter-active');
                    portfolioIsotope.arrange({
                        filter: this.getAttribute('data-filter')
                    });
                    if (typeof aos_init === 'function') {
                        aos_init();
                    }
                }, false);
            });

        });

    }
    /**
         * Animation on scroll function and init
         */
    function aos_init() {
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
    }
    window.addEventListener('load', () => {
        aos_init();
    });
})
