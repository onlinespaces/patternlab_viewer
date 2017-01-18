<?php
/**
 * @file
 * Contains \Drupal\patternlab_drupal_bridge\Controller\PatternlabDrupalBridgeController.
 */
namespace Drupal\patternlab_drupal_bridge\Controller;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Provides response for the module.
 */
class PatternlabDrupalBridgeController extends ControllerBase {
  /**
   * Redirects to the patternlab path for the theme.
   */
  public function view($theme) {
    return new RedirectResponse("/themes/{$theme}/pattern-lab/public/index.html");
  }
}