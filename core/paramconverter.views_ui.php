<?php

/**
 * @file
 * Example of usage the paramconverter.views_ui service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\views_ui\ProxyClass\ParamConverter\ViewUIConverter;
// The service interfaces.
use Drupal\Core\ParamConverter\ParamConverterInterface;

/**
 * The example.
 */
class Example {

  /**
   * The paramconverter.views_ui service.
   *
   * @var \Drupal\views_ui\ProxyClass\ParamConverter\ViewUIConverter
   */
  protected $viewsUi;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\views_ui\ProxyClass\ParamConverter\ViewUIConverter $views_ui
   *   The views_ui service.
   */
   public function __construct(ViewUIConverter $views_ui) {
     $this->viewsUi = $views_ui;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('paramconverter.views_ui')
    );
  }

}
