<?php

/**
 * @file
 * Example of usage the bare_html_page_renderer service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\ProxyClass\Render\BareHtmlPageRenderer;
// The service interfaces.
use Drupal\Core\Render\BareHtmlPageRendererInterface;

/**
 * The example.
 */
class Example {

  /**
   * The bare_html_page_renderer service.
   *
   * @var \Drupal\Core\ProxyClass\Render\BareHtmlPageRenderer
   */
  protected $bareHtmlPageRenderer;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ProxyClass\Render\BareHtmlPageRenderer $bare_html_page_renderer
   *   The bare_html_page_renderer service.
   */
   public function __construct(BareHtmlPageRenderer $bare_html_page_renderer) {
     $this->bareHtmlPageRenderer = $bare_html_page_renderer;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('bare_html_page_renderer')
    );
  }

}
