<?php

/**
 * @file
 * Example of usage the comment.manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\comment\CommentManager;
// The service interfaces.
use Drupal\comment\CommentManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The comment.manager service.
   *
   * @var \Drupal\comment\CommentManagerInterface
   */
  protected $manager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\comment\CommentManagerInterface $manager
   *   The manager service.
   */
   public function __construct(CommentManagerInterface $manager) {
     $this->manager = $manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('comment.manager')
    );
  }

}
