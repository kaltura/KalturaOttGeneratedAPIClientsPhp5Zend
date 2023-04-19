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
class Kaltura_Client_Type_CountryFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaCountryFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->idIn))
			$this->idIn = (string)$xml->idIn;
		if(!is_null($jsonObject) && isset($jsonObject->idIn))
			$this->idIn = (string)$jsonObject->idIn;
		if(!is_null($xml) && count($xml->ipEqual))
			$this->ipEqual = (string)$xml->ipEqual;
		if(!is_null($jsonObject) && isset($jsonObject->ipEqual))
			$this->ipEqual = (string)$jsonObject->ipEqual;
		if(!is_null($xml) && count($xml->ipEqualCurrent))
		{
			if(!empty($xml->ipEqualCurrent) && ((int) $xml->ipEqualCurrent === 1 || strtolower((string)$xml->ipEqualCurrent) === 'true'))
				$this->ipEqualCurrent = true;
			else
				$this->ipEqualCurrent = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->ipEqualCurrent))
		{
			if(!empty($jsonObject->ipEqualCurrent) && ((int) $jsonObject->ipEqualCurrent === 1 || strtolower((string)$jsonObject->ipEqualCurrent) === 'true'))
				$this->ipEqualCurrent = true;
			else
				$this->ipEqualCurrent = false;
		}
	}
	/**
	 * Country identifiers
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * Ip to identify the country
	 *
	 * @var string
	 */
	public $ipEqual = null;

	/**
	 * Indicates if to get the IP from the request
	 *
	 * @var bool
	 */
	public $ipEqualCurrent = null;


}

