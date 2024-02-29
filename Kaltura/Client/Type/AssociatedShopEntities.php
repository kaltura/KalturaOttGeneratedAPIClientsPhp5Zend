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
class Kaltura_Client_Type_AssociatedShopEntities extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssociatedShopEntities';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->assetUserRuleIdIn))
			$this->assetUserRuleIdIn = (string)$xml->assetUserRuleIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->assetUserRuleIdIn))
			$this->assetUserRuleIdIn = (string)$jsonObject->assetUserRuleIdIn;
		if(!is_null($xml) && count($xml->includeNullAssetUserRuleId))
		{
			if(!empty($xml->includeNullAssetUserRuleId) && ((int) $xml->includeNullAssetUserRuleId === 1 || strtolower((string)$xml->includeNullAssetUserRuleId) === 'true'))
				$this->includeNullAssetUserRuleId = true;
			else
				$this->includeNullAssetUserRuleId = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->includeNullAssetUserRuleId))
		{
			if(!empty($jsonObject->includeNullAssetUserRuleId) && ((int) $jsonObject->includeNullAssetUserRuleId === 1 || strtolower((string)$jsonObject->includeNullAssetUserRuleId) === 'true'))
				$this->includeNullAssetUserRuleId = true;
			else
				$this->includeNullAssetUserRuleId = false;
		}
	}
	/**
	 * comma-separated list of assetUserRuleId values. Matching entities will be returned by the filter.
	 *
	 * @var string
	 */
	public $assetUserRuleIdIn = null;

	/**
	 * If true, filter will return entities with null/empty assetUserRuleId value, in addition to any entities whose assetUserRuleId value matches the assetUserRuleIdIn parameter.
	 *             If false (or field is not specified) filter will return only entities whose assetUserRuleId value matches the assetUserRuleIdIn parameter.
	 *
	 * @var bool
	 */
	public $includeNullAssetUserRuleId = null;


}

