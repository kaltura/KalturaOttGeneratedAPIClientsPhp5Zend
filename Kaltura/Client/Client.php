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
class Kaltura_Client_Client extends Kaltura_Client_ClientBase
{
	/**
	 * Kaltura client constructor
	 *
	 * @param Kaltura_Client_Configuration $config
	 */
	public function __construct(Kaltura_Client_Configuration $config)
	{
		parent::__construct($config);
		
		$this->setClientTag('php5:22-04-26');
		$this->setApiVersion('7.4.0.29875');
		
	}
	
	/**
	 * Client tag
	 * 
	 * @param string $clientTag
	 */
	public function setClientTag($clientTag)
	{
		$this->clientConfiguration['clientTag'] = $clientTag;
	}
	
	/**
	 * Client tag
	 * 
	 * @return string
	 */
	public function getClientTag()
	{
		if(isset($this->clientConfiguration['clientTag']))
		{
			return $this->clientConfiguration['clientTag'];
		}
		
		return null;
	}
	
	/**
	 * API Version
	 * 
	 * @param string $apiVersion
	 */
	public function setApiVersion($apiVersion)
	{
		$this->clientConfiguration['apiVersion'] = $apiVersion;
	}
	
	/**
	 * API Version
	 * 
	 * @return string
	 */
	public function getApiVersion()
	{
		if(isset($this->clientConfiguration['apiVersion']))
		{
			return $this->clientConfiguration['apiVersion'];
		}
		
		return null;
	}
	
	/**
	 * Impersonated partner id
	 * 
	 * @param int $partnerId
	 */
	public function setPartnerId($partnerId)
	{
		$this->requestConfiguration['partnerId'] = $partnerId;
	}
	
	/**
	 * Impersonated partner id
	 * 
	 * @return int
	 */
	public function getPartnerId()
	{
		if(isset($this->requestConfiguration['partnerId']))
		{
			return $this->requestConfiguration['partnerId'];
		}
		
		return null;
	}
	
	/**
	 * Impersonated user id
	 * 
	 * @param int $userId
	 */
	public function setUserId($userId)
	{
		$this->requestConfiguration['userId'] = $userId;
	}
	
	/**
	 * Impersonated user id
	 * 
	 * @return int
	 */
	public function getUserId()
	{
		if(isset($this->requestConfiguration['userId']))
		{
			return $this->requestConfiguration['userId'];
		}
		
		return null;
	}
	
	/**
	 * Content language
	 * 
	 * @param string $language
	 */
	public function setLanguage($language)
	{
		$this->requestConfiguration['language'] = $language;
	}
	
	/**
	 * Content language
	 * 
	 * @return string
	 */
	public function getLanguage()
	{
		if(isset($this->requestConfiguration['language']))
		{
			return $this->requestConfiguration['language'];
		}
		
		return null;
	}
	
	/**
	 * Content currency
	 * 
	 * @param string $currency
	 */
	public function setCurrency($currency)
	{
		$this->requestConfiguration['currency'] = $currency;
	}
	
	/**
	 * Content currency
	 * 
	 * @return string
	 */
	public function getCurrency()
	{
		if(isset($this->requestConfiguration['currency']))
		{
			return $this->requestConfiguration['currency'];
		}
		
		return null;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @param string $ks
	 */
	public function setKs($ks)
	{
		$this->requestConfiguration['ks'] = $ks;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @return string
	 */
	public function getKs()
	{
		if(isset($this->requestConfiguration['ks']))
		{
			return $this->requestConfiguration['ks'];
		}
		
		return null;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @param string $sessionId
	 */
	public function setSessionId($sessionId)
	{
		$this->requestConfiguration['ks'] = $sessionId;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @return string
	 */
	public function getSessionId()
	{
		if(isset($this->requestConfiguration['ks']))
		{
			return $this->requestConfiguration['ks'];
		}
		
		return null;
	}
	
	/**
	 * Response profile - this attribute will be automatically unset after every API call
	 * 
	 * @param Kaltura_Client_Type_BaseResponseProfile $responseProfile
	 */
	public function setResponseProfile(Kaltura_Client_Type_BaseResponseProfile $responseProfile)
	{
		$this->requestConfiguration['responseProfile'] = $responseProfile;
	}
	
	/**
	 * Response profile - this attribute will be automatically unset after every API call
	 * 
	 * @return Kaltura_Client_Type_BaseResponseProfile
	 */
	public function getResponseProfile()
	{
		if(isset($this->requestConfiguration['responseProfile']))
		{
			return $this->requestConfiguration['responseProfile'];
		}
		
		return null;
	}
	
	/**
	 * Abort the Multireuqset call if any error occurs in one of the requests
	 * 
	 * @param bool $abortOnError
	 */
	public function setAbortOnError($abortOnError)
	{
		$this->requestConfiguration['abortOnError'] = $abortOnError;
	}
	
	/**
	 * Abort the Multireuqset call if any error occurs in one of the requests
	 * 
	 * @return bool
	 */
	public function getAbortOnError()
	{
		if(isset($this->requestConfiguration['abortOnError']))
		{
			return $this->requestConfiguration['abortOnError'];
		}
		
		return null;
	}
	
	/**
	 * Abort all following requests if current request has an error
	 * 
	 * @param bool $abortAllOnError
	 */
	public function setAbortAllOnError($abortAllOnError)
	{
		$this->requestConfiguration['abortAllOnError'] = $abortAllOnError;
	}
	
	/**
	 * Abort all following requests if current request has an error
	 * 
	 * @return bool
	 */
	public function getAbortAllOnError()
	{
		if(isset($this->requestConfiguration['abortAllOnError']))
		{
			return $this->requestConfiguration['abortAllOnError'];
		}
		
		return null;
	}
	
	/**
	 * Skip current request according to skip condition
	 * 
	 * @param Kaltura_Client_Type_SkipCondition $skipCondition
	 */
	public function setSkipCondition(Kaltura_Client_Type_SkipCondition $skipCondition)
	{
		$this->requestConfiguration['skipCondition'] = $skipCondition;
	}
	
	/**
	 * Skip current request according to skip condition
	 * 
	 * @return Kaltura_Client_Type_SkipCondition
	 */
	public function getSkipCondition()
	{
		if(isset($this->requestConfiguration['skipCondition']))
		{
			return $this->requestConfiguration['skipCondition'];
		}
		
		return null;
	}
	
	/**
	 * Clear all volatile configuration parameters
	 */
	protected function resetRequest()
	{
		parent::resetRequest();
		unset($this->requestConfiguration['responseProfile']);
	}
}
