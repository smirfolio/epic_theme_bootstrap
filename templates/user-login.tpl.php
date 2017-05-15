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
 * Code for login block.
 */

?>

<p><?php print render($intro_text); ?></p>

<div class="row">
  <div class="col-md-6">
    <?php print drupal_render_children($form) ?>
    <div class="md-top-margin">
      <?php print l(t('Forgot your password?'), 'user/password') ?>
      <div>
        <?php $register_url = (module_exists('obiba_agate') ? 'agate' : 'user') . '/register/';
        $option_sign_up = [];
        if (module_exists('obiba_agate')) {
          $option_sign_up = array('fragment' => 'join');
        }
        print l('Not a member? Join now',
          $register_url, $option_sign_up) ?>
      </div>
    </div>
  </div>
</div>
