<?php

/**
 * @file
 * Example of usage the entity.query.sql service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\Query\Sql\QueryFactory;
// The service interfaces.
use Drupal\Core\Entity\Query\QueryFactoryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The entity.query.sql service.
   *
   * @var \Drupal\Core\Entity\Query\Sql\QueryFactory
   */
  protected $sql;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\Query\Sql\QueryFactory $sql
   *   The sql service.
   */
   public function __construct(QueryFactory $sql) {
     $this->sql = $sql;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity.query.sql')
    );
  }

}
