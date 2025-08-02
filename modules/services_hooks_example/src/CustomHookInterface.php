<?php

declare(strict_types=1);

namespace Drupal\services_hooks_example;

/**
 * Interface for the custom hook service.
 */
interface CustomHookInterface {

  /**
   * Invokes the example_get_items hook and returns a list of items found.
   *
   * @return array
   *   The list of items found.
   */
  public function getItems():array;
}
