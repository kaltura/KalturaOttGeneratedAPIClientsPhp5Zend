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
class Kaltura_Client_ConfigurationGroupTagService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_ConfigurationGroupTag
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_Type_ConfigurationGroupTag $configurationGroupTag)
	{
		$kparams = array();
		$this->client->addParam($kparams, "configurationGroupTag", $configurationGroupTag->toParams());
		$this->client->queueServiceActionCall("configurationgrouptag", "add", "KalturaConfigurationGroupTag", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConfigurationGroupTag");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_ConfigurationGroupTag");
		return $resultObject;
	}

	/**
	 * @return bool
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function delete($tag)
	{
		$kparams = array();
		$this->client->addParam($kparams, "tag", $tag);
		$this->client->queueServiceActionCall("configurationgrouptag", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_ConfigurationGroupTag
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get($tag)
	{
		$kparams = array();
		$this->client->addParam($kparams, "tag", $tag);
		$this->client->queueServiceActionCall("configurationgrouptag", "get", "KalturaConfigurationGroupTag", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConfigurationGroupTag");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_ConfigurationGroupTag");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_ConfigurationGroupTagListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_Type_ConfigurationGroupTagFilter $filter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("configurationgrouptag", "list", "KalturaConfigurationGroupTagListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConfigurationGroupTagListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_ConfigurationGroupTagListResponse");
		return $resultObject;
	}
}
