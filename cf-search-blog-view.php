 <div class="post-block-style row">
   <?php if(has_post_thumbnail()): ?>
      <div class="col-md-6">
         <div class="post-media post-image">
            <div>
               <?php digiqole_category_meta(); ?>
            </div>

            <a href="<?php echo esc_url(get_the_permalink()); ?>">
                 <img class="img-fluid" src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt=" <?php the_title_attribute(); ?>">
            </a>
         </div>
         <!-- GP | start custom fields -->
   <div class="container gp-acf acf-cat">
         <div class="row cat-size-acf">
            <?php if (in_category( array ( 'associations-list', 'associations-featured' ))) : ?>
              <?php
               $field = get_field_object('geographical_area');
               ?>
               <p>
                  <strong><?php echo $field['label']; ?>:</strong> <?php echo $field['value']; ?>
                  <span class="gp-divider cat-divider">|</span>
               </p>
               <?php
               $field = get_field_object('business_area');
               ?>
               <p>
                  <strong><?php echo $field['label']; ?>:</strong> <?php echo $field['value']; ?>
               </p>
            <?php endif;?>
         </div>
      </div>
   <!-- GP | end custom fields -->
      </div>
   <?php endif; ?>
   <div class="<?php echo esc_attr(has_post_thumbnail()?"col-md-6":"col-md-12"); ?> ">
      <div class="post-content">
         <div class="entry-blog-header">
            <h2 class="post-title md">
               <a href="<?php echo esc_url(get_the_permalink()); ?>"><?php echo esc_html( digiqole_get_crop_title(get_the_title()) ); ?></a>
            </h2>
         </div>
         <div class="post-meta">
            <?php digiqole_category_post_meta(); ?>
            
         </div>
         <div class="entry-blog-summery">
            <p><?php echo digiqole_get_excerpt(); ?></p>
         </div>
      </div>
   </div>
</div>




