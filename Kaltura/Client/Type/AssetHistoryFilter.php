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
class Kaltura_Client_Type_AssetHistoryFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetHistoryFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->typeIn))
			$this->typeIn = (string)$xml->typeIn;
		if(!is_null($jsonObject) && isset($jsonObject->typeIn))
			$this->typeIn = (string)$jsonObject->typeIn;
		if(!is_null($xml) && count($xml->assetIdIn))
			$this->assetIdIn = (string)$xml->assetIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->assetIdIn))
			$this->assetIdIn = (string)$jsonObject->assetIdIn;
		if(!is_null($xml) && count($xml->statusEqual))
			$this->statusEqual = (string)$xml->statusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->statusEqual))
			$this->statusEqual = (string)$jsonObject->statusEqual;
		if(!is_null($xml) && count($xml->daysLessThanOrEqual))
			$this->daysLessThanOrEqual = (int)$xml->daysLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->daysLessThanOrEqual))
			$this->daysLessThanOrEqual = (int)$jsonObject->daysLessThanOrEqual;
		if(!is_null($xml) && count($xml->kSql))
			$this->kSql = (string)$xml->kSql;
		if(!is_null($jsonObject) && isset($jsonObject->kSql))
			$this->kSql = (string)$jsonObject->kSql;
	}
	/**
	 * Comma separated list of asset types to search within.
	 *             Possible values: 0 - EPG linear programs entries, any media type ID (according to media type IDs defined dynamically in the system).
	 *             If omitted - all types should be included.
	 *
	 * @var string
	 */
	public $typeIn = null;

	/**
	 * Comma separated list of asset identifiers.
	 *
	 * @var string
	 */
	public $assetIdIn = null;

	/**
	 * Which type of recently watched media to include in the result - those that finished watching, those that are in progress or both.
	 *             If omitted or specified filter = all - return all types.
	 *             Allowed values: progress - return medias that are in-progress, done - return medias that finished watching.
	 *
	 * @var Kaltura_Client_Enum_WatchStatus
	 */
	public $statusEqual = null;

	/**
	 * How many days back to return the watched media. If omitted, default to 7 days
	 *
	 * @var int
	 */
	public $daysLessThanOrEqual = null;

	/**
	 * KSQL expression
	 *
	 * @var string
	 */
	public $kSql = null;


}

