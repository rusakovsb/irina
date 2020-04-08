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

    <?php print render($title_prefix); ?>
      <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
  
    <div id="content-wrapper">

      <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="sidebar">
          <?php print render($page['sidebar_first']); ?>
        </div>  
      <?php endif; ?>

      <div id="page-content">
        <div id="overlay"></div>
        <?php print $messages; ?>    
        <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>     
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
      </div> 
      
      <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="sidebar">
          <?php print render($page['sidebar_second']); ?>
        </div>  
      <?php endif; ?>
    
    </div>

  </main> 

  <footer id="footer"> 
    <?php print render($page['footer']) ?>
  </footer>

</div>

<div id="mobile-panel"> 
    <?php print render($page['mobile_panel']) ?>
</div>
