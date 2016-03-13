<?php

/**
 * @file
 * Example of usage the paramconverter_manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\ParamConverter\ParamConverterManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The param converter manager.
   *
   * @var \Drupal\Core\ParamConverter\ParamConverterManagerInterface
   */
  protected $paramConverterManager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ParamConverter\ParamConverterManagerInterface $param_converter_manager
   *   The param converter manager.
   */
   public function __construct(ParamConverterManagerInterface $param_converter_manager) {
     $this->paramConverterManager = $param_converter_manager;
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
