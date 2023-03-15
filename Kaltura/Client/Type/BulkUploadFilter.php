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
class Kaltura_Client_Type_BulkUploadFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUploadFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->bulkObjectTypeEqual))
			$this->bulkObjectTypeEqual = (string)$xml->bulkObjectTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->bulkObjectTypeEqual))
			$this->bulkObjectTypeEqual = (string)$jsonObject->bulkObjectTypeEqual;
		if(!is_null($xml) && count($xml->createDateGreaterThanOrEqual))
			$this->createDateGreaterThanOrEqual = (string)$xml->createDateGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->createDateGreaterThanOrEqual))
			$this->createDateGreaterThanOrEqual = (string)$jsonObject->createDateGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->uploadedByUserIdEqualCurrent))
		{
			if(!empty($xml->uploadedByUserIdEqualCurrent) && ((int) $xml->uploadedByUserIdEqualCurrent === 1 || strtolower((string)$xml->uploadedByUserIdEqualCurrent) === 'true'))
				$this->uploadedByUserIdEqualCurrent = true;
			else
				$this->uploadedByUserIdEqualCurrent = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->uploadedByUserIdEqualCurrent))
		{
			if(!empty($jsonObject->uploadedByUserIdEqualCurrent) && ((int) $jsonObject->uploadedByUserIdEqualCurrent === 1 || strtolower((string)$jsonObject->uploadedByUserIdEqualCurrent) === 'true'))
				$this->uploadedByUserIdEqualCurrent = true;
			else
				$this->uploadedByUserIdEqualCurrent = false;
		}
		if(!is_null($xml) && count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusIn))
			$this->statusIn = (string)$jsonObject->statusIn;
	}
	/**
	 * bulk objects Type name (must be type of KalturaOTTObject)
	 *
	 * @var string
	 */
	public $bulkObjectTypeEqual = null;

	/**
	 * upload date to search within (search in the last 60 days)
	 *
	 * @var bigint
	 */
	public $createDateGreaterThanOrEqual = null;

	/**
	 * Indicates if to get the BulkUpload list that created by current user or by the entire group.
	 *
	 * @var bool
	 */
	public $uploadedByUserIdEqualCurrent = null;

	/**
	 * Comma separated list of BulkUpload Statuses to search\filter
	 *
	 * @var string
	 */
	public $statusIn = null;


}

