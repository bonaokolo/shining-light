<div id="wrapper">
  <div id="navigation"><?php print theme('links__system_main_menu',array('links' => $main_menu)); ?>


  <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>

  </div>
  
   <div id="banner_wrapper">

      <?php if ($banner): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="banner">
            <img src="<?php print $banner; ?>" alt="<?php print t('Home'); ?>" />
          </a>
        <?php endif; ?>
    </div>


  <div id="header"><?php print render($page['header']); ?><h1></h1></div>



  <div id="page-wrapper">

    <div id="content">
      <?php print $messages; ?>
      <h1><?php print $title; ?></h1>
      <div class="tabs"><?php print render($tabs); ?></div>
      <?php print render($page['help']); ?>
      <ul class="action-links"><?php if($action_links){ print render($action_links);} ?></ul>
      <?php print render($page['content']); ?>
   </div>
 </div>


 <div id="footer-wrapper"><div class="section">

   <?php if ($page['footer_firstcolumn'] || $page['footer_secondcolumn'] || $page['footer_thirdcolumn'] || $page['footer_fourthcolumn']): ?>
     <div id="footer-columns" class="clearfix">
       <?php print render($page['footer_firstcolumn']); ?>
       <?php print render($page['footer_secondcolumn']); ?>
       <?php print render($page['footer_thirdcolumn']); ?>
       <?php print render($page['footer_fourthcolumn']); ?>
     </div> <!-- /#footer-columns -->
   <?php endif; ?>

   <?php if ($page['footer']): ?>
     <div id="footer" class="clearfix">
       <?php print render($page['footer']); ?>
     </div> <!-- /#footer -->
   <?php endif; ?>

 </div></div> <!-- /.section, /#footer-wrapper -->

</div>
