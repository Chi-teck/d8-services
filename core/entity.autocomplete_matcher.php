<?php

/**
 * @file
 * Example of usage the entity.autocomplete_matcher service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\EntityAutocompleteMatcher;

/**
 * The example.
 */
class Example {

  /**
   * The entity.autocomplete_matcher service.
   *
   * @var \Drupal\Core\Entity\EntityAutocompleteMatcher
   */
  protected $autocompleteMatcher;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\EntityAutocompleteMatcher $autocomplete_matcher
   *   The autocomplete_matcher service.
   */
   public function __construct(EntityAutocompleteMatcher $autocomplete_matcher) {
     $this->autocompleteMatcher = $autocomplete_matcher;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity.autocomplete_matcher')
    );
  }

}
