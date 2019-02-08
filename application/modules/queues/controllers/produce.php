<?php
/**
 * Generated controller
 *
 * @author   dev
 * @created  2019-01-14 18:41:04
 */
namespace Application;

use Bluz\Controller\Controller;
use Bluz\Proxy\Config;
use Bluz\Proxy\Layout;
use Bluz\Proxy\Messages;
use Bluz\Proxy\Request;

/**
 * @privilege Info
 *
 * @return void
 */
return function () {
    /**
     * @var Controller $this
     */
    Layout::title('Queues');
    Layout::setTemplate('dashboard.phtml');
    Layout::breadCrumbs(
        [
            Layout::ahref('Dashboard', ['dashboard', 'index']),
            __('Queues'),
        ]
    );
    $this->setTemplate('index.phtml');

    /** @var \Interop\Queue\ConnectionFactory $driver */
    $driver = Config::get('queue', 'providers', 'redis')();
    $context = $driver->createContext();
    $queue = $context->createQueue('bluz:queue:messages');

    $message = $context->createMessage(
        'Message',
        [
            'title' => 'Hello!',
            'body' => 'How are you?'
        ]
    );

    $producer = $context->createProducer();

    $producer->send($queue, $message);

    Messages::addNotice('Message has been created');
};
