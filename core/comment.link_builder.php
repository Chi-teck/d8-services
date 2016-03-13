<?php

/**
 * @file
 * Example of usage the comment.link_builder service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\comment\CommentLinkBuilder;
// The service interfaces.
use Drupal\comment\CommentLinkBuilderInterface;

/**
 * The example.
 */
class Example {

  /**
   * The comment.link_builder service.
   *
   * @var \Drupal\comment\CommentLinkBuilderInterface
   */
  protected $linkBuilder;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\comment\CommentLinkBuilderInterface $link_builder
   *   The link_builder service.
   */
   public function __construct(CommentLinkBuilderInterface $link_builder) {
     $this->linkBuilder = $link_builder;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('comment.link_builder')
    );
  }

}
