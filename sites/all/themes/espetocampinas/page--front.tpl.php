<?php ?>

<HTML>
  <HEAD>
    <TITLE>Espeto Campinas</TITLE>
    <META charset="utf-8">
  

    <script type="text/javascript">
      $(document).ready(function() { 
        $(".carousel .jCarouselLite").jCarouselLite({
          btnNext: ".carousel .next",
          btnPrev: ".carousel .prev",
          scroll: 1,
          mouseWheel: true,
          auto: 6000,
		
          speed: 300,
          easing: 'easeOutExpo',
		
          vertical: false,
          circular: true,
          visible: 4,
          start: 0
        });
      }); 
    </script>
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
            <DIV class="clear"></DIV>
            
          </DIV>
            
        </DIV>
            
      </DIV>
     
<!--      Faixa Principal-->
   
      
      <?php if ($page['front_faixa_principal']): ?>        
        <?php print render($page['front_faixa_principal']); ?>       
      <?php endif; ?>
    </HEADER>
    
    
    <!--==============================content================================-->
    
    <SECTION id="content">
      <DIV class="container p3">
      <?php if ($page['front_centro_topo']): ?>        
        <?php print render($page['front_centro_topo']); ?>       
      <?php endif; ?>  
      </DIV>     
      
      <DIV class="main">
        <DIV class="container_24">          
                 
          <DIV class="wrapper">
            <ARTICLE class="grid_17 suffix_1 spacer-1">
                <?php if ($page['front_content_esquerda']): ?>        
                  <?php print render($page['front_content_esquerda']); ?>       
                <?php endif; ?>              
            </ARTICLE>
            <ARTICLE class="grid_6">                                   
                <?php if ($page['front_content_direita']): ?>        
                  <?php print render($page['front_content_direita']); ?>       
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

