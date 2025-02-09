<?php

namespace Drupal\Tests\services_decorator_example\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * Kernel tests for the DecoratedJson service.
 */
class DecoratedJsonTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'services_decorator_example',
  ];

  /**
   * Test that the getArray method returns an array.
   */
  public function testSimpleService() {
    /** @var \Drupal\services_decorator_example\DecoratedJson $simpleService */
    $decoratedService = \Drupal::service('services_decorator_example.decorated_json');

    $jsonString = '{"number": 1234567890123456789012345678901234567890}';
    $result = ['number' => '1234567890123456789012345678901234567890'];

    // Performing this action with a large number in the original Json::decode()
    // class will cause an error.
    $decoded = $decoratedService->decode($jsonString);
    $this->assertEquals($result, $decoded);
  }

}
