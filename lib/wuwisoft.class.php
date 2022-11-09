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
	private $userName;

	/**
	 *
	 * @param string $userPassword
	 */
	private $userPassword;

	/**
	 *
	 * This function is ready for iha website user auth...
	 * Function is needed **ONLY** String variable (userCode,userName,userPassword)
	 *
	 * @param string $userCode
	 * @param string $userName
	 * @param string $userPassword
	 */
	public function __construct(string $userCode,string $userName,string $userPassword) {

		(strlen($userCode) > 0) ? $this->userCode = $userCode : $durum = "UserCode Sağlanamadı!";
		(strlen($userName) > 0) ? $this->userName = $userName  : $durum = "UserName Sağlanamadı!";
		(strlen($userPassword) > 0) ? $this->userPassword = $userPassword : $durum = "UserPassword Sağlanamadı!";

		if(isset($durum)): return $durum; endif;

	}

	/**
	*
	 * This function is generate url use for iha website
	*/
	public function urlGenerator()
	{
		$kCode = $this->userCode;
		$kName = $this->userName;
		$kPass = $this->userPassword;

        $url = 'http://abonerss.iha.com.tr/xml/standartrss?';
		if((strlen($kCode) > 0) || (strlen($kName) > 0) || (strlen($kPass) > 0))
		{
			$url .= 'UserCode=' . $kCode;
			$url .= '&UserName=' . $kName;
			$url .= '&UserPassword=' . $kPass;
		}else
		{
			return "Hata <span>UserCode:</span> $kCode / <span>UserName:</span> $kName / <span>UserPassword:</span> $kPass değerlerini kontrol edin!";
		}

		$url .= '&tip=1';
		$url .= '&UstKategori=0';
		$url .= '&Kategori=0';
		$url .= '&Sehir=0';
		$url .= '&wp=0';
		$url .= '&tagp=0';

		return $url;
	}
}