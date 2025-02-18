<?php

namespace Drupal\services_autoconfigure_example\EventSubscriber;

use Drupal\Core\Messenger\MessengerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * A subscriber running when a request is received.
 */
class AutoconfiguredService implements EventSubscriberInterface {

  /**
   * Constructs a new AutoconfiguredService.
   *
   * @param \Drupal\Core\Messenger\MessengerInterface $messenger
   *   The messenger.
   */
  public function __construct(protected MessengerInterface $messenger) {
  }

  /**
   * Run the automated cron if enabled.
   *
   * @param \Symfony\Component\HttpKernel\Event\TerminateEvent $event
   *   The Event to process.
   */
  public function onRequest(RequestEvent $event) {
    $this->messenger->addStatus('Autoconfigured service listening on request event.');
  }

  /**
   * {@inheritDoc}
   */
  public static function getSubscribedEvents(): array {
    return [KernelEvents::REQUEST => [['onRequest', 1]]];
  }

}
