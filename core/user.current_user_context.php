<?php

/**
 * @file
 * Example of usage the user.current_user_context service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\user\ContextProvider\CurrentUserContext;
// The service interfaces.
use Drupal\Core\Plugin\Context\ContextProviderInterface;

/**
 * The example.
 */
class Example {

  /**
   * The user.current_user_context service.
   *
   * @var \Drupal\user\ContextProvider\CurrentUserContext
   */
  protected $currentUserContext;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\user\ContextProvider\CurrentUserContext $current_user_context
   *   The current_user_context service.
   */
   public function __construct(CurrentUserContext $current_user_context) {
     $this->currentUserContext = $current_user_context;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('user.current_user_context')
    );
  }

}
