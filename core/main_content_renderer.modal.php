<?php

/**
 * @file
 * Example of usage the main_content_renderer.modal service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Render\MainContent\ModalRenderer;
// The service interfaces.
use Drupal\Core\Render\MainContent\MainContentRendererInterface;

/**
 * The example.
 */
class Example {

  /**
   * The main_content_renderer.modal service.
   *
   * @var \Drupal\Core\Render\MainContent\ModalRenderer
   */
  protected $modal;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Render\MainContent\ModalRenderer $modal
   *   The modal service.
   */
   public function __construct(ModalRenderer $modal) {
     $this->modal = $modal;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('main_content_renderer.modal')
    );
  }

}
