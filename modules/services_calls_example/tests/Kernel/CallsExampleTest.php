<?php

declare(strict_types=1);

namespace Drupal\Tests\services_calls_example\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * Kernel tests for the CallsExample service.
 */
class CallsExampleTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'services_calls_example',
  ];

  /**
   * Test the password is generated.
   */
  public function testSimpleService() {
    /** @var \Drupal\services_calls_example\CallsExample $service */
    $service = \Drupal::service('services_calls_example.calls_example');
    $this->assertTrue(strlen($service->generatePassword()) === 12);
  }

}
