<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>

		a:hover
		{
			background-color:yellow;
			font-size:24px;
		}
		
		
    </style>
<script>
function a()
{
	document.getElementById("kk").style.color="white";
	setTimeout("b()",500);
}
function b()
{
	document.getElementById("kk").style.color="orange";
	setTimeout("c()",500);
}
function c()
{
	document.getElementById("kk").style.color="gray";
	setTimeout("a()",500);
}
</script>
</head>
<body  onload="a()" style="padding:0px; margin:0px; background-color:#fff;font-family:'Open Sans',sans-serif,arial,helvetica,verdana">

    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="js/jssor.slider-25.2.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:500,$Delay:30,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
              {$Duration:500,$Delay:80,$Cols:8,$Rows:4,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
              {$Duration:1000,x:-0.2,$Delay:40,$Cols:12,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
              {$Duration:2000,y:-1,$Delay:60,$Cols:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}},
              {$Duration:1200,x:0.2,y:-0.1,$Delay:20,$Cols:8,$Rows:4,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 980);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /* jssor slider loading skin double-tail-spin css */

        .jssorl-004-double-tail-spin img {
            animation-name: jssorl-004-double-tail-spin;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-004-double-tail-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssorb053 .i {position:absolute;cursor:pointer;}
        .jssorb053 .i .b {fill:#fff;fill-opacity:0.5;stroke:#000;stroke-width:400;stroke-miterlimit:10;stroke-opacity:0.5;}
        .jssorb053 .i:hover .b {fill-opacity:.7;}
        .jssorb053 .iav .b {fill-opacity: 1;}
        .jssorb053 .i.idn {opacity:.3;}

        .jssora093 {display:block;position:absolute;cursor:pointer;}
        .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}

        .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093:hover {opacity:.8;}
        .jssora093.jssora093dn {opacity:.6;}
        .jssora093.jssora093ds {opacity:.3;pointer-events:none;}
    </style>
   


<div style="width:1200px;height:900px;  background-image:url(img/karbonn.jpg)">
<div style="width:1002px;height:900px; margin-left:100px; ">
<div style="width:1200px; height:30px; margin-left:-99px; background-color:black;"></div>

<div style="width:1200px;height:5px;  margin-left:-99px; background-color:gray"></div>

<div id="kk" style="width:1000px;height:50px; font-size:36px; margin-top:19px;border-radius:20px; background-color:blue; color:white; "><center><b>ONLINE MOBILE STORE</b></center></div>


<div style="width:1004px; height:300px; border-radius:20px; margin-top:3px;">
<img src="mobileindex.jpg" style="width:1004px;  border-radius:18px; height:300px">
</div>

<div style="width:990px ; height:50px; border: solid black; border-radius:20px; margin-left:5px; margin-top:5px;  background-color:green">

<div   style="width:100px;height:45px;    margin-top:20px; margin-left:130px "><center><h3><a href= "index.php" style="text-decoration:none; color:black; ">Home</a></h3></center></div>
<div style="width:100px;height:45px; margin-top:-64px; margin-left:320px"><center><h3><a href="login_page.php"  style="text-decoration:none;color:black;">Login</a></h3></center></div>
<div style="width:98px;height:45px;    margin-top:-65px;  margin-left:523px "><center><h3><a href="register_page.php" style="text-decoration:none; color:black;">Register</a></h3></center></div>
<div style="width:100px;height:45px;   margin-top:-63px; margin-left:725px "><center><h3><a href="aboutpage.php" style="text-decoration:none; color:black;">AboutUs</a></h3></center></div>

</div>
<div  style="width:1000px; height:450px; margin-top:5px;">
 <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/double-tail-spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
        
            <div>
                <img data-u="image" src="img/image1.jpeg"/>
            </div>
            <div>
                <img data-u="image"  src="img/image2.jpeg"/>
            </div>
            <div>
                <img data-u="image" src="img/image3.jpeg"/>
            </div>
            <div>
                <img data-u="image" src="img/image4.jpeg" />
            </div>
             <div>
                <img data-u="image" src="img/image8.jpeg" />
            </div>
                <div>
                <img data-u="image" src="img/imge9.jpeg" />
            </div>
        
            <a data-u="any" href="https://www.jssor.com" style="display:none">image gallery</a>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb053" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <path class="b" d="M11400,13800H4600c-1320,0-2400-1080-2400-2400V4600c0-1320,1080-2400,2400-2400h6800 c1320,0,2400,1080,2400,2400v6800C13800,12720,12720,13800,11400,13800z"></path>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
    
    
    
    <div style="width:1200px; height:30px; margin-left:-99px; margin-top:42px; background-color:black;"></div>
   
    
    
    </div>
</body>
</html>