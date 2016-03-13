<?php

/**
 * @file
 * Example of usage the renderer service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Render\Renderer;
// The service interfaces.
use Drupal\Core\Render\RendererInterface;

/**
 * The example.
 */
class Example {

  /**
   * The renderer service.
   *
   * @var \Drupal\Core\Render\RendererInterface
   */
  protected $renderer;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Render\RendererInterface $renderer
   *   The renderer service.
   */
   public function __construct(RendererInterface $renderer) {
     $this->renderer = $renderer;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('renderer')
    );
  }

}
