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
class Kaltura_Client_Type_RandomCouponGenerationOptions extends Kaltura_Client_Type_CouponGenerationOptions
{
	public function getKalturaObjectType()
	{
		return 'KalturaRandomCouponGenerationOptions';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->numberOfCoupons))
			$this->numberOfCoupons = (int)$xml->numberOfCoupons;
		if(!is_null($jsonObject) && isset($jsonObject->numberOfCoupons))
			$this->numberOfCoupons = (int)$jsonObject->numberOfCoupons;
		if(!is_null($xml) && count($xml->useLetters))
		{
			if(!empty($xml->useLetters) && ((int) $xml->useLetters === 1 || strtolower((string)$xml->useLetters) === 'true'))
				$this->useLetters = true;
			else
				$this->useLetters = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->useLetters))
		{
			if(!empty($jsonObject->useLetters) && ((int) $jsonObject->useLetters === 1 || strtolower((string)$jsonObject->useLetters) === 'true'))
				$this->useLetters = true;
			else
				$this->useLetters = false;
		}
		if(!is_null($xml) && count($xml->useNumbers))
		{
			if(!empty($xml->useNumbers) && ((int) $xml->useNumbers === 1 || strtolower((string)$xml->useNumbers) === 'true'))
				$this->useNumbers = true;
			else
				$this->useNumbers = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->useNumbers))
		{
			if(!empty($jsonObject->useNumbers) && ((int) $jsonObject->useNumbers === 1 || strtolower((string)$jsonObject->useNumbers) === 'true'))
				$this->useNumbers = true;
			else
				$this->useNumbers = false;
		}
		if(!is_null($xml) && count($xml->useSpecialCharacters))
		{
			if(!empty($xml->useSpecialCharacters) && ((int) $xml->useSpecialCharacters === 1 || strtolower((string)$xml->useSpecialCharacters) === 'true'))
				$this->useSpecialCharacters = true;
			else
				$this->useSpecialCharacters = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->useSpecialCharacters))
		{
			if(!empty($jsonObject->useSpecialCharacters) && ((int) $jsonObject->useSpecialCharacters === 1 || strtolower((string)$jsonObject->useSpecialCharacters) === 'true'))
				$this->useSpecialCharacters = true;
			else
				$this->useSpecialCharacters = false;
		}
	}
	/**
	 * Number of coupons to generate
	 *
	 * @var int
	 */
	public $numberOfCoupons = null;

	/**
	 * Indicates whether to use letters in the generated codes (default is true)
	 *
	 * @var bool
	 */
	public $useLetters = null;

	/**
	 * Indicates whether to use numbers in the generated codes (default is true)
	 *
	 * @var bool
	 */
	public $useNumbers = null;

	/**
	 * Indicates whether to use special characters in the generated codes(default is true)
	 *
	 * @var bool
	 */
	public $useSpecialCharacters = null;


}

