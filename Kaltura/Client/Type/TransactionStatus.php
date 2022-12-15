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
class Kaltura_Client_Type_TransactionStatus extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaTransactionStatus';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->adapterTransactionStatus))
		{
			if(isset($xml->adapterTransactionStatus->item) && count($xml->adapterTransactionStatus->item))
				$this->multiLingual_adapterTransactionStatus = Kaltura_Client_ParseUtils::unmarshalArray($xml->adapterTransactionStatus, '');
			else
				$this->adapterTransactionStatus = (string)$xml->adapterTransactionStatus;
		}
		if(count($xml->externalId))
		{
			if(isset($xml->externalId->item) && count($xml->externalId->item))
				$this->multiLingual_externalId = Kaltura_Client_ParseUtils::unmarshalArray($xml->externalId, '');
			else
				$this->externalId = (string)$xml->externalId;
		}
		if(count($xml->externalStatus))
		{
			if(isset($xml->externalStatus->item) && count($xml->externalStatus->item))
				$this->multiLingual_externalStatus = Kaltura_Client_ParseUtils::unmarshalArray($xml->externalStatus, '');
			else
				$this->externalStatus = (string)$xml->externalStatus;
		}
		if(count($xml->externalMessage))
		{
			if(isset($xml->externalMessage->item) && count($xml->externalMessage->item))
				$this->multiLingual_externalMessage = Kaltura_Client_ParseUtils::unmarshalArray($xml->externalMessage, '');
			else
				$this->externalMessage = (string)$xml->externalMessage;
		}
		if(count($xml->failReason))
			$this->failReason = (int)$xml->failReason;
	}
	/**
	 * Payment gateway adapter application state for the transaction to update
	 *
	 * @var Kaltura_Client_Enum_TransactionAdapterStatus
	 */
	public $adapterTransactionStatus = null;

	/**
	 * External transaction identifier
	 *
	 * @var string
	 */
	public $externalId = null;

	/**
	 * Payment gateway transaction status
	 *
	 * @var string
	 */
	public $externalStatus = null;

	/**
	 * Payment gateway message
	 *
	 * @var string
	 */
	public $externalMessage = null;

	/**
	 * The reason the transaction failed
	 *
	 * @var int
	 */
	public $failReason = null;


}

