<?php

/**
 * @file
 * Example of usage the views.views_data service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\views\ViewsData;

/**
 * The example.
 */
class Example {

  /**
   * The views.views_data service.
   *
   * @var \Drupal\views\ViewsData
   */
  protected $viewsData;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\views\ViewsData $views_data
   *   The views_data service.
   */
   public function __construct(ViewsData $views_data) {
     $this->viewsData = $views_data;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('views.views_data')
    );
  }

}
