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
class Kaltura_Client_Type_HouseholdPaymentGateway extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaHouseholdPaymentGateway';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (int)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (int)$jsonObject->id;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->isDefault))
		{
			if(!empty($xml->isDefault) && ((int) $xml->isDefault === 1 || strtolower((string)$xml->isDefault) === 'true'))
				$this->isDefault = true;
			else
				$this->isDefault = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isDefault))
		{
			if(!empty($jsonObject->isDefault) && ((int) $jsonObject->isDefault === 1 || strtolower((string)$jsonObject->isDefault) === 'true'))
				$this->isDefault = true;
			else
				$this->isDefault = false;
		}
		if(!is_null($xml) && count($xml->selectedBy))
			$this->selectedBy = (string)$xml->selectedBy;
		if(!is_null($jsonObject) && isset($jsonObject->selectedBy))
			$this->selectedBy = (string)$jsonObject->selectedBy;
		if(!is_null($xml) && count($xml->suspendSettings) && !empty($xml->suspendSettings))
			$this->suspendSettings = Kaltura_Client_ParseUtils::unmarshalObject($xml->suspendSettings, "KalturaSuspendSettings");
		if(!is_null($jsonObject) && isset($jsonObject->suspendSettings) && !empty($jsonObject->suspendSettings))
			$this->suspendSettings = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->suspendSettings, "KalturaSuspendSettings");
	}
	/**
	 * payment gateway id
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * payment gateway name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Payment gateway default (true/false)
	 *
	 * @var bool
	 */
	public $isDefault = null;

	/**
	 * distinction payment gateway selected by account or household
	 *
	 * @var Kaltura_Client_Enum_HouseholdPaymentGatewaySelectedBy
	 */
	public $selectedBy = null;

	/**
	 * suspend settings
	 *
	 * @var Kaltura_Client_Type_SuspendSettings
	 * @readonly
	 */
	public $suspendSettings;


}

