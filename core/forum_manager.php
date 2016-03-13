<?php

/**
 * @file
 * Example of usage the forum_manager service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\forum\ForumManager;
// The service interfaces.
use Drupal\forum\ForumManagerInterface;

/**
 * The example.
 */
class Example {

  /**
   * The forum_manager service.
   *
   * @var \Drupal\forum\ForumManagerInterface
   */
  protected $forumManager;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\forum\ForumManagerInterface $forum_manager
   *   The forum_manager service.
   */
   public function __construct(ForumManagerInterface $forum_manager) {
     $this->forumManager = $forum_manager;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('forum_manager')
    );
  }

}
