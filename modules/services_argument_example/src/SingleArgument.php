<?php

namespace Drupal\services_argument_example;

use Drupal\Component\Serialization\SerializationInterface;

/**
 * An example of a service that accepts an argument.
 *
 * This service has a dependency on the serialization.json service. Although
 * any of the classes that implement SerializationInterface will work as long
 * as the payload is of the correct type.
 */
class SingleArgument implements SingleArgumentInterface {

  /**
   * Creates a SingleArgument service object.
   *
   * @param \Drupal\Component\Serialization\SerializationInterface $serializer
   *   A serializer service.
   */
  public function __construct(protected SerializationInterface $serializer) {
  }

  /**
   * {@inheritDoc}
   */
  public function removeItemFromPayload(string $payload, int $id):string {
    $payload = $this->serializer->decode($payload);
    foreach ($payload as $key => $item) {
      if ($item['id'] === $id) {
        unset($payload[$key]);
      }
    }
    return $this->serializer->encode($payload);
  }

}
