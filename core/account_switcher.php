<?php

/**
 * @file
 * Example of usage the account_switcher service.
 */

namespace Drupal\d8_services;

use Symfony\Component\DependencyInjection\ContainerInterface;

// The service class.
use Drupal\Core\Session\AccountSwitcher;
// The service interfaces.
use Drupal\Core\Session\AccountSwitcherInterface;

/**
 * The example.
 */
class Example {

  /**
   * The account_switcher service.
   *
   * @var \Drupal\Core\Session\AccountSwitcherInterface
   */
  protected $accountSwitcher;

  /**
   * Constructs a new class instance.
   *
   * @param \Drupal\Core\Session\AccountSwitcherInterface $account_switcher
   *   The account_switcher service.
   */
   public function __construct(AccountSwitcherInterface $account_switcher) {
     $this->accountSwitcher = $account_switcher;
   }

   /**
    * Creates a new class instance.
    */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('account_switcher')
    );
  }

}
