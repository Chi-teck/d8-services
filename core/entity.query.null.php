<?php

/**
 * @file
 * Example of usage the entity.query.null service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\Query\Null\QueryFactory;
// The service interfaces.
use Drupal\Core\Entity\Query\QueryFactoryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The entity.query.null service.
   *
   * @var \Drupal\Core\Entity\Query\Null\QueryFactory
   */
  protected $null;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\Query\Null\QueryFactory $null
   *   The null service.
   */
   public function __construct(QueryFactory $null) {
     $this->null = $null;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity.query.null')
    );
  }

}
