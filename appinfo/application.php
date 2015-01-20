<?php
/**
 * ownCloud - strengthtrainer
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Tim McIver <tim@timmciver.com>
 * @copyright Tim McIver 2015
 */

namespace OCA\StrengthTrainer\AppInfo;

use \OCP\AppFramework\App;
use \OCP\IContainer;

use \OCA\StrengthTrainer\Controller\PageController;
use \OCA\StrengthTrainer\Controller\SetsController;
use \OCA\StrengthTrainer\Db\LiftMapper;

class Application extends App {

	public function __construct (array $urlParams=array()) {
		parent::__construct('strengthtrainer', $urlParams);

		$container = $this->getContainer();

		/**
		 * Controllers
		 */
		$container->registerService('PageController', function(IContainer $c) {
			return new PageController(
				$c->query('AppName'),
				$c->query('Request')
			);
		});
		$container->registerService('SetsController', function(IContainer $c) {
			return new SetsController(
				$c->query('AppName'),
				$c->query('Request'),
                $c->query('LiftMapper')
			);
		});
        $container->registerService('LiftMapper', function($c) {
            return new LiftMapper(
                $c->query('ServerContainer')->getDb()
            );
        });
	}
}