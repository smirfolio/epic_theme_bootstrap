<?php
/**
 *  Copyright (c) 2016 OBiBa. All rights reserved.
 *  This program and the accompanying materials
 *  are made available under the terms of the GNU Public License v3.0.
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * @file
 * Code for block template in micado theme.
 */

?>

<section id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <h4<?php print $title_attributes; ?>><?php print $title; ?></h4>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="block-content">
    <?php print $content ?>
  </div>

</section> <!-- /.block -->
