
	<link rel="stylesheet" type="text/css" href="/sites/all/themes/addeo/css/jquery.fullPage.css" />

  <link rel="stylesheet" type="text/css" href="/sites/all/themes/addeo/css/style.css" />

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>


  <script type="text/javascript" src="/sites/all/themes/addeo/js/jquery.parallaxify.min.js"></script>
  <script type="text/javascript" src="/sites/all/themes/addeo/js/jquery.fullPage.js"></script>
  <script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
                scrollingSpeed: 1000,
                easing: 'easeOutQuart',
                navigation: 'true',
                navigationPosition: 'left'
            });
		});
  </script>
    
  <script type="text/javascript">
		$(function(){
			$(document).ready(function() {
				$.parallaxify({
					positionProperty: 'transform',
					responsive: true,
					motionType: 'natural',
					mouseMotionType: 'performance',
					motionAngleX: 70,
					motionAngleY: 70,
					alphaFilter: 0.5,
					adjustBasePosition: true,
					alphaPosition: 0.025,
				});
			});
		});
  </script>

      


<?php print render($page['menu']); ?>


    
    <div id="fullpage"> <!-- Full page script start -->

        <div class="sections-bg"></div> <!-- Background for all slides -->
        
        
        <div class="section active" id="section0"> 
          <div class="container wrapper">


            <div class="section0-parallax-layer1">&nbsp;</div>
            <div class="section0-parallax-layer2" data-parallaxify-background-range="10" style="background-position: -2px 2px;">&nbsp;</div>
            <div class="section0-parallax-layer3" data-parallaxify-background-range="50" style="background-position: -8px 14px;">&nbsp;</div>
            <div class="section0-parallax-layer4" data-parallaxify-background-range="100" style="background-position: -15px 28px;">&nbsp;</div>
            <div class="section0-parallax-layer5" data-parallaxify-background-range="300" style="background-position: -45px 84px;">&nbsp;</div>
            
            <?php print render($page['home_section_one']); ?>
          </div>

          
        </div> <!-- First vertical section end -->
        
        
        <div class="section" id="section1"> <!-- Second vertical section start -->
            <div class="container wrapper">
              
              <?php print render($page['home_section_two']); ?>
                
            </div>
	   </div> <!-- Second vertical section end -->
            
            
        <div class="section" id="section2"> <!-- Third vertical section start -->
            <div class="container wrapper">

                <?php print render($page['home_section_three']); ?>
                <style type="text/css">
                #ajaxsearchresult { position: absolute; z-index:100; }
#ajaxsearchresult .view-filters { display: none; }
</style>
                <div id="ajaxsearchresult" style="display:none;">
            </div>
        </div> <!-- Third vertical section end -->
    </div> <!-- Full page script end -->


<div class="section" id="section3"> <!-- Third vertical section start -->
    <link rel="stylesheet" href="/sites/all/themes/addeo/css/reveal.css"> 
    <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=DnqvKPxDo0bedJWuO4Wq21yUT-wReRIP&id=mymap"></script>
    <script type="text/javascript" src="/sites/all/themes/addeo/js/jquery.reveal.js"></script>
    <style type="text/css">
.playout h2, .playout h3 {
font-size: 22px;
color: #000;
border-bottom: 1px solid #000;
line-height: 60px;
padding-left: 30px;
padding-top: 0!important; }

.playout .right {
float: right;
margin-right: 61px;
}

.playout .left {
float: left;
margin-left: 29px;
}

.playout .left .place {
font-size: 14px;
text-transform: uppercase;
margin-bottom: 27px;}

.playout .left .place.chai, .playout .left .place.toro {
margin-bottom: 95px;
}

.playout .left .place.cinema {
margin-bottom: 85px;
}


.playout .right .period {
font-family: arial;
font-size: 14px;
position: relative;
margin-bottom: 23px;
}

.playout .right .period:before {
content: " ";
width: 5px;
height: 4px;
background-image: url(/sites/all/themes/addeo/images/bullet.png);
background-position: center;
background-repeat: no-repeat;
position: absolute;
top: 7px;
left: -20px;
}


.playout .right .period .time {
font-weight: 700;
margin-bottom: 11px;
}

.cross {
position: absolute;
width: 28px;
height: 28px;
border: 1px solid #000;
background: url(/sites/all/themes/addeo/images/close.png) center no-repeat;
right: 20px;
top: 15px;
cursor: pointer;
z-index: 1001;
-moz-transition: background .3s ease;
-o-transition: background .3s ease;
-webkit-transition: background .3s ease;
transition: background .3s ease;
}

#fullpage h3 {
font-size: 25px;
}
</style>
   <div id="mymap" width="100%" height="100%"></div>
    



    <div class="container wrapper">
        <div class="howtofind">Как нас найти?</div>
        <div id="parkerino" class="reveal-modal playout">
      <h3>Информация о паркинге</h3>
      <ul><li>Многоуровневая парковка: <span>24 часа</span> </li><li>Подземная парковка: c <span>10:00</span> до <span>23:00</span> </li><li>Первые <span>4</span> часа <span>150</span> руб. <br> <span>5-й</span> и каждый последующий час <span>50 руб</span>. </li><li>В рабочие дни, только многоуровневая парковка<br> менее <span>1 часа — бесплатно</span> </li></ul>
      
      <a class="close-reveal-modal cross"></a>
    </div>
        <div id="timerino" class="reveal-modal playout">

      <div>
  <h2>Время работы </h2>
  <div class="clearfix">
    <div class="right">
      <div class="period">
        <div class="time">10:00 – 3:00 </div>
      </div>
      <div class="period">
        <div class="day">пн — чт, вс </div>
        <div class="time">10:00 – 3:00 </div>
        <div class="day">пт — сб, праздники </div>
        <div class="time">10:00 – 5:30 </div>
      </div>
      <div class="period">
        <div class="day">пн — чт, вс </div>
        <div class="time">10:00 – 24:00 </div>
        <div class="day">пт — сб </div>
        <div class="time">10:00 – 01:00 </div>
      </div>
      <div class="period">
        <div class="day">пн — чт, вс </div>
        <div class="time">10:00 – 2:30 </div>
        <div class="day">пт — сб, праздники </div>
        <div class="time">10:00 – 4:00 </div>
      </div>
      <div class="period">
        <div class="day">пн — чт, вс </div>
        <div class="time">10:00 – 3:00 </div>
        <div class="day">пт — сб, праздники </div>
        <div class="time">10:00 – 5:30 </div>
      </div>
    </div>
    <div class="left">
      <div class="place">Гипермаркет карусель</div>
      <div class="place chai">Планета Суши</div>
      <div class="place toro">Il Patio</div>
      <div class="place cinema">Кинотеатр <br> "Радуга Кино"</div>
      <div class="place">Парк развлечений</div>
    </div>
  </div>
</div>
      <a class="close-reveal-modal cross"></a>
    </div>
        <div id="adresino" class="reveal-modal playout">
      <h3>Информация об адресе</h3>
<ul><li>м.Коломенская, м.Автозаводская ул.Проспект Андропова 8</li></ul>
      
      <a class="close-reveal-modal cross"></a>
    </div>
         <a href="#" data-reveal-id="adresino" data-animation="none"><div class="adres-icon"><p>Адрес</p></div></a>
        <a href="#" data-reveal-id="timerino" data-animation="none"><div class="time-icon"><p>Время работы</p></div></a>
        <a href="#" data-reveal-id="parkerino" data-animation="none"><div class="parking-icon"><p>Паркинг</p></div></a>
    </div>
    
  </div></div>
     </div>






