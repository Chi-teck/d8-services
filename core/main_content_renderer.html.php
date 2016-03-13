<?php

/**
 * @file
 * Example of usage the main_content_renderer.html service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Render\MainContent\HtmlRenderer;
// The service interfaces.
use Drupal\Core\Render\MainContent\MainContentRendererInterface;

/**
 * The example.
 */
class Example {

  /**
   * The main_content_renderer.html service.
   *
   * @var \Drupal\Core\Render\MainContent\HtmlRenderer
   */
  protected $html;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Render\MainContent\HtmlRenderer $html
   *   The html service.
   */
   public function __construct(HtmlRenderer $html) {
     $this->html = $html;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('main_content_renderer.html')
    );
  }

}
