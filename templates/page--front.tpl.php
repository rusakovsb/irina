<div id="container">

  <header id="header">

    <nav id="nav">
      <?php print render($page['nav']); ?>
    </nav>
  
    <div id="site-name-slogan">
      <div id="site-name"><a href="<?php print $front_page; ?>"><?php print $site_name; ?></a></div>
      <div id="site-slogan"><?php if ($site_slogan): ?><?php print $site_slogan; ?><?php endif; ?></div>
    </div>
    
  </header>
  
  <main id="main">
    <div id="page-content">
      <div id="overlay"></div>
      <?php print $messages; ?>    
      <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper"><?php print render($tabs); ?></div><?php endif; ?>
      <?php print render($page['help']); ?>  
      <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
      <?php print render($page['content']); ?>
      </div>
  </main>  

  <footer id="footer"> 
    <?php print render($page['footer']) ?>
  </footer>

</div>

<div id="mobile-panel"> 
    <?php print render($page['mobile_panel']) ?>
</div>