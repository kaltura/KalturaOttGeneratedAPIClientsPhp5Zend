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
// Copyright (C) 2006-2022  Kaltura Inc.
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
class Kaltura_Client_Type_DefaultParentalSettingsPartnerConfig extends Kaltura_Client_Type_PartnerConfiguration
{
	public function getKalturaObjectType()
	{
		return 'KalturaDefaultParentalSettingsPartnerConfig';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->defaultMoviesParentalRuleId))
			$this->defaultMoviesParentalRuleId = (string)$xml->defaultMoviesParentalRuleId;
		if(count($xml->defaultTvSeriesParentalRuleId))
			$this->defaultTvSeriesParentalRuleId = (string)$xml->defaultTvSeriesParentalRuleId;
		if(count($xml->defaultParentalPin))
		{
			if(isset($xml->defaultParentalPin->item) && count($xml->defaultParentalPin->item))
				$this->multiLingual_defaultParentalPin = Kaltura_Client_ParseUtils::unmarshalArray($xml->defaultParentalPin, '');
			else
				$this->defaultParentalPin = (string)$xml->defaultParentalPin;
		}
		if(count($xml->defaultPurchasePin))
		{
			if(isset($xml->defaultPurchasePin->item) && count($xml->defaultPurchasePin->item))
				$this->multiLingual_defaultPurchasePin = Kaltura_Client_ParseUtils::unmarshalArray($xml->defaultPurchasePin, '');
			else
				$this->defaultPurchasePin = (string)$xml->defaultPurchasePin;
		}
		if(count($xml->defaultPurchaseSettings))
			$this->defaultPurchaseSettings = (string)$xml->defaultPurchaseSettings;
	}
	/**
	 * defaultTvSeriesParentalRuleId
	 *
	 * @var bigint
	 */
	public $defaultMoviesParentalRuleId = null;

	/**
	 * defaultTvSeriesParentalRuleId
	 *
	 * @var bigint
	 */
	public $defaultTvSeriesParentalRuleId = null;

	/**
	 * defaultParentalPin
	 *
	 * @var string
	 */
	public $defaultParentalPin = null;

	/**
	 * defaultPurchasePin
	 *
	 * @var string
	 */
	public $defaultPurchasePin = null;

	/**
	 * defaultPurchaseSettings
	 *
	 * @var bigint
	 */
	public $defaultPurchaseSettings = null;


}

