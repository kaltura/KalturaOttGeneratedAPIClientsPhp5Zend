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
// Copyright (C) 2006-2020  Kaltura Inc.
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
class Kaltura_Client_OttUserService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_OTTUser
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function activate($partnerId, $username, $activationToken)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "username", $username);
		$this->client->addParam($kparams, "activationToken", $activationToken);
		$this->client->queueServiceActionCall("ottuser", "activate", "KalturaOTTUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOTTUser");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_OTTUser");
		return $resultObject;
	}

	/**
	 * @return bool
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function addRole($roleId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "roleId", $roleId);
		$this->client->queueServiceActionCall("ottuser", "addRole", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_LoginSession
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function anonymousLogin($partnerId, $udid = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->queueServiceActionCall("ottuser", "anonymousLogin", "KalturaLoginSession", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLoginSession");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LoginSession");
		return $resultObject;
	}

	/**
	 * @return bool
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function delete()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("ottuser", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_OTTUser
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("ottuser", "get", "KalturaOTTUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOTTUser");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_OTTUser");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_StringValue
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getEncryptedUserId()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("ottuser", "getEncryptedUserId", "KalturaStringValue", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaStringValue");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_StringValue");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_OTTUserListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_Type_OTTUserFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("ottuser", "list", "KalturaOTTUserListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOTTUserListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_OTTUserListResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_LoginResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function login($partnerId, $username = null, $password = null, array $extraParams = null, $udid = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "username", $username);
		$this->client->addParam($kparams, "password", $password);
		if ($extraParams !== null)
			$this->client->addParam($kparams, "extraParams", $extraParams->toParams());
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->queueServiceActionCall("ottuser", "login", "KalturaLoginResponse", $kparams);
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
	 * @return Kaltura_Client_Type_LoginResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function loginWithPin($partnerId, $pin, $udid = null, $secret = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "pin", $pin);
		$this->client->addParam($kparams, "udid", $udid);
		$this->client->addParam($kparams, "secret", $secret);
		$this->client->queueServiceActionCall("ottuser", "loginWithPin", "KalturaLoginResponse", $kparams);
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
	 * @return bool
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function logout(array $adapterData = null)
	{
		$kparams = array();
		if ($adapterData !== null)
			$this->client->addParam($kparams, "adapterData", $adapterData->toParams());
		$this->client->queueServiceActionCall("ottuser", "logout", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_OTTUser
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function register($partnerId, Kaltura_Client_Type_OTTUser $user, $password)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "user", $user->toParams());
		$this->client->addParam($kparams, "password", $password);
		$this->client->queueServiceActionCall("ottuser", "register", "KalturaOTTUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOTTUser");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_OTTUser");
		return $resultObject;
	}

	/**
	 * @return bool
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function resendActivationToken($partnerId, $username)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "username", $username);
		$this->client->queueServiceActionCall("ottuser", "resendActivationToken", null, $kparams);
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
	function resetPassword($partnerId, $username, $templateName = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "username", $username);
		$this->client->addParam($kparams, "templateName", $templateName);
		$this->client->queueServiceActionCall("ottuser", "resetPassword", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_OTTUser
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function setInitialPassword($partnerId, $token, $password)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "token", $token);
		$this->client->addParam($kparams, "password", $password);
		$this->client->queueServiceActionCall("ottuser", "setInitialPassword", "KalturaOTTUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOTTUser");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_OTTUser");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_OTTUser
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function update(Kaltura_Client_Type_OTTUser $user, $id = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "user", $user->toParams());
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("ottuser", "update", "KalturaOTTUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOTTUser");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_OTTUser");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_OTTUserDynamicData
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function updateDynamicData($key, Kaltura_Client_Type_StringValue $value)
	{
		$kparams = array();
		$this->client->addParam($kparams, "key", $key);
		$this->client->addParam($kparams, "value", $value->toParams());
		$this->client->queueServiceActionCall("ottuser", "updateDynamicData", "KalturaOTTUserDynamicData", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaOTTUserDynamicData");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_OTTUserDynamicData");
		return $resultObject;
	}

	/**
	 * @return bool
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function updateLoginData($username, $oldPassword, $newPassword)
	{
		$kparams = array();
		$this->client->addParam($kparams, "username", $username);
		$this->client->addParam($kparams, "oldPassword", $oldPassword);
		$this->client->addParam($kparams, "newPassword", $newPassword);
		$this->client->queueServiceActionCall("ottuser", "updateLoginData", null, $kparams);
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
	function updatePassword($userId, $password)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "password", $password);
		$this->client->queueServiceActionCall("ottuser", "updatePassword", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}
}
