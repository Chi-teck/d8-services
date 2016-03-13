<?php

/**
 * @file
 * Example of usage the comment.statistics service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\comment\CommentStatistics;
// The service interfaces.
use Drupal\comment\CommentStatisticsInterface;

/**
 * The example.
 */
class Example {

  /**
   * The comment.statistics service.
   *
   * @var \Drupal\comment\CommentStatisticsInterface
   */
  protected $statistics;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\comment\CommentStatisticsInterface $statistics
   *   The statistics service.
   */
   public function __construct(CommentStatisticsInterface $statistics) {
     $this->statistics = $statistics;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('comment.statistics')
    );
  }

}
