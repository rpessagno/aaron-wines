<?php

/*
Template Name: Vintage Charts
*/

get_header();

?>



<article class="post">
  <header class="post-header">
    <h1 class="h1"><?php the_title(); ?></h1>
  </header>
  <section class="post-content post-content-wide">

    

    <figure class="wp-block-table">
    <table class="chart">

    <tr>
      <th>Wine</th>
      <th>2022</th>
      <th>2021</th>
      <th>2020</th>
      <th>2019</th>
      <th>2018</th>
      <th>2017</th>
      <th>2016</th>
      <th>2015</th>
      <th>2014</th>
      <th>2013</th>
      <th>2012</th>
      <th>2011</th>
      <th>2010</th>
      <th>2009</th>
      <th>2008</th>
      <th>2007</th>
      <th>2006</th>
      <th>2005</th>
      <th>2004</th>
      <th>2003</th>

      <?php if( have_rows('vintages') ) { ?>
      <?php while ( have_rows('vintages') ) { the_row(); ?>
      <th class="chart-vintage"><?php the_sub_field('vintage'); ?></th>
      <?php } ?>
      <?php } ?>

    </tr>

    <?php if( have_rows('wines') ) { ?>
    <?php while ( have_rows('wines') ) { the_row(); ?>

    <?php
      $name = get_sub_field('name');
      $vintages = get_sub_field('vintages');
      $vintage = $vintages['vintage'];
      $vintage_2022 = $vintages['vintage_2022_vintage'];
      $vintage_2021 = $vintages['vintage_2021_vintage'];
      $vintage_2020 = $vintages['vintage_2020_vintage'];
      $vintage_2019 = $vintages['vintage_2019_vintage'];
      $vintage_2018 = $vintages['vintage_2018_vintage'];
      $vintage_2017 = $vintages['vintage_2017_vintage'];
      $vintage_2016 = $vintages['vintage_2016_vintage'];
      $vintage_2015 = $vintages['vintage_2015_vintage'];
      $vintage_2014 = $vintages['vintage_2014_vintage'];
      $vintage_2013 = $vintages['vintage_2013_vintage'];
      $vintage_2012 = $vintages['vintage_2012_vintage'];
      $vintage_2011 = $vintages['vintage_2011_vintage'];
      $vintage_2010 = $vintages['vintage_2010_vintage'];
      $vintage_2009 = $vintages['vintage_2009_vintage'];
      $vintage_2008 = $vintages['vintage_2008_vintage'];
      $vintage_2007 = $vintages['vintage_2007_vintage'];
      $vintage_2006 = $vintages['vintage_2006_vintage'];
      $vintage_2005 = $vintages['vintage_2005_vintage'];
      $vintage_2004 = $vintages['vintage_2004_vintage'];
      $vintage_2003 = $vintages['vintage_2003_vintage'];
    ?>

    <tr>
      <td><?php echo $name; ?></td>
      
      <td class="chart-vintage chart-maturity chart-maturity-<?php echo $vintage_2022; ?>"></td>
      <td class="chart-vintage chart-maturity chart-maturity-<?php echo $vintage_2021; ?>"></td>
      <td class="chart-vintage chart-maturity chart-maturity-<?php echo $vintage_2020; ?>"></td>
      <td class="chart-vintage chart-maturity chart-maturity-<?php echo $vintage_2019; ?>"></td>
      <td class="chart-vintage chart-maturity chart-maturity-<?php echo $vintage_2018; ?>"></td>
      <td class="chart-vintage chart-maturity chart-maturity-<?php echo $vintage_2017; ?>"></td>
      <td class="chart-vintage chart-maturity chart-maturity-<?php echo $vintage_2016; ?>"></td>
      <td class="chart-vintage chart-maturity chart-maturity-<?php echo $vintage_2015; ?>"></td>
      <td class="chart-vintage chart-maturity chart-maturity-<?php echo $vintage_2014; ?>"></td>
      <td class="chart-vintage chart-maturity chart-maturity-<?php echo $vintage_2013; ?>"></td>
      <td class="chart-vintage chart-maturity chart-maturity-<?php echo $vintage_2012; ?>"></td>
      <td class="chart-vintage chart-maturity chart-maturity-<?php echo $vintage_2011; ?>"></td>
      <td class="chart-vintage chart-maturity chart-maturity-<?php echo $vintage_2010; ?>"></td>
      <td class="chart-vintage chart-maturity chart-maturity-<?php echo $vintage_2009; ?>"></td>
      <td class="chart-vintage chart-maturity chart-maturity-<?php echo $vintage_2008; ?>"></td>
      <td class="chart-vintage chart-maturity chart-maturity-<?php echo $vintage_2007; ?>"></td>
      <td class="chart-vintage chart-maturity chart-maturity-<?php echo $vintage_2006; ?>"></td>
      <td class="chart-vintage chart-maturity chart-maturity-<?php echo $vintage_2005; ?>"></td>
      <td class="chart-vintage chart-maturity chart-maturity-<?php echo $vintage_2004; ?>"></td>
      <td class="chart-vintage chart-maturity chart-maturity-<?php echo $vintage_2003; ?>"></td>

    </tr>


    <?php } ?>
    <?php } ?>


    </table>
    </figure>

    <ul class="chart-key">
      <li class="chart-key-item">
        <span class="chart-key-item-maturity chart-maturity-option1"></span>
        <span class="chart-key-item-description">Don’t open yet</span>
      </li>
      <li class="chart-key-item">
        <span class="chart-key-item-maturity chart-maturity-option2"></span>
        <span class="chart-key-item-description">Open and decant before drinking</span>
      </li>
      <li class="chart-key-item">
        <span class="chart-key-item-maturity chart-maturity-option3"></span>
        <span class="chart-key-item-description">Pop that baby open and savor it at its peak!</span>
      </li>
      <li class="chart-key-item">
        <span class="chart-key-item-maturity chart-maturity-option4"></span>
        <span class="chart-key-item-description">Appreciate the maturity of the wine</span>
      </li>
      <li class="chart-key-item">
        <span class="chart-key-item-maturity chart-maturity-option5"></span>
        <span class="chart-key-item-description">You’ll regret not drinking this sooner</span>
      </li>
      <li class="chart-key-item">
        <span class="chart-key-item-maturity chart-maturity-option6"></span>
        <span class="chart-key-item-description">Not released</span>
      </li>
    </ul>



  </section>
</article>


<?php get_footer(); ?>