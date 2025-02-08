<?php

namespace Drupal\Tests\services_argument_example\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * Kernel tests for the SingleArgument service.
 */
class SingleArgumentTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'services_argument_example',
  ];

  /**
   * Test that the getArray method returns an array.
   */
  public function testSimpleService() {
    $payload = '{"0":{"id":1},"1":{"id":2},"2":{"id":3}}';
    $id = 2;

    $result = '{"0":{"id":1},"2":{"id":3}}';

    /** @var \Drupal\services_argument_example\SingleArgument $simpleService */
    $argumentService = \Drupal::service('services_argument_example.single_argument');
    $this->assertEquals($result, $argumentService->removeItemFromPayload($payload, $id));
  }

}
