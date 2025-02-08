<?php

namespace Drupal\Tests\services_argument_example\Unit;

use Drupal\Component\Serialization\Json;
use Drupal\services_argument_example\SingleArgument;
use Drupal\Tests\UnitTestCase;

/**
 * Unit tests for the SingleArgument service.
 */
class SingleArgumentTest extends UnitTestCase {

  /**
   * Test that removeItemFromPayload removes an item from the payload.
   */
  public function testSimpleService() {
    $payload = '{"0":{"id":1},"1":{"id":2},"2":{"id":3}}';
    $id = 2;

    $result = '{"0":{"id":1},"2":{"id":3}}';

    $argumentService = new SingleArgument(new Json());
    $this->assertEquals($result, $argumentService->removeItemFromPayload($payload, $id));
  }

}
