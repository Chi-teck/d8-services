<?php

/**
 * @file
 * Example of usage the drupal.proxy_original_service.bare_html_page_renderer service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Render\BareHtmlPageRenderer;
// The service interfaces.
use Drupal\Core\Render\BareHtmlPageRendererInterface;

/**
 * The example.
 */
class Example {

  /**
   * The drupal.proxy_original_service.bare_html_page_renderer service.
   *
   * @var \Drupal\Core\Render\BareHtmlPageRendererInterface
   */
  protected $bareHtmlPageRenderer;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Render\BareHtmlPageRendererInterface $bare_html_page_renderer
   *   The bare_html_page_renderer service.
   */
   public function __construct(BareHtmlPageRendererInterface $bare_html_page_renderer) {
     $this->bareHtmlPageRenderer = $bare_html_page_renderer;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('drupal.proxy_original_service.bare_html_page_renderer')
    );
  }

}
