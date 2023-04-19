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
class Kaltura_Client_Type_BulkUpload extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUpload';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (string)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (string)$jsonObject->id;
		if(!is_null($xml) && count($xml->fileName))
			$this->fileName = (string)$xml->fileName;
		if(!is_null($jsonObject) && isset($jsonObject->fileName))
			$this->fileName = (string)$jsonObject->fileName;
		if(!is_null($xml) && count($xml->status))
			$this->status = (string)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (string)$jsonObject->status;
		if(!is_null($xml) && count($xml->action))
			$this->action = (string)$xml->action;
		if(!is_null($jsonObject) && isset($jsonObject->action))
			$this->action = (string)$jsonObject->action;
		if(!is_null($xml) && count($xml->numOfObjects))
			$this->numOfObjects = (int)$xml->numOfObjects;
		if(!is_null($jsonObject) && isset($jsonObject->numOfObjects))
			$this->numOfObjects = (int)$jsonObject->numOfObjects;
		if(!is_null($xml) && count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(!is_null($jsonObject) && isset($jsonObject->createDate))
			$this->createDate = (string)$jsonObject->createDate;
		if(!is_null($xml) && count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(!is_null($jsonObject) && isset($jsonObject->updateDate))
			$this->updateDate = (string)$jsonObject->updateDate;
		if(!is_null($xml) && count($xml->uploadedByUserId))
			$this->uploadedByUserId = (string)$xml->uploadedByUserId;
		if(!is_null($jsonObject) && isset($jsonObject->uploadedByUserId))
			$this->uploadedByUserId = (string)$jsonObject->uploadedByUserId;
		if(!is_null($xml) && count($xml->results))
		{
			if(empty($xml->results))
				$this->results = array();
			else
				$this->results = Kaltura_Client_ParseUtils::unmarshalArray($xml->results, "KalturaBulkUploadResult");
		}
		if(!is_null($jsonObject) && isset($jsonObject->results))
		{
			if(empty($jsonObject->results))
				$this->results = array();
			else
				$this->results = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->results, "KalturaBulkUploadResult");
		}
		if(!is_null($xml) && count($xml->errors))
		{
			if(empty($xml->errors))
				$this->errors = array();
			else
				$this->errors = Kaltura_Client_ParseUtils::unmarshalArray($xml->errors, "KalturaMessage");
		}
		if(!is_null($jsonObject) && isset($jsonObject->errors))
		{
			if(empty($jsonObject->errors))
				$this->errors = array();
			else
				$this->errors = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->errors, "KalturaMessage");
		}
	}
	/**
	 * Bulk identifier
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * File Name
	 *
	 * @var string
	 * @readonly
	 */
	public $fileName = null;

	/**
	 * Status
	 *
	 * @var Kaltura_Client_Enum_BulkUploadJobStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * Action
	 *
	 * @var Kaltura_Client_Enum_BulkUploadJobAction
	 * @readonly
	 */
	public $action = null;

	/**
	 * Total number of objects in file
	 *
	 * @var int
	 * @readonly
	 */
	public $numOfObjects = null;

	/**
	 * Specifies when was the bulk action created. Date and time represented as epoch
	 *
	 * @var bigint
	 * @readonly
	 */
	public $createDate = null;

	/**
	 * Specifies when was the bulk action last updated. Date and time represented as epoch
	 *
	 * @var bigint
	 * @readonly
	 */
	public $updateDate = null;

	/**
	 * The user who uploaded this bulk
	 *
	 * @var bigint
	 * @readonly
	 */
	public $uploadedByUserId = null;

	/**
	 * A list of results
	 *
	 * @var array of KalturaBulkUploadResult
	 * @readonly
	 */
	public $results;

	/**
	 * A list of errors
	 *
	 * @var array of KalturaMessage
	 * @readonly
	 */
	public $errors;


}

