<?php ?>
<HTML><HEAD><TITLE><?php print $title ?></TITLE>
    <META charset="utf-8">
           <?php if ($page['header']): ?>        
             <?php print render($page['header']); ?>       
           <?php endif; ?>  
  </HEAD>
  <BODY id="page1">
    <!--==============================header=================================-->
    <HEADER>
      <DIV class="row-1">
        <DIV class="main">
          <DIV class="container_24">
            <DIV class="wrapper">
              <DIV class="grid_15">
                <H1>
                  <A class="logo branco" href="/">Espeto Campinas</A>
                  <STRONG class="slog branco">Buffet Churrasco</STRONG>
                </H1>
              </DIV>
            </DIV>
          </DIV>
        </DIV>
      </DIV>

      <!--menu line-->
      <DIV class="row-2">
        <DIV class="main">
          <DIV class="container_24">
            <DIV class="grid_24">
              <!--              Menu-->
           <?php // if ($primary_nav): print $primary_nav; endif; ?>
           <?php if ($page['front_faixa_menu']): ?>        
             <?php print render($page['front_faixa_menu']); ?>       
           <?php endif; ?>              
            </DIV>
            <DIV class="clear">

            </DIV>          
          </DIV>          
        </DIV>          
      </DIV>
    </HEADER>

    <!--==============================content================================-->

    <SECTION id="content">
      <DIV class="main">
        <DIV class="container_24">
          <DIV class="wrapper">
            <ARTICLE class="grid_17 suffix_1 spacer-1">
          <?php print $breadcrumb; ?>
          <a id="main-content"></a>
          <?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1<?php print $tabs ? ' class="with-tabs"' : '' ?>><?php print $title ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>
          <?php print render($tabs2); ?>
          <?php print $messages; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <div class="clearfix">
            <?php print render($page['content']); ?>
          </div>
          <?php print $feed_icons ?>
          <?php print render($page['footer']); ?>
          
           <?php if ($page['conteudo']): ?>        
             <?php print render($page['conteudo']); ?>       
           <?php endif; ?>  
            </ARTICLE>

            <!-- //Segunda Coluna -->
            <ARTICLE class="grid_6">
           <?php if ($page['dicas']): ?>        
             <?php print render($page['dicas']); ?>       
           <?php endif; ?> 
            </ARTICLE>
          </DIV>
        </DIV>
      </DIV>

    </SECTION>


    <!--==============================footer=================================-->
    <FOOTER>
      <?php print $feed_icons ?>
      <?php print render($page['footer']); ?>  

      <DIV class="main">
        <DIV class="container_24">
          <DIV class="wrapper">
            <DIV class="grid_10 suffix_8">
				<?php if ($page['menu_inferior']): ?>        
					<?php print render($page['menu_inferior']); ?>       
				<?php endif; ?>
              <!-- {%FOOTER_LINK} -->
            </DIV>
            <DIV class="grid_6">
				<?php if ($page['rodape']): ?>        
					<?php print render($page['rodape']); ?>       
				<?php endif; ?>
            </DIV>
          </DIV>
        </DIV>
      </DIV>
    </FOOTER>
  </BODY>
  </HTML>