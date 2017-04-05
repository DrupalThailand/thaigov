<?php

/**
 * @file
 * Install, update and uninstall functions for the aGov profile.
 */

/**
 * Implements hook_install().
 */
function thaigov_install() {
  // The system.site config entity must be configured during install.
  \Drupal::configFactory()->getEditable('system.site')
    ->set('mail', 'admin@drupalthai.org')
    ->set('name', 'ThaiGov')
    ->save();
}
