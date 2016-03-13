<?php

/**
 * @file
 * Example of usage the module_handler service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Extension\ModuleHandler;
// The service interfaces.
use Drupal\Core\Extension\ModuleHandlerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The module_handler service.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   The module_handler service.
   */
   public function __construct(ModuleHandlerInterface $module_handler) {
     $this->moduleHandler = $module_handler;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('module_handler')
    );
  }

}
