<?php

declare(strict_types=1);

namespace Drupal\services_hooks_example;

use Drupal\Core\Extension\ModuleHandlerInterface;

/**
 * Service that defines a custom hook.
 */
class CustomHook implements CustomHookInterface {

  /**
   * Creates a new CustomHook object.
   *
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $moduleHandler
   *   The module handler service.
   */
  public function __construct(protected ModuleHandlerInterface $moduleHandler) {
  }

  /**
   * {@inheritdoc}
   */
  public function getItems():array {
    $items = $this->moduleHandler->invokeAll('example_get_items', [[]]);
    sort($items);
    return $items;
  }

}
