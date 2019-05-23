<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2019  Kaltura Inc.
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
class Kaltura_Client_TransactionService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return 
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function downgrade(Kaltura_Client_Type_Purchase $purchase)
	{
		$kparams = array();
		$this->client->addParam($kparams, "purchase", $purchase->toParams());
		$this->client->queueServiceActionCall("transaction", "downgrade", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * @return bigint
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getPurchaseSessionId(Kaltura_Client_Type_PurchaseSession $purchaseSession)
	{
		$kparams = array();
		$this->client->addParam($kparams, "purchaseSession", $purchaseSession->toParams());
		$this->client->queueServiceActionCall("transaction", "getPurchaseSessionId", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (string)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_Transaction
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function purchase(Kaltura_Client_Type_Purchase $purchase)
	{
		$kparams = array();
		$this->client->addParam($kparams, "purchase", $purchase->toParams());
		$this->client->queueServiceActionCall("transaction", "purchase", "KalturaTransaction", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaTransaction");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Transaction");
		return $resultObject;
	}

	/**
	 * @return bool
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function setWaiver($assetId, $transactionType)
	{
		$kparams = array();
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->addParam($kparams, "transactionType", $transactionType);
		$this->client->queueServiceActionCall("transaction", "setWaiver", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return 
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function updateStatus($paymentGatewayId, $externalTransactionId, $signature, Kaltura_Client_Type_TransactionStatus $status)
	{
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->addParam($kparams, "externalTransactionId", $externalTransactionId);
		$this->client->addParam($kparams, "signature", $signature);
		$this->client->addParam($kparams, "status", $status->toParams());
		$this->client->queueServiceActionCall("transaction", "updateStatus", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * @return Kaltura_Client_Type_Transaction
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function upgrade(Kaltura_Client_Type_Purchase $purchase)
	{
		$kparams = array();
		$this->client->addParam($kparams, "purchase", $purchase->toParams());
		$this->client->queueServiceActionCall("transaction", "upgrade", "KalturaTransaction", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaTransaction");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Transaction");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_Transaction
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function validateReceipt(Kaltura_Client_Type_ExternalReceipt $externalReceipt)
	{
		$kparams = array();
		$this->client->addParam($kparams, "externalReceipt", $externalReceipt->toParams());
		$this->client->queueServiceActionCall("transaction", "validateReceipt", "KalturaTransaction", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaTransaction");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Transaction");
		return $resultObject;
	}
}
