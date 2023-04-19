<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platforms allow them to do with
// text.
//
// Copyright (C) 2006-2023  Kaltura Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================

/**
 * @package Kaltura
 * @subpackage Client
 */
class Kaltura_Client_Type_BulkUploadStatistics extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUploadStatistics';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->pending))
			$this->pending = (string)$xml->pending;
		if(!is_null($jsonObject) && isset($jsonObject->pending))
			$this->pending = (string)$jsonObject->pending;
		if(!is_null($xml) && count($xml->uploaded))
			$this->uploaded = (string)$xml->uploaded;
		if(!is_null($jsonObject) && isset($jsonObject->uploaded))
			$this->uploaded = (string)$jsonObject->uploaded;
		if(!is_null($xml) && count($xml->queued))
			$this->queued = (string)$xml->queued;
		if(!is_null($jsonObject) && isset($jsonObject->queued))
			$this->queued = (string)$jsonObject->queued;
		if(!is_null($xml) && count($xml->parsing))
			$this->parsing = (string)$xml->parsing;
		if(!is_null($jsonObject) && isset($jsonObject->parsing))
			$this->parsing = (string)$jsonObject->parsing;
		if(!is_null($xml) && count($xml->processing))
			$this->processing = (string)$xml->processing;
		if(!is_null($jsonObject) && isset($jsonObject->processing))
			$this->processing = (string)$jsonObject->processing;
		if(!is_null($xml) && count($xml->processed))
			$this->processed = (string)$xml->processed;
		if(!is_null($jsonObject) && isset($jsonObject->processed))
			$this->processed = (string)$jsonObject->processed;
		if(!is_null($xml) && count($xml->success))
			$this->success = (string)$xml->success;
		if(!is_null($jsonObject) && isset($jsonObject->success))
			$this->success = (string)$jsonObject->success;
		if(!is_null($xml) && count($xml->partial))
			$this->partial = (string)$xml->partial;
		if(!is_null($jsonObject) && isset($jsonObject->partial))
			$this->partial = (string)$jsonObject->partial;
		if(!is_null($xml) && count($xml->failed))
			$this->failed = (string)$xml->failed;
		if(!is_null($jsonObject) && isset($jsonObject->failed))
			$this->failed = (string)$jsonObject->failed;
		if(!is_null($xml) && count($xml->fatal))
			$this->fatal = (string)$xml->fatal;
		if(!is_null($jsonObject) && isset($jsonObject->fatal))
			$this->fatal = (string)$jsonObject->fatal;
	}
	/**
	 * count of bulk upload in pending status
	 *
	 * @var bigint
	 */
	public $pending = null;

	/**
	 * count of bulk Uploaded in uploaded status
	 *
	 * @var bigint
	 */
	public $uploaded = null;

	/**
	 * count of bulk upload in queued status
	 *
	 * @var bigint
	 */
	public $queued = null;

	/**
	 * count of bulk upload in parsing status
	 *
	 * @var bigint
	 */
	public $parsing = null;

	/**
	 * count of bulk upload in processing status
	 *
	 * @var bigint
	 */
	public $processing = null;

	/**
	 * count of bulk upload in processed status
	 *
	 * @var bigint
	 */
	public $processed = null;

	/**
	 * count of bulk upload in success status
	 *
	 * @var bigint
	 */
	public $success = null;

	/**
	 * count of bulk upload in partial status
	 *
	 * @var bigint
	 */
	public $partial = null;

	/**
	 * count of bulk upload in failed status
	 *
	 * @var bigint
	 */
	public $failed = null;

	/**
	 * count of bulk upload in fatal status
	 *
	 * @var bigint
	 */
	public $fatal = null;


}

