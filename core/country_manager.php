<?php

/**
 * @file
 * Example of usage the country_manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Locale\CountryManager;
// The service interfaces.
use Drupal\Core\Locale\CountryManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The country_manager service.
   *
   * @var \Drupal\Core\Locale\CountryManagerInterface
   */
  protected $countryManager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Locale\CountryManagerInterface $country_manager
   *   The country_manager service.
   */
   public function __construct(CountryManagerInterface $country_manager) {
     $this->countryManager = $country_manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('country_manager')
    );
  }

}
