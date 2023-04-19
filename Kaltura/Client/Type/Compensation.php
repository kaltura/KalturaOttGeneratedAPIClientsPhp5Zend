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
class Kaltura_Client_Type_Compensation extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaCompensation';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (string)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (string)$jsonObject->id;
		if(!is_null($xml) && count($xml->subscriptionId))
			$this->subscriptionId = (string)$xml->subscriptionId;
		if(!is_null($jsonObject) && isset($jsonObject->subscriptionId))
			$this->subscriptionId = (string)$jsonObject->subscriptionId;
		if(!is_null($xml) && count($xml->compensationType))
			$this->compensationType = (string)$xml->compensationType;
		if(!is_null($jsonObject) && isset($jsonObject->compensationType))
			$this->compensationType = (string)$jsonObject->compensationType;
		if(!is_null($xml) && count($xml->amount))
			$this->amount = (float)$xml->amount;
		if(!is_null($jsonObject) && isset($jsonObject->amount))
			$this->amount = (float)$jsonObject->amount;
		if(!is_null($xml) && count($xml->totalRenewalIterations))
			$this->totalRenewalIterations = (int)$xml->totalRenewalIterations;
		if(!is_null($jsonObject) && isset($jsonObject->totalRenewalIterations))
			$this->totalRenewalIterations = (int)$jsonObject->totalRenewalIterations;
		if(!is_null($xml) && count($xml->appliedRenewalIterations))
			$this->appliedRenewalIterations = (int)$xml->appliedRenewalIterations;
		if(!is_null($jsonObject) && isset($jsonObject->appliedRenewalIterations))
			$this->appliedRenewalIterations = (int)$jsonObject->appliedRenewalIterations;
		if(!is_null($xml) && count($xml->purchaseId))
			$this->purchaseId = (int)$xml->purchaseId;
		if(!is_null($jsonObject) && isset($jsonObject->purchaseId))
			$this->purchaseId = (int)$jsonObject->purchaseId;
	}
	/**
	 * Compensation identifier
	 *
	 * @var bigint
	 * @readonly
	 */
	public $id = null;

	/**
	 * Subscription identifier
	 *
	 * @var bigint
	 * @readonly
	 */
	public $subscriptionId = null;

	/**
	 * Compensation type
	 *
	 * @var Kaltura_Client_Enum_CompensationType
	 */
	public $compensationType = null;

	/**
	 * Compensation amount
	 *
	 * @var float
	 */
	public $amount = null;

	/**
	 * The number of renewals for compensation
	 *
	 * @var int
	 */
	public $totalRenewalIterations = null;

	/**
	 * The number of renewals the compensation was already applied on
	 *
	 * @var int
	 * @readonly
	 */
	public $appliedRenewalIterations = null;

	/**
	 * Purchase identifier
	 *
	 * @var int
	 */
	public $purchaseId = null;


}

