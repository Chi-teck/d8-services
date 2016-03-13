<?php

/**
 * @file
 * Example of usage the entity.query.keyvalue service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\KeyValueStore\Query\QueryFactory;
// The service interfaces.
use Drupal\Core\Entity\Query\QueryFactoryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The entity.query.keyvalue service.
   *
   * @var \Drupal\Core\Entity\KeyValueStore\Query\QueryFactory
   */
  protected $keyvalue;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\KeyValueStore\Query\QueryFactory $keyvalue
   *   The keyvalue service.
   */
   public function __construct(QueryFactory $keyvalue) {
     $this->keyvalue = $keyvalue;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity.query.keyvalue')
    );
  }

}
