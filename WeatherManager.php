<?php

/**********************************************************************
*	Huco 617.B2 (Winter 2014)
*	WeatherManager is an managerial class that builds a series
*	of web scrapers and collects weather forecast data to be 
*	inserted into a database.
*
*
**********************************************************************/

class WeatherManager {

	protected $scrapers = array();		//	collection of scrapers
	protected $dbhelper;				//	database helper object
	protected $scraper_directory = '';	//	where scrapers live?

	
	public function __construct() {
		$this->dbhelper = Database_DBConn::getConnection();
		$this->collectScrapers();
	}
	
	public function addScraper(WeatherScraper $scraper) {
		$this->scrapers[] = $scraper;
	}
	
	public function collectScrapers() {
		//	build an instance of every class in directory X?
	}
	
	public function processDTO(WeatherDTO $dto) {
		//	process TBD after database design
		//	question: how to determine actual weather vs forecast?
	}
	
	public function run() {
		//	loop thru scrapers; collect DTO if successful
		foreach ($this->scrapers as $scraper) {
			if ($scraper->scrape()) {
				$this->processDTO($scraper->getWeatherDTO());
			}
		}
	}
	


}

?>