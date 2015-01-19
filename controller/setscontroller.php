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

namespace OCA\StrengthTrainer\Controller;


use \OCP\IRequest;
use \OCP\AppFramework\Http\TemplateResponse;
use \OCP\AppFramework\Http\DataResponse;
use \OCP\AppFramework\Controller;

use \OCA\StrengthTrainer\Db\Lift;
use \OCA\StrengthTrainer\Db\LiftMapper;

class SetsController extends Controller {

    private $mapper;

    public function __construct($AppName, IRequest $request, LiftMapper $liftmapper) {
        parent::__construct($AppName, $request);
        $this->mapper = $liftmapper;
    }

  /**
   * @NoAdminRequired
   * @NoCSRFRequired
   */
  public function index() {
      return new TemplateResponse('strengthtrainer', 'main', $this->mapper->findAll());  // templates/main.php
  }

  /**
   * @NoAdminRequired
   *
   * @param int $id
   */
  public function show($id) {
    // empty for now
  }

  /**
   * @NoAdminRequired
   *
   * @param string $title
   * @param string $content
   */
  public function create($title, $content) {
    // empty for now
  }

  /**
   * @NoAdminRequired
   *
   * @param int $id
   * @param string $title
   * @param string $content
   */
  public function update($id, $title, $content) {
    // empty for now
  }

  /**
   * @NoAdminRequired
   *
   * @param int $id
   */
  public function destroy($id) {
    // empty for now
  }
}