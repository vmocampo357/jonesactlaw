<?php  $filter_page_one = 3446; ?>
<div class="controls">
<?php	if( get_field  ('filter' , $filter_page_one ) ): ?>
	<?php while( has_sub_field('filter' , $filter_page_one) ): ?>

 <button class="filter" data-filter=".<?php the_sub_field  ('checkbox' , $filter_page_one); ?> "><?php the_sub_field('page_categor' , $filter_page_one); ?></button>
<?php endwhile; ?>		   
<?php endif; ?>
</div>
<!--
<div class="controls">
  <button class="filter" data-filter=".one">Getting Medical treatment</button>
  <button class="filter" data-filter=".two">Paying Your Bills</button>
  <button class="filter" data-filter=".one">Returning to Work</button>
</div>
-->


<div id="tab_content">
<ul id="Container" class="container">

<?php	if( get_field('filter' , $filter_page_one ) ): ?>
	<?php while( has_sub_field('filter' , $filter_page_one) ): ?>
             <li class="col-4 mix <?php the_sub_field  ('checkbox' , $filter_page_one); ?>">
                	<div class="webint">
                    	<div class="titile-head"><a href="<?php the_sub_field('page_link' , $filter_page_one); ?>"><?php the_sub_field('page_name' , $filter_page_one); ?> </a></div>
                        <div class="text">CATEGORY:<?php the_sub_field('page_categor' , $filter_page_one); ?></div>
                        <a href="<?php the_sub_field('page_link' , $filter_page_one); ?>" class="more">MORE INFO</a>
                    </div>                   
                </li>
<?php endwhile; ?>		   
<?php endif; ?>