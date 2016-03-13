<?php

/**
 * @file
 * Example of usage the main_content_renderer.dialog service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Render\MainContent\DialogRenderer;
// The service interfaces.
use Drupal\Core\Render\MainContent\MainContentRendererInterface;

/**
 * The example.
 */
class Example {

  /**
   * The main_content_renderer.dialog service.
   *
   * @var \Drupal\Core\Render\MainContent\DialogRenderer
   */
  protected $dialog;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Render\MainContent\DialogRenderer $dialog
   *   The dialog service.
   */
   public function __construct(DialogRenderer $dialog) {
     $this->dialog = $dialog;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('main_content_renderer.dialog')
    );
  }

}
