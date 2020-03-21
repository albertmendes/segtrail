<?php
    function slider_js($tour_id) {
        $tnum = filter_var($tour_id, FILTER_SANITIZE_NUMBER_INT);
        $image_dir = getcwd() . '/includes/tour' . $tnum . 'img/';
        $image_count = count(glob($image_dir . '*jpg'));

        echo '

	var prevId = 0;

    $("' . $tour_id . '").carousel({
        interval: 4000
    });
    $(\'[id^=carousel-selector-]\').click(function () {
        var id_selector = $(this).attr("id");
        //var id = id_selector.substr(id_selector.length - 1);
	var id = id_selector.match(/\d+/)[0];
        id = parseInt(id);
        $("' . $tour_id . '").carousel(id);
        $(\'[id^=carousel-selector-]\').removeClass(\'carousel-active\');
        $(this).addClass(\'carousel-active\');
    });
    $("' . $tour_id . '").on(\'slid.bs.carousel\', function(e) {
        var id = $(\'.item.active\').data(\'slide-number\');
        /*id = parseInt(id);*/
	//console.log("Prev id: " + prevId + " ID: " + id);

	if((id%3) == 0 && prevId != ' . ($image_count-1) . ') {
	    if(prevId < id) {
		$("#carousel-selector-"  + eval(id-3)).animate({width: 0}, 500);
		$("#carousel-selector-" + eval(id-2)).animate({width: 0}, 500);
		$("#carousel-selector-" + eval(id-1)).animate({width: 0}, 500);
	    }
	    else {
		$("#carousel-selector-" + eval(id-3)).animate({width: "25%"}, 500);
		$("#carousel-selector-" + eval(id-2)).animate({width: "25%"}, 500);
		$("#carousel-selector-" + eval(id-1)).animate({width: "25%"}, 500);
	    }
	}
	else if(id == 0 && prevId == ' . ($image_count-1) . '){
	    //console.log("HEY");
	';
	    for($i = 0; $i <= $image_count; $i++) {
		echo '
		    $("#carousel-selector-' . $i . '").animate({width: "25%"}, 500);
		';
	    }
	echo '
	}
	prevId = id;
        $(\'[id^=carousel-selector-]\').removeClass(\'carousel-active\');
        $(\'[id^=carousel-selector-\' + id + \']\').addClass(\'carousel-active\');

    });

    $("#accordion2 h3").on("click", function() {
        if($(this).next("p").is(":hidden")) {
            $(this).next("p").slideDown();
            $("#accordion2 p").not($(this).next("p")).each(function() {
                $(this).slideUp();
            });
        }
        else {
            $(this).next("p").slideUp();
        }
    });
    ';        
    }

    function print_slides($tour_num) {
    $tnum = filter_var($tour_num, FILTER_SANITIZE_NUMBER_INT);
    $image_dir = getcwd() . '/includes/tour' . $tnum . 'img/';
    $image_count = count(glob($image_dir . '*jpg'));
    
        echo '
                        <div id="segtour' . $tour_num . '" class="carousel slide carousel-modded">

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner" role="listbox">
                            <div class="item active" data-slide-number="0">
                              <img src="includes/tour' . $tour_num . 'img/1.jpg">
                            </div>
	    ';

	    for($i = 2; $i <= $image_count; $i++) {
		echo '
                            <div class="item" data-slide-number="'. ($i - 1) . '">
                              <img src="includes/tour' . $tour_num . 'img/' . $i . '.jpg">
                            </div>
		';
	    }
	    echo '
                          </div>
                      
                          <!-- Left and right controls -->
                          <a class="left carousel-control" href="#segtour' . $tour_num . '" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#segtour' . $tour_num . '" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>


                          <div class="myslider-zusatz">
                            <ul>
                              <li><a href="#" class="order-mode" id="tour' . $tour_num . '_terminAnfragen">Termin anfragen</a></li>
                              <li><a href="#" class="order-mode" id="tour' . $tour_num . '_gutscheinordern">Gutschein ordern</a></li>
                              <li><a href="#" class="order-mode" id="tour' . $tour_num . '_buchen">buchen</a></li>
                            </ul>
                          </div>

                        </div>
                          <ul class="myindicators">
                            <li data-target="#segtour' . $tour_num . '" id="carousel-selector-0" class="carousel-active" ><img src="includes/tour' . $tour_num . 'img/1.jpg"></li>

		';

		for($i = 2; $i <= $image_count; $i++) {
		    echo '
                            <li data-target="#segtour' . $tour_num . '" id="carousel-selector-' . ($i-1) . '" ><img src="includes/tour' . $tour_num . 'img/' . $i . '.jpg"></li>
		    ';
		}
		echo '
                          </ul>

        ';
    }    
    function print_buttons($tour_num) {
	echo '
                        <ul class="mobile-anfragen">
                            <li><button class="order-mode" id="tour' . $tour_num . '_terminAnfragen">Termin anfragen</button></li>
                            <li><button class="order-mode" id="tour' . $tour_num . '_gutscheinordern">Gutschein ordern</button></li>
                            <li><button class="order-mode" id="tour' . $tour_num . '_buchen">Buchen</button></li>
                        </ul>

	';
    }


?>
