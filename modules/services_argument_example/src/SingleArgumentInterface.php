<?php

namespace Drupal\services_argument_example;

/**
 * Interface for the SimpleService service.
 */
interface SingleArgumentInterface {

  /**
   * Removes an item from a payload.
   *
   * @param string $payload
   *   The payload to alter.
   * @param int $id
   *   The ID to remove from the payload.
   *
   * @return string
   *   The resulting payload string.
   */
  public function removeItemFromPayload(string $payload, int $id):string;

}
