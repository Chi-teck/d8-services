<?php

/**
 * @file
 * Example of usage the pgsql.entity.query.sql service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Entity\Query\Sql\pgsql\QueryFactory;
// The service interfaces.
use Drupal\Core\Entity\Query\QueryFactoryInterface;

/**
 * The example.
 */
class Example {

  /**
   * The pgsql.entity.query.sql service.
   *
   * @var \Drupal\Core\Entity\Query\Sql\pgsql\QueryFactory
   */
  protected $sql;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Entity\Query\Sql\pgsql\QueryFactory $sql
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
      $container->get('pgsql.entity.query.sql')
    );
  }

}
