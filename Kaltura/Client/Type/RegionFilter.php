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
class Kaltura_Client_Type_RegionFilter extends Kaltura_Client_Type_BaseRegionFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaRegionFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->externalIdIn))
			$this->externalIdIn = (string)$xml->externalIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->externalIdIn))
			$this->externalIdIn = (string)$jsonObject->externalIdIn;
		if(!is_null($xml) && count($xml->idIn))
			$this->idIn = (string)$xml->idIn;
		if(!is_null($jsonObject) && isset($jsonObject->idIn))
			$this->idIn = (string)$jsonObject->idIn;
		if(!is_null($xml) && count($xml->parentIdEqual))
			$this->parentIdEqual = (int)$xml->parentIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->parentIdEqual))
			$this->parentIdEqual = (int)$jsonObject->parentIdEqual;
		if(!is_null($xml) && count($xml->liveAssetIdEqual))
			$this->liveAssetIdEqual = (int)$xml->liveAssetIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->liveAssetIdEqual))
			$this->liveAssetIdEqual = (int)$jsonObject->liveAssetIdEqual;
		if(!is_null($xml) && count($xml->parentOnly))
		{
			if(!empty($xml->parentOnly) && ((int) $xml->parentOnly === 1 || strtolower((string)$xml->parentOnly) === 'true'))
				$this->parentOnly = true;
			else
				$this->parentOnly = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->parentOnly))
		{
			if(!empty($jsonObject->parentOnly) && ((int) $jsonObject->parentOnly === 1 || strtolower((string)$jsonObject->parentOnly) === 'true'))
				$this->parentOnly = true;
			else
				$this->parentOnly = false;
		}
		if(!is_null($xml) && count($xml->exclusiveLcn))
		{
			if(!empty($xml->exclusiveLcn) && ((int) $xml->exclusiveLcn === 1 || strtolower((string)$xml->exclusiveLcn) === 'true'))
				$this->exclusiveLcn = true;
			else
				$this->exclusiveLcn = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->exclusiveLcn))
		{
			if(!empty($jsonObject->exclusiveLcn) && ((int) $jsonObject->exclusiveLcn === 1 || strtolower((string)$jsonObject->exclusiveLcn) === 'true'))
				$this->exclusiveLcn = true;
			else
				$this->exclusiveLcn = false;
		}
	}
	/**
	 * List of comma separated regions external IDs
	 *
	 * @var string
	 */
	public $externalIdIn = null;

	/**
	 * List of comma separated regions Ids
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * Region parent ID to filter by
	 *
	 * @var int
	 */
	public $parentIdEqual = null;

	/**
	 * Region parent ID to filter by
	 *
	 * @var int
	 */
	public $liveAssetIdEqual = null;

	/**
	 * Parent region to filter by
	 *
	 * @var bool
	 */
	public $parentOnly = null;

	/**
	 * Retrieves only the channels belonging specifically to the child region
	 *
	 * @var bool
	 */
	public $exclusiveLcn = null;


}

