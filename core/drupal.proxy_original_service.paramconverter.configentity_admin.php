<?php

/**
 * @file
 * Example of usage the drupal.proxy_original_service.paramconverter.configentity_admin service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\ParamConverter\AdminPathConfigEntityConverter;
// The service interfaces.
use Drupal\Core\ParamConverter\ParamConverterInterface;

/**
 * The example.
 */
class Example {

  /**
   * The drupal.proxy_original_service.paramconverter.configentity_admin service.
   *
   * @var \Drupal\Core\ParamConverter\AdminPathConfigEntityConverter
   */
  protected $configentityAdmin;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\ParamConverter\AdminPathConfigEntityConverter $configentity_admin
   *   The configentity_admin service.
   */
   public function __construct(AdminPathConfigEntityConverter $configentity_admin) {
     $this->configentityAdmin = $configentity_admin;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('drupal.proxy_original_service.paramconverter.configentity_admin')
    );
  }

}
