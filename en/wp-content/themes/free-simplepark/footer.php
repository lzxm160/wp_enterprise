<div id="footer">
	 <div class="footer_in">
            <?php wp_nav_menu(array('container' => false, 'theme_location' => 'footer-menu1','menu_class'=> 'footer_nav' ) ); ?>
           

           
             <?php           $footer_loop=get_option('mytheme_footer_loop'); 
		                     $footer_loop_bt=get_option('mytheme_footer_loop_bt'); 
				             $footer_loop_other=get_option('mytheme_footer_loop_other');	
				     
		    ?>
            <div class="footer_hot">
            <b><?php if($footer_loop_bt !=""){ echo $footer_loop_bt ;}else{echo 'Hot Read';};?></b>
            	<ul>
              
			   <?php $posts = get_posts( "category=($footer_loop)&numberposts=6" ); ?>
                <?php if( $posts ) : ?>                                       
			   <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>     
                   <li> <a title="<?php the_title();?>"  href="<?php the_permalink() ?>">  <?php   $tit= get_the_title();if (has_post_thumbnail()) { the_post_thumbnail('footer-small-thumbb' ,array('alt'	=>$tit, 'title'=> $tit ));}?></a></li>
                   
                   
                   
                    <?php endforeach; ?>                                            
               <?php else : ?>
               <?php endif; ?> 
                    <?php  ?>
                
                </ul>
            
            </div>
            <div class="weixin">
          
           <?php if($footer_loop_other ==""){echo ' <img src="'. get_bloginfo('template_url').'/images/weixin.gif'.'" />'; }else{ echo '<img src="'.$footer_loop_other.'" />';} ?>
            </div>
     
           <?php wp_nav_menu(array('container' => false, 'theme_location' => 'footer-menu2','menu_class'=> 'footer_mune' ) ); ?>
     
     
      </div>
      <div class="footer_bottom">
        <div class="footer_bottom_in f_bq p">
           <?php wp_nav_menu(array('container' => false, 'theme_location' => 'link-menu2','menu_class'=> 'link-menu2' ) ); $word_t2=get_option('mytheme_word_t2');$themepark= get_option('mytheme_themepark'); $icp = get_option('mytheme_icp_b');?>
            <p> <?php if($word_t2!=""){echo $word_t2;}else{echo '版权所有';}  ?> &copy;<?php echo date("Y"); echo " "; bloginfo('name'); 
		   if($icp !=="") {echo ' |   <a rel="nofollow" target="_blank" href="http://www.miitbeian.gov.cn/">'.$icp.'</a>'; };
		   echo ' |   <a class="banquan" target="_blank" href="http://www.themepark.com.cn">技术支持：WEB主题公园</a>'; 
		   
		    echo ' |  '.stripslashes(get_option('mytheme_analytics')); ?> </p>
        </div>
      </div>
     	
</div>



	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
