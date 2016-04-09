var curPosition = 50;
var curSlide = 2;
var topShow = 800;
var winHeight = $(window).height();
var winWidth = $(window).width();
var winScroll = $(this).scrollTop();
var countReview = 2;
var counting = {
	projectsCount : 0,
	projectsMax : 22,
	clientsCount : 0,
	clientsMax : 54,
	certificatesCount : 0,
	certificatesMax : 101
}
var percentSkills = {
	designCount : 0,
	designEnd : 87,
	developCount : 0,
	developEnd : 95,
	seoCount : 0,
	seoEnd : 78
}
var diagramSkills = {
	designCount : 0,
	designEnd : Math.PI*1.3,
	developCount : 0,
	developEnd : Math.PI*1.4,
	seoCount : 0,
	seoEnd : Math.PI*1.1
}

function changeTitle(){
	switch(curPosition){
		case 0:   curSlide = 1; break;
		case 50:  curSlide = 2; break;
		case 100: curSlide = 3; break;
	}
	$(".text-1").css({"opacity":"0","z-index":"1"});
	$(".text-2").css({"opacity":"0","z-index":"1"});
	$(".text-3").css({"opacity":"0","z-index":"1"});
	$(".text-"+curSlide).css({"opacity":"1","z-index":"5"});
}

function drawDiagram(className,end,color){
	drawCircle(className,30,30,30,end,Math.PI*1.5,true,color);
	drawCircle(className,30,30,20,0,Math.PI*2,false,"#222222");
}

function delay(className,style,delay){
	setTimeout(function(){
		$(className).css(style);
	},delay);
}

function changeNumber(className, obj, count, max, interval, postfix){
	if(postfix === undefined){
		postfix = "";
	}
	setInterval(function(){
		if(obj[count] == obj[max]){
			return;
		}
		$(className).text(++obj[count]+postfix);
	},interval);	
}

function changeDiagram(className, obj, count, max, interval, color){
	setInterval(function(){
		if(obj[count] >= obj[max]){
			return;
		}
		obj[count] += 0.05;
		drawDiagram(className,obj[count],color);
	},interval);	
}

function drawCircle(id,x,y,r,start,end,flag,color){
	var canvas = document.getElementById(id);
	var obCanvas = canvas.getContext("2d");

	obCanvas.fillStyle = color;

	obCanvas.beginPath();
		obCanvas.moveTo(x,y);
		obCanvas.lineTo(x,y-r);
	obCanvas.closePath();

	obCanvas.beginPath();
		obCanvas.lineTo(x,y);
		obCanvas.arc(x,y,r,start,end,flag);
		obCanvas.fill();
	obCanvas.closePath();
}

function positionCenter(class1, class2){
    var left = winWidth/2 - $(class1).width()/2;
    var top = winHeight/2 - $(class1).height()/2;
    $(class2).css({"left":left,"top":top});
}

function changeSection(classArray, winScroll){
    var flag = true;

    for(var i = 0; i < classArray.length && flag; i++) {
        if (winScroll >= $(classArray[i]).offset().top - 100) {
            $("a[href='" + classArray[i] + "']").addClass("hover-nav");
            classArray.splice(i,1);
            flag = false;
        }
    }

    for(var i = 0; i < classArray.length; i++){
        $("a[href='" + classArray[i] + "']").removeClass("hover-nav");
    }
}

$(document).ready(function(){
	$(window).on("load",function(){
		$(".spinner").fadeOut(750);
		$("#preload").fadeOut(1500);
	});

	$("header").css({"height" : winHeight});

	$(".review-2").css({"transform":"translateX(0)"});
	$("header .left-arrow").on("click",function(){
		if(curPosition == 0){
			curPosition = 100;
		}
		else{
			curPosition -= 50;
		}
		$("header").css({"backgroundPosition":curPosition+"%"});
		changeTitle();
	});
	$("header .right-arrow").on("click",function(){
		if(curPosition == 100){
			curPosition = 0;
		}
		else{
			curPosition += 50;
		}
		$("header").css({"backgroundPosition":curPosition+"%"});
		changeTitle();
	});

	$(".reviews .left-arrow").on("click",function(){
		$(".review-"+countReview).css({"transform":"translateX(500%)"});
		countReview--;
		if(countReview < 1){
			countReview = 3;
		}
		$(".review-"+countReview).css({"transform":"translateX(0)"});
	});
	$(".reviews .right-arrow").on("click",function(){
		$(".review-"+countReview).css({"transform":"translateX(-500%)"});
		countReview++;
		if(countReview > 3){
			countReview = 1;
		}
		$(".review-"+countReview).css({"transform":"translateX(0)"});
	});

	$("#up").on("click", function(e){
		$("html, body").animate({scrollTop: 0}, 1000);
		e.preventDefault();
	});

	$(window).on("scroll", function(){
		winScroll = $(this).scrollTop();
		if($(this).scrollTop() > topShow){
			$("#up").css({"transform": "translateX(0)"});
		}
		else{
			$("#up").css({"transform": "translateX(150px)"});
		}
		
		if((winScroll >= $(".skill-1").offset().top - winHeight + winHeight/4) && (diagramSkills["designCount"] == 0)){
			delay(".skill-1",{"transform":"translateX(0)"},0);

			changeDiagram("design", diagramSkills, "designCount", "designEnd", 47, "green");
			
			changeNumber(".skill-1 .percent", percentSkills, "designCount", "designEnd", 30, "%");
		}

		if((winScroll >= $(".skill-2").offset().top - winHeight + winHeight/4) && (diagramSkills["developCount"] == 0)){			
			delay(".skill-2",{"transform":"translateX(0)"},0);

			changeDiagram("develop", diagramSkills, "developCount", "developEnd", 43, "red");
			
			changeNumber(".skill-2 .percent", percentSkills, "developCount", "developEnd", 30, "%");
		}

		if((winScroll >= $(".skill-3").offset().top - winHeight + winHeight/4) && (diagramSkills["seoCount"] == 0)){			
			delay(".skill-3",{"transform":"translateX(0)"},0);

			changeDiagram("seo", diagramSkills, "seoCount", "seoEnd", 50, "orange");
			
			changeNumber(".skill-3 .percent", percentSkills, "seoCount", "seoEnd", 40, "%");
		}

		if((winScroll >= $(".counting").offset().top - winHeight + winHeight/2) && (counting["projectsCount"] == 0)){
			changeNumber(".projects-count", counting, "projectsCount", "projectsMax", 30);
			changeNumber(".clients-count", counting, "clientsCount", "clientsMax", 30);
			changeNumber(".certificates-count", counting, "certificatesCount", "certificatesMax", 30);
			$("footer").css({"display" : "flex"}); // fix show footer when load page
		}

        changeSection(["#contacts","#order","#review","#portfolio","#service","#about"],winScroll);
	});

	//smooth scroll
	$(".menu a[href*='#'], .text a[href*='#']").on("click", function(e){
		var anchor = $(this); 
		$('html, body').stop().animate({ 
			scrollTop: $(anchor.attr('href')).offset().top - 90 
		}, 1500);
		e.preventDefault(); 
	});
    $(".menu a[href='#contacts']").on("click", function(e){
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 1500);
        e.preventDefault();
    });

	$("#order_sub").on("click",function(e){
        var name = $("#name").val();
        var email = $("#email").val();
        var telephone = $("#telephone").val();
        var description = $("#description").val();
        var obj = {
            "name": name,
            "email": email,
            "telephone": telephone,
            "description": description
        };

        if(name != "" && email != "" && telephone != "") {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "../include/ajax.php",
                data: obj,
                dataType: "json",
                success: function () {
                    positionCenter(".window", ".popup .window");
                    $(".popup").fadeIn(400);
                    $(".popup .done").fadeIn(400);
                },
                error: function () {
                    positionCenter(".window", ".popup .window");
                    $(".popup").fadeIn(400);
                    $(".popup .error").fadeIn(400);
                }
            });
        }
	});

    $(".close_window").on("click",function(){
        $(".popup").fadeOut(400);
        $(".popup .done").fadeOut(400);
        $(".popup .error").fadeOut(400);
    });
});

//portfolio slider
(function ($) {
  var hwSlideSpeed = 700;
  var hwTimeOut = 3000;
  var hwNeedLinks = true;

  $(document).ready(function(e) {
    $('.slide').css(
      {"position" : "absolute",
       "top":'0', "left": '0'}).hide().eq(0).show();
    var slideNum = 0;
    var slideTime;
    slideCount = $("#slider .slide").size();
    var animSlide = function(arrow){
      clearTimeout(slideTime);
      $('.slide').eq(slideNum).fadeOut(hwSlideSpeed);
      if(arrow == "next"){
        if(slideNum == (slideCount-1)){slideNum=0;}
        else{slideNum++}
        }
      else if(arrow == "prew")
      {
        if(slideNum == 0){slideNum=slideCount-1;}
        else{slideNum-=1}
      }
      else{
        slideNum = arrow;
        }
      $('.slide').eq(slideNum).fadeIn(hwSlideSpeed, rotator);
      }
  if(hwNeedLinks){
    $('.portfolio .right-arrow').click(function(){
      animSlide("next");
      return false;
      })
    $('.portfolio .left-arrow').click(function(){
      animSlide("prew");
      return false;
      })
  }
    var pause = false;
    var rotator = function(){
        if(!pause){slideTime = setTimeout(function(){animSlide('next')}, hwTimeOut);}
        }
    $('#slider-wrap img, .portfolio .left-arrow, .portfolio .right-arrow').hover(
      function(){clearTimeout(slideTime); pause = true;},
      function(){pause = false; rotator();
      });
    rotator();
  });
  })(jQuery);