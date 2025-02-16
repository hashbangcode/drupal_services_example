<?php

declare(strict_types=1);

namespace Drupal\Tests\services_decorator_example\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * Kernel tests for the DecoratedPasswordGenerator service.
 */
class DecoratedPasswordGeneratorTest extends KernelTestBase {

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
    /** @var \Drupal\services_decorator_example\DecoratedPasswordGenerator $decoratedService */
    $decoratedService = \Drupal::service('services_decorator_example.decorated_password_generator');

    $password = $decoratedService->generate();
    $this->assertTrue(strlen($password) === 10);
    $this->assertTrue($password === strtolower($password));
    $this->assertDoesNotMatchRegularExpression('/\d/', $password);
  }

}
