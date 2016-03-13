<?php

/**
 * @file
 * Example of usage the comment.lazy_builders service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\comment\CommentLazyBuilders;

/**
 * The example.
 */
class Example {

  /**
   * The comment.lazy_builders service.
   *
   * @var \Drupal\comment\CommentLazyBuilders
   */
  protected $lazyBuilders;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\comment\CommentLazyBuilders $lazy_builders
   *   The lazy_builders service.
   */
   public function __construct(CommentLazyBuilders $lazy_builders) {
     $this->lazyBuilders = $lazy_builders;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('comment.lazy_builders')
    );
  }

}
