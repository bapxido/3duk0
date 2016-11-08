$(function(){
   //Load dashboard home menu
	$('a.dashboard').on("click",function(e) {
		e.preventDefault(); // cancel the link itself
		e.stopImmediatePropagation();
		var value = $(this).attr('href');
		$(".content").load(value);
		$('.content-header > h1:nth-child(1)').html('Dashboard');
		callAjax();
	});
	
	//Load dashboard settings menu
	$('a.settings').on("click",function(e) {
		//e.preventDefault(); // cancel the link itself
		//e.stopImmediatePropagation();
		var value = $(this).attr('href');
		$(".content").load(value);
		$('.content-header > h1:nth-child(1)').html('Settings');
	});
	
	 // Take all href-value and assign it to value-value
	 $('.showModalButton').each(function(){
        var value = $(this).attr('href');
        $(this).attr("value", value);
    });
	
	$('.showModalButton').on("click",function(e) {
		var value = $(this).attr('href');
        $(this).attr("value", value);
		e.preventDefault(); // cancel the link itself
		//empty modal content
		$('#modalContent').empty();
	});

});

$(document).ready(function(){
	callAjax();
	//$('.content').find("#events").showLoading();
});
//~ 
$(window).load(function(){
	//$('.content').find("#events").hideLoading();
	callAjax();
});

function callAjax() {     
	
	$.ajax({
			url: '?r=site/ajax',
			dataType: "json",
			success: function(data) {
				if(data.error) {
						alert(data.error);
				} else if(data.studentCount) {
						$("#studentcount").html(data.studentCount);
						$("#teachersCount").html(data.teachersCount);
				} else {
						$("#studentCount").html("Response in invalid format!");
						alert("Response in invalid format!");
				}
			}
	});
	
	////Load events view div via AJAX
	//$('body').find('#events').load("index.php?r=events-calendar%2Fevents");
	$.ajax({
			url: '?r=events-calendar/events',
			dataType: "html",
			contentType: "application/x-www-form-urlencoded; charset=UTF-8", // this is the default value, so it's optional
			//data : data,
			success: function(result) {
						$('.content').find("#events").html(result);
			}
	});
	
	//$('#bulletin').load("index.php?r=bulletin%2Fbulletin");
	//Load bulletin view div via AJAX
	$.ajax({
			url: '?r=bulletin%2Fbulletin',
			dataType: "html",
			contentType: "application/x-www-form-urlencoded; charset=UTF-8", // this is the default value, so it's optional
			//data : data,
			success: function(result) {
						$('.content').find("#bulletin").html(result);
			}
	});
	
	
	
var female
var male

	$.ajax({
			url: '?r=student/stat',
			dataType: "json",
			success: function(data) {
				if(data.error) {
						alert(data.error);
				} else if(data.female) {
						female = data.female;
						male = data.male;
						female_num = data.female_num
						male_num = data.male_num
						
						//~ $.ajax({
						  //~ type: "POST",
						  //~ url: "index.php",
						  //~ data: "{var:'value'}",
						  //~ dataType: "text", //Available types xml, json, script, html, jsonp, text
						  //~ success:function(response){
						   //~ //Returned from server
						   //~ //alert(response.vari);
						  //~ }
						//~ });
						
						$('#pie').highcharts({
							chart: {
								plotBackgroundColor: null,
								plotBorderWidth: null,
								plotShadow: false,
								type: 'pie'
							},
							title: {
								text: 'Current ratio of Female to Male Students'
							},
							tooltip: {
								pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
							},
							plotOptions: {
								pie: {
									allowPointSelect: true,
									cursor: 'pointer',
									dataLabels: {
										enabled: true,
										format: '<b>{point.name}</b>: {point.percentage:.1f} %',
										style: {
											color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'Red'
										}
									}
								}
							},
							series: [{
								name: 'Gender',
								colorByPoint: true,
								data: [{
									name: 'Female:(' + female_num + ')',
									y: female,
									
								}, {
									name: 'Male:(' + male_num + ')',
									y: male,
									sliced: true,
									selected: true
								}]
							}]
						});
				} else {
						alert("Response in invalid format!");
				}
			}
	});
}



(function($) {
    $.fn.shorten = function (settings) {
     
        var config = {
            showChars: 100,
            ellipsesText: "...",
            moreText: "more",
            lessText: "less"
        };
 
        if (settings) {
            $.extend(config, settings);
        }
         
        $(document).off("click", '.morelink');
         
        $(document).on({click: function () {
 
                var $this = $(this);
                if ($this.hasClass('less')) {
                    $this.removeClass('less');
                    $this.html(config.moreText);
                } else {
                    $this.addClass('less');
                    $this.html(config.lessText);
                }
                $this.parent().prev().toggle();
                $this.prev().toggle();
                return false;
            }
        }, '.morelink');
 
        return this.each(function () {
            var $this = $(this);
            if($this.hasClass("shortened")) return;
             
            $this.addClass("shortened");
            var content = $this.html();
            if (content.length > config.showChars) {
                var c = content.substr(0, config.showChars);
                var h = content.substr(config.showChars, content.length - config.showChars);
                var html = c + '<span class="moreellipses">' + config.ellipsesText + ' </span><span class="morecontent"><span>' + h + '</span> <a href="#" class="morelink">' + config.moreText + '</a></span>';
                $this.html(html);
                $(".morecontent span").hide();
            }
        });
         
    };
 
 })(jQuery);
 
 
 $(document).ready(function() {
     
	$(".comment").shorten();
 
});
    
$(".comment").shorten({
    "showChars" : 200
});
 
 
$(".comment").shorten({
    "showChars" : 150,
    "moreText"  : "See More",
});
 
$(".comment").shorten({
    "showChars" : 50,
    "moreText"  : "See More",
    "lessText"  : "Less",
});






