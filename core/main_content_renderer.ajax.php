<?php

/**
 * @file
 * Example of usage the main_content_renderer.ajax service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Render\MainContent\AjaxRenderer;
// The service interfaces.
use Drupal\Core\Render\MainContent\MainContentRendererInterface;

/**
 * The example.
 */
class Example {

  /**
   * The main_content_renderer.ajax service.
   *
   * @var \Drupal\Core\Render\MainContent\AjaxRenderer
   */
  protected $ajax;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Render\MainContent\AjaxRenderer $ajax
   *   The ajax service.
   */
   public function __construct(AjaxRenderer $ajax) {
     $this->ajax = $ajax;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('main_content_renderer.ajax')
    );
  }

}
