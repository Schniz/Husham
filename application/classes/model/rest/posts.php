<?php
class Model_REST_Posts implements REST_CORS, REST_Method_Get {
	/**
	 * Cross-Origin Resource Sharing
	 */
	public function rest_cors(Rest $rest)
	{
		$origin = $rest->request()->headers('Origin');
		$rest->cors(array('origin' => $origin, 'creds' => 'true'));
	}

	public function rest_options(Rest $rest)
	{
		$rest->send_code(200);
	}

	/**
	 * Select a husham
	 * (non-PHPdoc)
	 * @see REST_Method_Get::rest_get()
	 */
	public function rest_get(Rest $rest)
	{
		$lastId = $rest->query("last-id");
		
		// Validate the $lastId (if its not null, its must be numeric)
		$isLastIdInvalid = ($lastId == NULL) || 
						   (is_numeric($lastId));
		$rest->validate($isLastIdInvalid, new REST_Error("numeric violation", "last-id can only be numeric"));
		
		// Select all
		if ($rest->param("id") == NULL) {
			if ($lastId) {
				return "page x";
			}
			
			$dbClient = CouchDB_Client::instance();
			$document = $dbClient->get_document("_design/views/_view/all_posts");
			
			$rest = REST_Client::instance();
			//$dbClient->put_document("husham", array("hey"=>"ahalan"));
			//$result = json_encode($document->rows);
			
			$withoutKeys = array_map(function($val) { return $val->value; }, $document->rows);
			
			return $withoutKeys;
		} else { // Select lateset from tag
			if ($lastId) {
				return "page x from tag";
			}
			
			return "page from tag";
		}
	}
}