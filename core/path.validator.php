<?php

/**
 * @file
 * Example of usage the path.validator service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Path\PathValidator;
// The service interfaces.
use Drupal\Core\Path\PathValidatorInterface;

/**
 * The example.
 */
class Example {

  /**
   * The path.validator service.
   *
   * @var \Drupal\Core\Path\PathValidatorInterface
   */
  protected $validator;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Path\PathValidatorInterface $validator
   *   The validator service.
   */
   public function __construct(PathValidatorInterface $validator) {
     $this->validator = $validator;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('path.validator')
    );
  }

}
