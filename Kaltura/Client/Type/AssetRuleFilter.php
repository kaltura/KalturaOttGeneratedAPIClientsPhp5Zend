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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->conditionsContainType))
			$this->conditionsContainType = (string)$xml->conditionsContainType;
		if(count($xml->assetApplied) && !empty($xml->assetApplied))
			$this->assetApplied = Kaltura_Client_ParseUtils::unmarshalObject($xml->assetApplied, "KalturaSlimAsset");
		if(count($xml->actionsContainType))
			$this->actionsContainType = (string)$xml->actionsContainType;
		if(count($xml->assetRuleIdEqual))
			$this->assetRuleIdEqual = (string)$xml->assetRuleIdEqual;
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


}

