<?php

namespace wuwisoft;

class wuwisoft {
	/**
	 *
	 * @param string $userCode
	 */
	private $userCode;

	/**
	 *
	 * @param string $userName
	 */
	private $UserName;

	/**
	 *
	 * @param string $userPassword
	 */
	private $UserPassword;



	public function __construct(string $userCode,string $userName,string $userPassword) {
		$this->userCode = $userCode;
		$this->userName = $userName;
		$this->userPassword = $userPassword;
	}
}