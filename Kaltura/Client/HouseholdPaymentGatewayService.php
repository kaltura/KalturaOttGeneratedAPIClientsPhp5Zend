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
class Kaltura_Client_HouseholdPaymentGatewayService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return bool
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function disable($paymentGatewayId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->queueServiceActionCall("householdpaymentgateway", "disable", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return bool
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function enable($paymentGatewayId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->queueServiceActionCall("householdpaymentgateway", "enable", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return string
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getChargeID($paymentGatewayExternalId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayExternalId", $paymentGatewayExternalId);
		$this->client->queueServiceActionCall("householdpaymentgateway", "getChargeID", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (string)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_PaymentGatewayConfiguration
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function invoke($paymentGatewayId, $intent, array $extraParameters)
	{
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->addParam($kparams, "intent", $intent);
		foreach($extraParameters as $index => $obj)
		{
			$this->client->addParam($kparams, "extraParameters:$index", $obj->toParams());
		}
		$this->client->queueServiceActionCall("householdpaymentgateway", "invoke", "KalturaPaymentGatewayConfiguration", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPaymentGatewayConfiguration");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_PaymentGatewayConfiguration");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_HouseholdPaymentGatewayListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("householdpaymentgateway", "list", "KalturaHouseholdPaymentGatewayListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaHouseholdPaymentGatewayListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_HouseholdPaymentGatewayListResponse");
		return $resultObject;
	}

	/**
	 * @return 
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function resume($paymentGatewayId, array $adapterData = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		if ($adapterData !== null)
			foreach($adapterData as $index => $obj)
			{
				$this->client->addParam($kparams, "adapterData:$index", $obj->toParams());
			}
		$this->client->queueServiceActionCall("householdpaymentgateway", "resume", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * @return bool
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function setChargeID($paymentGatewayExternalId, $chargeId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayExternalId", $paymentGatewayExternalId);
		$this->client->addParam($kparams, "chargeId", $chargeId);
		$this->client->queueServiceActionCall("householdpaymentgateway", "setChargeID", null, $kparams);
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
	function suspend($paymentGatewayId, Kaltura_Client_Type_SuspendSettings $suspendSettings = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		if ($suspendSettings !== null)
			$this->client->addParam($kparams, "suspendSettings", $suspendSettings->toParams());
		$this->client->queueServiceActionCall("householdpaymentgateway", "suspend", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}
}
