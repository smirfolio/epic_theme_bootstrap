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
 * Code for login form.
 */

?>

<p><?php print render($intro_text); ?></p>

<div class="row">
  <div class="col-md-6">
      <?php print drupal_render_children($form) ?>
  </div>
</div>
