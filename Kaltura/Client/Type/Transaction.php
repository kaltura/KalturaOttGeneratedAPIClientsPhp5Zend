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
class Kaltura_Client_Type_Transaction extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaTransaction';
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
		if(!is_null($xml) && count($xml->paymentGatewayReferenceId))
			$this->paymentGatewayReferenceId = (string)$xml->paymentGatewayReferenceId;
		if(!is_null($jsonObject) && isset($jsonObject->paymentGatewayReferenceId))
			$this->paymentGatewayReferenceId = (string)$jsonObject->paymentGatewayReferenceId;
		if(!is_null($xml) && count($xml->paymentGatewayResponseId))
			$this->paymentGatewayResponseId = (string)$xml->paymentGatewayResponseId;
		if(!is_null($jsonObject) && isset($jsonObject->paymentGatewayResponseId))
			$this->paymentGatewayResponseId = (string)$jsonObject->paymentGatewayResponseId;
		if(!is_null($xml) && count($xml->state))
			$this->state = (string)$xml->state;
		if(!is_null($jsonObject) && isset($jsonObject->state))
			$this->state = (string)$jsonObject->state;
		if(!is_null($xml) && count($xml->failReasonCode))
			$this->failReasonCode = (int)$xml->failReasonCode;
		if(!is_null($jsonObject) && isset($jsonObject->failReasonCode))
			$this->failReasonCode = (int)$jsonObject->failReasonCode;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
	}
	/**
	 * Kaltura unique ID representing the transaction
	 *
	 * @var string
	 */
	public $id = null;

	/**
	 * Transaction reference ID received from the payment gateway. 
	 *             Value is available only if the payment gateway provides this information.
	 *
	 * @var string
	 */
	public $paymentGatewayReferenceId = null;

	/**
	 * Response ID received from by the payment gateway. 
	 *             Value is available only if the payment gateway provides this information.
	 *
	 * @var string
	 */
	public $paymentGatewayResponseId = null;

	/**
	 * Transaction state: OK/Pending/Failed
	 *
	 * @var string
	 */
	public $state = null;

	/**
	 * Adapter failure reason code
	 *             Insufficient funds = 20, Invalid account = 21, User unknown = 22, Reason unknown = 23, Unknown payment gateway response = 24,
	 *             No response from payment gateway = 25, Exceeded retry limit = 26, Illegal client request = 27, Expired = 28
	 *
	 * @var int
	 */
	public $failReasonCode = null;

	/**
	 * Entitlement creation date
	 *
	 * @var int
	 */
	public $createdAt = null;


}

