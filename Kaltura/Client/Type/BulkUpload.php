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
// Copyright (C) 2006-2021  Kaltura Inc.
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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->fileName))
			$this->fileName = (string)$xml->fileName;
		if(count($xml->status))
			$this->status = (string)$xml->status;
		if(count($xml->action))
			$this->action = (string)$xml->action;
		if(count($xml->numOfObjects))
			$this->numOfObjects = (int)$xml->numOfObjects;
		if(count($xml->createDate))
			$this->createDate = (string)$xml->createDate;
		if(count($xml->updateDate))
			$this->updateDate = (string)$xml->updateDate;
		if(count($xml->uploadedByUserId))
			$this->uploadedByUserId = (string)$xml->uploadedByUserId;
		if(count($xml->results))
		{
			if(empty($xml->results))
				$this->results = array();
			else
				$this->results = Kaltura_Client_ParseUtils::unmarshalArray($xml->results, "KalturaBulkUploadResult");
		}
		if(count($xml->errors))
		{
			if(empty($xml->errors))
				$this->errors = array();
			else
				$this->errors = Kaltura_Client_ParseUtils::unmarshalArray($xml->errors, "KalturaMessage");
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

