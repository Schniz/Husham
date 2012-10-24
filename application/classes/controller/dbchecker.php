<?php defined('SYSPATH') or die('No direct script access.');

class Controller_DbChecker extends Controller {

	public function action_index()
	{
		$dbClient = CouchDB_Client::instance();
		$document = $dbClient->get_document("_design/views/_view/all_posts");
		
		$rest = REST_Client::instance();
		//$dbClient->put_document("husham", array("hey"=>"ahalan"));
		$result = json_encode($document->rows);
		$this->response->headers("Content-Type", "application/json");
		$this->response->body($result);
	}

} // End Welcome
