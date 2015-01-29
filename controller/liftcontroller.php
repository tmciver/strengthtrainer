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
use \OCP\ILogger;
use \OCP\AppFramework\Http\TemplateResponse;
use \OCP\AppFramework\Http\DataResponse;
use \OCP\AppFramework\Http;
use \OCP\AppFramework\Controller;

use \OCA\StrengthTrainer\Db\Lift;
use \OCA\StrengthTrainer\Db\LiftMapper;

class LiftController extends Controller {

    private $mapper;
    private $logger;

    public function __construct($AppName, IRequest $request, ILogger $logger, LiftMapper $liftmapper) {
        parent::__construct($AppName, $request);
        $this->mapper = $liftmapper;
        $this->logger = $logger;
    }

  /**
   * @NoAdminRequired
   * @NoCSRFRequired
   */
  public function index() {
      return new TemplateResponse('strengthtrainer', 'main', ['lifts' => $this->mapper->findAll()]);  // templates/main.php
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
   * @NoCSRFRequired
   *
   * @param string $name name of lift
   */
  public function create($name) {
      // make sure a lift with this name does not already exist
      $exists = false;
      $lifts =  $this->mapper->findAll();
      foreach ($lifts as $l) {
          if ($l->getName() === $name) {
              $exists = true;
              break;
          }
      }

      if ($exists) {
          $response = new DataResponse([], Http::STATUS_CONFLICT);
      } else {
          $lift = new Lift();
          $lift->setName($name);
          $response = new DataResponse($this->mapper->insert($lift));
      }

      return $response;
  }

  /**
   * @NoAdminRequired
   *
   * @param int $id
   * @param string $title
   * @param string $content
   */
    // public function update($id, $title, $content) {
  //   // empty for now
  // }

  /**
   * @NoAdminRequired
   *
   * @param int $id
   */
  public function destroy($id) {
    // empty for now
  }
}