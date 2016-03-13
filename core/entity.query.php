<?php

/**
 * @file
 * Example of usage the entity.query service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\Query\QueryFactory;
// The service interfaces.
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

/**
 * The example.
 */
class Example {

  /**
   * The entity.query service.
   *
   * @var \Drupal\Core\Entity\Query\QueryFactory
   */
  protected $query;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\Query\QueryFactory $query
   *   The query service.
   */
   public function __construct(QueryFactory $query) {
     $this->query = $query;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity.query')
    );
  }

}
