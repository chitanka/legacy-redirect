<?php

class HelpPage extends Page
{
	public function __construct()
	{
		parent::__construct();

		$newPages = array(
			'sfb' => 'docs/sfb',
			'digitalizing' => 'articles/digitizing',
			'scantailor' => 'https://wiki.chitanka.info/%D0%9E%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B0_%D0%BD%D0%B0_%D1%81%D0%BA%D0%B0%D0%BD%D0%B8%D1%80%D0%B0%D0%BD%D0%B8_%D0%B8%D0%B7%D0%BE%D0%B1%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F_%D1%87%D1%80%D0%B5%D0%B7_Scan_Tailor',
		);
		if (isset($newPages[$this->startwith])) {
			$this->redirectLegacy($newPages[$this->startwith]);
		}

		$this->redirectLegacy('');
	}

}
