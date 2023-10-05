<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
</head>
<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">

    <script src="slider/js/jssor.slider-26.1.5.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
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
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 5,
                $SpacingX: 5,
                $SpacingY: 5,
                $Align: 390
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);

        });
    </script>
    <style>

        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssora106 {display:block;position:absolute;cursor:pointer;}
        .jssora106 .c {fill:#fff;opacity:.3;}
        .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
        .jssora106:hover .c {opacity:.5;}
        .jssora106:hover .a {opacity:.8;}
        .jssora106.jssora106dn .c {opacity:.2;}
        .jssora106.jssora106dn .a {opacity:1;}
        .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

        .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
        .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
        .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
        .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
        .jssort101 .p:hover{padding:2px;}
        .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
        .jssort101 .p:hover.pdn{padding:0;}
        .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
        .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
        .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
        .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
        .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}

        body a{
            color:#fff;
        }
    </style>
    <br>
    <br>
    <br>
    
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:580px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.png" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:480px;overflow:hidden;">

              <div>
                <a href="http://www.archstonekenya.com/details.php?prodid=55"><img data-u="image" src="http://www.archstonekenya.com/images/fulls/WhatsApp Image 2018-02-15 at 3.20.54 PM-min.jpeg" /></a>
                 <div class="carousel-caption" style="background-color:#000; opacity:0.5;">
                      <h3>Runda</h3>
                      <p style="text-align:center; font-size:22px; font-weight:bolder;">To let: $USD 5500</p>
                       <a href="details.php?prodid=900" class="btn btn-default " style="background-color:#377386; color:white; width:30%; font-weight:bold; " target="_blank"></i>View</a>
                </div>
                <img data-u="thumb" src="http://www.archstonekenya.com/images/fulls/WhatsApp Image 2018-02-15 at 3.20.54 PM-min.jpeg" />
            </div>

            <div>
                <a href="http://www.archstonekenya.com/details.php?prodid=61"><img data-u="image" src="http://www.archstonekenya.com/images/fulls/WhatsApp Image 2018-08-20 at 9.59.55 AM-min.jpeg" /></a>
                 <div class="carousel-caption" style="background-color:#000; opacity:0.5;">
                      <h3>Runda</h3>
                      <p style="text-align:center; font-size:22px; font-weight:bolder;">To let: $USD 1900</p>
                       <a href="details.php?prodid=899" class="btn btn-default " style="background-color:#377386; color:white; width:30%; font-weight:bold; " target="_blank"></i>View</a>
                </div>
                <img data-u="thumb" src="http://www.archstonekenya.com/images/fulls/WhatsApp Image 2018-08-20 at 9.59.55 AM-min.jpeg" />
            </div>

            <div>
                <a href="http://www.archstonekenya.com/details.php?prodid=60"><img data-u="image" src="http://www.archstonekenya.com/images/fulls/WhatsApp Image 2018-10-01 at 3.13.54 PM-min.jpeg" /></a>
                 <div class="carousel-caption" style="background-color:#000; opacity:0.5;">
                      <h3>Runda</h3>
                      <p style="text-align:center; font-size:22px; font-weight:bolder;">To let: $USD 4500(Negotiable)</p>
                       <a href="details.php?prodid=169" class="btn btn-default " style="background-color:#377386; color:white; width:30%; font-weight:bold; " target="_blank"></i>View</a>
                </div>
                <img data-u="thumb" src="http://www.archstonekenya.com/images/fulls/WhatsApp Image 2018-10-01 at 3.13.54 PM-min.jpeg" />
            </div>

              <div>
               <a href="http://www.archstonekenya.com/details.php?prodid=168"><img data-u="image" src="http://www.archstonekenya.com/images/fulls/WhatsApp Image 2018-09-11 at 2.55.31 PM(1)-min.jpeg" /></a>
                 <div class="carousel-caption" style="background-color:#000; opacity:0.5;">
                      <h3>Runda</h3>
                      <p style="text-align:center; font-size:22px; font-weight:bolder;">To let: $USD 4300 </p>
                      <a href="details.php?prodid=168" class="btn btn-default " style="background-color:#377386; color:white; width:30%; font-weight:bold; " target="_blank"></i>View</a>
                </div>
                <img data-u="thumb" src="http://www.archstonekenya.com/images/fulls/WhatsApp Image 2018-09-11 at 2.55.31 PM(1)-min.jpeg" />
            </div>

            <div>
               <a href="http://www.archstonekenya.com/details.php?prodid=86"><img data-u="image" src="http://www.archstonekenya.com/images/fulls/IMG_8029.jpg" /></a>
                 <div class="carousel-caption" style="background-color:#000; opacity:0.5;">
                      <h3>Runda</h3>
                      <p style="text-align:center; font-size:22px; font-weight:bolder;">To let: $USD 2990</p>
                      <a href="details.php?prodid=86" class="btn btn-default " style="background-color:#377386; color:white; width:30%; font-weight:bold; " target="_blank"></i>View</a>
                </div>
                <img data-u="thumb" src="http://www.archstonekenya.com/images/fulls/IMG_8029.jpg" />
            </div>

            <div>
               <a href="http://www.archstonekenya.com/details.php?prodid=60"><img data-u="image" src="http://www.archstonekenya.com/images/fulls/WhatsApp Image 2018-01-23 at 8.51.08 AM.jpeg" /></a>
                 <div class="carousel-caption" style="background-color:#000; opacity:0.5;">
                      <h3>Runda</h3>
                      <p style="text-align:center; font-size:22px; font-weight:bolder;">To let: $USD 3500</p>
                      <a href="details.php?prodid=60" class="btn btn-default " style="background-color:#377386; color:white; width:30%; font-weight:bold; " target="_blank"></i>View</a>
                </div>
                <img data-u="thumb" src="http://www.archstonekenya.com/images/fulls/WhatsApp Image 2018-01-23 at 8.51.08 AM.jpeg" />
            </div>

            <div>
                <a href="http://www.archstonekenya.com/details.php?prodid=3"><img data-u="image" src="http://www.archstonekenya.com/images/fulls/IMG_5929.png" /></a>
                <div class="carousel-caption" style="background-color:#000; opacity:0.5;">
                      <h3>Ridgeway Spring Gardens</h3>
                      <p style="text-align:center; font-size:22px; font-weight:bolder;">To let: $USD 1800</p>
                      <a href="details.php?prodid=3" class="btn btn-default " style="background-color:#377386; color:white; width:30%; font-weight:bold; " target="_blank"></i>View</a>
                </div>
                <img data-u="thumb" src="http://www.archstonekenya.com/images/fulls/IMG_5929.png" />
            </div>

            <div>
                <a href="details.php?prodid=6"><img data-u="image" src="http://www.archstonekenya.com/images/fulls/WhatsApp Image 2018-07-18 at 11.54.41 AM3.jpg" /></a>
                <div class="carousel-caption" style="background-color:#000; opacity:0.5;">
                      <h3>Runda</h3>
                      <p style="text-align:center; font-size:22px; font-weight:bolder;">To let: $USD 2400</p>
                      <a href="details.php?prodid=6" class="btn btn-default " style="background-color:#377386; color:white; width:30%; font-weight:bold; " target="_blank"></i>View</a>
                </div>
                <img data-u="thumb" src="http://www.archstonekenya.com/images/fulls/WhatsApp Image 2018-07-18 at 11.54.41 AM3.jpg" />
            </div>

            <div>
                <a href="details.php?prodid=9"><img data-u="image" src="http://www.archstonekenya.com/images/fulls/IMG_6042.png" /></a>
                <div class="carousel-caption" style="background-color:#000; opacity:0.5;">
                      <h3>Peponi</h3>
                      <p style="text-align:center; font-size:22px; font-weight:bolder;">To let: $USD 2700</p>
                       <a href="details.php?prodid=9" class="btn btn-default " style="background-color:#377386; color:white; width:30%; font-weight:bold; " target="_blank"></i>View</a>
                </div>
                <img data-u="thumb" src="http://www.archstonekenya.com/images/fulls/IMG_6042.png" />
            </div>


            <div>
                <img data-u="image" src="http://www.archstonekenya.com/images/fulls/WhatsApp Image 2018-07-26 at 5.14.40 PM-min.jpeg" />
                <div class="carousel-caption" style="background-color:#000; opacity:0.5;">
                      <h3>Runda</h3>
                      <p style="text-align:center; font-size:22px; font-weight:bolder;">To let: $USD 4000</p>
                      <a href="details.php?prodid=103" class="btn btn-default " style="background-color:#377386; color:white; width:30%; font-weight:bold; " target="_blank"></i>View</a>
                </div>
                <img data-u="thumb" src="http://www.archstonekenya.com/images/fulls/WhatsApp Image 2018-07-26 at 5.14.40 PM-min.jpeg" />
            </div>

             <div>
                <a href="details.php?prodid=155"><img data-u="image" src="http://www.archstonekenya.com/images/fulls/WhatsApp Image 2018-10-29 at 8.34.32 AM-min.jpeg" /></a>
                <div class="carousel-caption" style="background-color:#000; opacity:0.5;">
                      <h3>Spring valley</h3>
                      <p style="text-align:center; font-size:22px; font-weight:bolder;">To let: $USD 3000</p>
                      <a href="details.php?prodid=155" class="btn btn-default " style="background-color:#377386; color:white; width:30%; font-weight:bold; " target="_blank"></i>View</a>
                </div>
                <img data-u="thumb" src="http://www.archstonekenya.com/images/fulls/WhatsApp Image 2018-10-29 at 8.34.32 AM-min.jpeg" />
            </div>

           



            <a data-u="any" href="https://www.jssor.com" style="display:none">javascript slider</a>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <!-- #endregion Jssor Slider End -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>
</html>