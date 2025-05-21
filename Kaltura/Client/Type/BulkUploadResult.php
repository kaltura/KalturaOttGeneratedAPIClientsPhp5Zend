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
abstract class Kaltura_Client_Type_BulkUploadResult extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUploadResult';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->objectId))
			$this->objectId = (string)$xml->objectId;
		if(!is_null($jsonObject) && isset($jsonObject->objectId))
			$this->objectId = (string)$jsonObject->objectId;
		if(!is_null($xml) && count($xml->index))
			$this->index = (int)$xml->index;
		if(!is_null($jsonObject) && isset($jsonObject->index))
			$this->index = (int)$jsonObject->index;
		if(!is_null($xml) && count($xml->bulkUploadId))
			$this->bulkUploadId = (string)$xml->bulkUploadId;
		if(!is_null($jsonObject) && isset($jsonObject->bulkUploadId))
			$this->bulkUploadId = (string)$jsonObject->bulkUploadId;
		if(!is_null($xml) && count($xml->status))
			$this->status = (string)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (string)$jsonObject->status;
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
		if(!is_null($xml) && count($xml->warnings))
		{
			if(empty($xml->warnings))
				$this->warnings = array();
			else
				$this->warnings = Kaltura_Client_ParseUtils::unmarshalArray($xml->warnings, "KalturaMessage");
		}
		if(!is_null($jsonObject) && isset($jsonObject->warnings))
		{
			if(empty($jsonObject->warnings))
				$this->warnings = array();
			else
				$this->warnings = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->warnings, "KalturaMessage");
		}
	}
	/**
	 * the result ObjectId (assetId, userId etc)
	 *
	 * @var bigint
	 * @readonly
	 */
	public $objectId = null;

	/**
	 * result index
	 *
	 * @var int
	 * @readonly
	 */
	public $index = null;

	/**
	 * Bulk upload identifier
	 *
	 * @var bigint
	 * @readonly
	 */
	public $bulkUploadId = null;

	/**
	 * status
	 *
	 * @var Kaltura_Client_Enum_BulkUploadResultStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * A list of errors
	 *
	 * @var Kaltura_Client_Type_Message[]
	 * @readonly
	 */
	public $errors;

	/**
	 * A list of warnings
	 *
	 * @var Kaltura_Client_Type_Message[]
	 * @readonly
	 */
	public $warnings;


}

