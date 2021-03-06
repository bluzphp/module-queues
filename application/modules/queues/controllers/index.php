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
};
