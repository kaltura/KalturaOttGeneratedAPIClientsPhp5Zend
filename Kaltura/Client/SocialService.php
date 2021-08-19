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
class Kaltura_Client_SocialService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_Social
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get($type)
	{
		$kparams = array();
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("social", "get", "KalturaSocial", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSocial");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Social");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_Social
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getByToken($partnerId, $token, $type)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "token", $token);
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("social", "getByToken", "KalturaSocial", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSocial");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Social");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_SocialConfig
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getConfiguration($type, $partnerId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "type", $type);
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->queueServiceActionCall("social", "getConfiguration", "KalturaSocialConfig", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSocialConfig");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_SocialConfig");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_LoginResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function login($partnerId, $token, $type, $udid = null, array $extraParams = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "token", $token);
		$this->client->addParam($kparams, "type", $type);
		$this->client->addParam($kparams, "udid", $udid);
		if ($extraParams !== null)
			$this->client->addParam($kparams, "extraParams", $extraParams->toParams());
		$this->client->queueServiceActionCall("social", "login", "KalturaLoginResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLoginResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LoginResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_Social
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function merge($token, $type)
	{
		$kparams = array();
		$this->client->addParam($kparams, "token", $token);
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("social", "merge", "KalturaSocial", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSocial");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Social");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_Social
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function register($partnerId, $token, $type, $email = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "token", $token);
		$this->client->addParam($kparams, "type", $type);
		$this->client->addParam($kparams, "email", $email);
		$this->client->queueServiceActionCall("social", "register", "KalturaSocial", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSocial");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Social");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_Social
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function unmerge($type)
	{
		$kparams = array();
		$this->client->addParam($kparams, "type", $type);
		$this->client->queueServiceActionCall("social", "unmerge", "KalturaSocial", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSocial");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Social");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_SocialConfig
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function UpdateConfiguration(Kaltura_Client_Type_SocialConfig $configuration)
	{
		$kparams = array();
		$this->client->addParam($kparams, "configuration", $configuration->toParams());
		$this->client->queueServiceActionCall("social", "UpdateConfiguration", "KalturaSocialConfig", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSocialConfig");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_SocialConfig");
		return $resultObject;
	}
}
