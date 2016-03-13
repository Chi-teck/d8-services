<?php

/**
 * @file
 * Example of usage the validation.constraint service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Validation\ConstraintManager;
// The service interfaces.
use Drupal\Component\Plugin\Discovery\CachedDiscoveryInterface;
use Drupal\Component\Plugin\PluginManagerInterface;
use Drupal\Component\Plugin\Mapper\MapperInterface;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The validation.constraint service.
   *
   * @var \Drupal\Core\Validation\ConstraintManager
   */
  protected $constraint;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Validation\ConstraintManager $constraint
   *   The constraint service.
   */
   public function __construct(ConstraintManager $constraint) {
     $this->constraint = $constraint;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('validation.constraint')
    );
  }

}
