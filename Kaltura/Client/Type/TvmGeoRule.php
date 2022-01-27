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
class Kaltura_Client_Type_TvmGeoRule extends Kaltura_Client_Type_TvmRule
{
	public function getKalturaObjectType()
	{
		return 'KalturaTvmGeoRule';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->onlyOrBut))
		{
			if(!empty($xml->onlyOrBut) && ((int) $xml->onlyOrBut === 1 || strtolower((string)$xml->onlyOrBut) === 'true'))
				$this->onlyOrBut = true;
			else
				$this->onlyOrBut = false;
		}
		if(count($xml->countryIds))
			$this->countryIds = (string)$xml->countryIds;
		if(count($xml->proxyRuleId))
			$this->proxyRuleId = (int)$xml->proxyRuleId;
		if(count($xml->proxyRuleName))
			$this->proxyRuleName = (string)$xml->proxyRuleName;
		if(count($xml->proxyLevelId))
			$this->proxyLevelId = (int)$xml->proxyLevelId;
		if(count($xml->proxyLevelName))
			$this->proxyLevelName = (string)$xml->proxyLevelName;
	}
	/**
	 * Indicates if the rule is relevent ONLY for the country ids or except country ids here. - is that true?
	 *
	 * @var bool
	 */
	public $onlyOrBut = null;

	/**
	 * Comma separated list of country Ids.
	 *
	 * @var string
	 */
	public $countryIds = null;

	/**
	 * proxyRuleId - what is that?
	 *
	 * @var int
	 */
	public $proxyRuleId = null;

	/**
	 * proxyRuleName - what is that?
	 *
	 * @var string
	 */
	public $proxyRuleName = null;

	/**
	 * proxyLevelId - what is that?
	 *
	 * @var int
	 */
	public $proxyLevelId = null;

	/**
	 * proxyLevelName - what is that?
	 *
	 * @var string
	 */
	public $proxyLevelName = null;


}

