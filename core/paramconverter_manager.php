<?php

/**
 * @file
 * Example of usage the paramconverter_manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\ParamConverter\ParamConverterManager;
// The service interfaces.
use Drupal\Core\ParamConverter\ParamConverterManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The paramconverter_manager service.
   *
   * @var \Drupal\Core\ParamConverter\ParamConverterManagerInterface
   */
  protected $paramconverterManager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ParamConverter\ParamConverterManagerInterface $paramconverter_manager
   *   The paramconverter_manager service.
   */
   public function __construct(ParamConverterManagerInterface $paramconverter_manager) {
     $this->paramconverterManager = $paramconverter_manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('paramconverter_manager')
    );
  }

}
