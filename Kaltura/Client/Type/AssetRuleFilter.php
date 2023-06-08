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
class Kaltura_Client_Type_AssetRuleFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetRuleFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->conditionsContainType))
			$this->conditionsContainType = (string)$xml->conditionsContainType;
		if(!is_null($jsonObject) && isset($jsonObject->conditionsContainType))
			$this->conditionsContainType = (string)$jsonObject->conditionsContainType;
		if(!is_null($xml) && count($xml->assetApplied) && !empty($xml->assetApplied))
			$this->assetApplied = Kaltura_Client_ParseUtils::unmarshalObject($xml->assetApplied, "KalturaSlimAsset");
		if(!is_null($jsonObject) && isset($jsonObject->assetApplied) && !empty($jsonObject->assetApplied))
			$this->assetApplied = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->assetApplied, "KalturaSlimAsset");
		if(!is_null($xml) && count($xml->actionsContainType))
			$this->actionsContainType = (string)$xml->actionsContainType;
		if(!is_null($jsonObject) && isset($jsonObject->actionsContainType))
			$this->actionsContainType = (string)$jsonObject->actionsContainType;
		if(!is_null($xml) && count($xml->assetRuleIdEqual))
			$this->assetRuleIdEqual = (string)$xml->assetRuleIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->assetRuleIdEqual))
			$this->assetRuleIdEqual = (string)$jsonObject->assetRuleIdEqual;
		if(!is_null($xml) && count($xml->nameContains))
			$this->nameContains = (string)$xml->nameContains;
		if(!is_null($jsonObject) && isset($jsonObject->nameContains))
			$this->nameContains = (string)$jsonObject->nameContains;
	}
	/**
	 * Indicates which asset rule list to return by it KalturaRuleConditionType.
	 *             Default value: KalturaRuleConditionType.COUNTRY
	 *
	 * @var Kaltura_Client_Enum_RuleConditionType
	 */
	public $conditionsContainType = null;

	/**
	 * Indicates if to return an asset rule list that related to specific asset
	 *
	 * @var Kaltura_Client_Type_SlimAsset
	 */
	public $assetApplied;

	/**
	 * Indicates which asset rule list to return by this KalturaRuleActionType.
	 *
	 * @var Kaltura_Client_Enum_RuleActionType
	 */
	public $actionsContainType = null;

	/**
	 * Asset rule id
	 *
	 * @var bigint
	 */
	public $assetRuleIdEqual = null;

	/**
	 * Name
	 *
	 * @var string
	 */
	public $nameContains = null;


}

