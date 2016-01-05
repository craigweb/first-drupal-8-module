<?php
/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloWorldController.
 */

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * HelloWorldController.
 */
class HelloWorldController extends ControllerBase {
  /**
   * Generates an example page.
   */
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello world'),
    );
  }
}
