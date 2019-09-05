<?php

echo '<div class="current-player">';
  echo '<span class="currently-playing">'. get_the_title() .'</span>';
  echo do_shortcode('[powerpress]');
echo '</div>';
