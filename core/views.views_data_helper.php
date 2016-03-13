<?php

/**
 * @file
 * Example of usage the views.views_data_helper service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\views\ViewsDataHelper;

/**
 * The example.
 */
class Example {

  /**
   * The views.views_data_helper service.
   *
   * @var \Drupal\views\ViewsDataHelper
   */
  protected $viewsDataHelper;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\views\ViewsDataHelper $views_data_helper
   *   The views_data_helper service.
   */
   public function __construct(ViewsDataHelper $views_data_helper) {
     $this->viewsDataHelper = $views_data_helper;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('views.views_data_helper')
    );
  }

}
