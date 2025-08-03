<?php

declare(strict_types=1);

namespace Drupal\services_hooks_example\Hook;

use Drupal\Core\Hook\Attribute\Hook;

/**
 * Module hooks for interacting with the hook_example_get_items() hook.
 */
#[Hook('example_get_items', method: 'getItems')]
class ExampleGetItemsHooks {

  /**
   * Implements hook_example_get_items().
   */
  public function getItems() {
    return ['one', 'two', 'three'];
  }

}
