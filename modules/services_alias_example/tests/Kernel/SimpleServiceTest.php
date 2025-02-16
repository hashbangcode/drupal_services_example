<?php

declare(strict_types=1);

namespace Drupal\Tests\services_alias_example\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * Kernel tests for the SimpleService service.
 */
class SimpleServiceTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'services_alias_example',
  ];

  /**
   * Test that the getTheString method returns the string.
   */
  public function testSimpleService() {
    /** @var \Drupal\services_alias_example\SimpleService $service */
    $service = \Drupal::service('services_alias_example.simple_service');
    $this->assertEquals('The string.', $service->getTheString());

    /** @var \Drupal\services_alias_example\SimpleService $service */
    $service = \Drupal::service('simple_aliased_service');
    $this->assertEquals('The string.', $service->getTheString());
  }

}
