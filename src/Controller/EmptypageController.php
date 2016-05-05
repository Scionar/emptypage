<?php
/**
 * @file
 * Contains \Drupal\emptypage\Controller\EmptypageController.
 */

namespace Drupal\emptypage\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Empty module.
 */
class EmptypageController extends ControllerBase {

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function content() {
    $element = array(
      '#markup' => '',
    );

    return $element;
  }

}
