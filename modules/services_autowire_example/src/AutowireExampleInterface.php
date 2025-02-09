<?php

namespace Drupal\services_autowire_example;

/**
 * Interface for the SimpleService service.
 */
interface AutowireExampleInterface {

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
