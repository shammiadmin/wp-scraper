<?php require_once("header.php");?>
	<?php require_once("index_slide.php");?>
  </div>
  <div class="FBG">
    <div class="FBG_resize">
      <div class="Recent">
        <h2 class="fbg_1">About us</h2>
        <p><span><strong></strong></span><br />
        <font style="font-weight:bold; font-size:12px;">ihostingbd </font> is high quality and cutting edge Offshore Web Development Company. We have established world-class benchmarks in Web application development, E-commerce solutions, Open Source Customization (Joomla, osCommerce, Word press, Drupal andmore), Custome software development services.</p>
      </div>
      <div class="Recent">
        <h2 class="fbg_2">Our Expertise</h2>
        <p><span><strong></strong></span><br />
        Technology Leader in: PHP development, Mobile application development, iPhoneapplication development, blackberry & Android development, Shopping card solutions. </p>
      </div>
      <div class="Recent">
        <h2 class="fbg_3">Latest News</h2>
		<?php $res = mysql_query("select * from news order by create_date desc limit 0, 1")or die(mysql_error()); ?>
		<?php while($row = mysql_fetch_object($res)){ ?>
		<p><span style="font-weight:bold;"><?=$row->title;?></span><br /><?=date('F jS, Y',$row->create_date);?><br />
	<?=$row->detail;?> <a href="top_news.php" class="news">more &raquo; </a></p>
	<? } ?>
        <!--<p><span><strong>Our history</strong></span><br />
        Feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.</p>-->
     <div align="center" style="width:100%;"><a style="text-decoration:none;font-size:12px; font-weight:bold; color:#2FC8D6;" href="top_news.php"> View All </a></div>
	  </div>
       <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
    <div class="clr"></div>
  <div class="body">
    <div class="body_resize">
      <div class="left">
        <h2>Welcome to ihostingbd<br />
        <span>Total web development and software solutions.</span></h2>
        <p>At ihostingbd, our customers are our most important asset. That's why we work hard to provide the best, most cutting-edge solutions possible. Your success is our success, which is why we have a team of experts that can handle every area of your marketing plan - from designing a web site, to building jaw-dropping copy, to teasing out the best ideas possible for your business. We don't just follow trends online - we set them!</p>
        <p>&nbsp;</p>
         <h2>Working Tools We are using<br />
        <span></span></h2>
        <div id="tools">
			<a target="_blank" href="#"><img src="icon/ajax.jpg" width="55" height="55" /> </a>
			<a target="_blank" href="http://www.alertpay.com"><img src="icon/alertpay.jpg" width="55" height="55" /> </a>
			<a target="_blank" href="http://www.codeigniter.com"><img src="icon/codeigniter.jpg" width="55" height="55" /> </a>
			<a target="_blank" href="http://www.w3schools.com/css/default.asp"><img src="icon/css.jpg" width="55" height="55" /> </a>
			<a target="_blank" href="http://www.drupal.com"><img src="icon/drupal.jpg" width="55" height="55" /> </a>
			<a href="http://www.facebook.com" target="_blank"><img src="icon/facebook.jpg" width="55" height="55" /> </a>
			<a target="_blank" href="http://www.checkout.google.com"><img src="icon/google_checkout.jpg" width="55" height="55" /> </a>
			<a target="_blank" href="http://www.joomla.com"><img src="icon/joomla.jpg" width="55" height="55" /> </a>
			<a target="_blank" href="http://www.w3schools.com/js/default.asp"><img src="icon/js.jpg" width="55" height="55" /> </a>
			<a target="_blank" href="http://www.libertyreserve.com"><img src="icon/liberty_reserve.jpg" width="55" height="55" /> </a>
			<a target="_blank" href="http://www.mysql.com"><img src="icon/mysql.jpg" width="55" height="55" /> </a>
			<a target="_blank" href="http://www.nochex.com"><img src="icon/nochex.jpg" width="55" height="55" /> </a>
			<a target="_blank" href="http://www.oscommerce.com"><img src="icon/oscommerce.gif" width="55" height="55" /> </a>
			<a target="_blank" href="http://www.patrasys.com"><img src="icon/patrasys.jpg" width="55" height="55" /> </a>
			<a target="_blank" href="http://www.paypal.com"><img src="icon/paypal.jpg" width="55" height="55" /> </a>
		</div>
      </div>
      <div class="right">
<div class="right_bg">
          <div class="right_top">
            <?php require_once("feedback.php");?>
          </div>
          <div class="right_bottom"></div>
        </div>
      </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
  <?php require_once("footer.php");?>
</div>
</body>
</html>