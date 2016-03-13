<?php

/**
 * @file
 * Example of usage the render_cache service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Render\PlaceholderingRenderCache;
// The service interfaces.
use Drupal\Core\Render\RenderCacheInterface;

/**
 * The example.
 */
class Example {

  /**
   * The render_cache service.
   *
   * @var \Drupal\Core\Render\PlaceholderingRenderCache
   */
  protected $renderCache;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Render\PlaceholderingRenderCache $render_cache
   *   The render_cache service.
   */
   public function __construct(PlaceholderingRenderCache $render_cache) {
     $this->renderCache = $render_cache;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('render_cache')
    );
  }

}
