<?php
declare(ENCODING = 'utf-8') ;
namespace Erfurt\Tests\Unit\Store\Adapter;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Thomas Maroschik <tmaroschik@dfau.de>
 *  All rights reserved
 *
 *  This class is a port of the corresponding class of the
 *  {@link http://aksw.org/Projects/Erfurt Erfurt} project.
 *  All credits go to the Erfurt team.
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
class SparqlTest extends \Erfurt\Tests\BaseTestCase {

	public function setUp() {

	}

	public function testInstantiation() {
		$options = array(
			'serviceurl' => 'http://dbpedia.org/sparql',
			'graphs' => array('http://dbpedia.org')
		);

		$adapter = new \Erfurt\Store\Adapter\Sparql($options);

		$this->assertTrue($adapter instanceof \Erfurt\Store\Adapter\Sparql);
	}

	public function testSparqlWithDbPediaEndpointIssue589() {
		$options = array(
			'serviceurl' => 'http://dbpedia.org/sparql',
			'graphs' => array('http://dbpedia.org')
		);
		$adapter = new \Erfurt\Store\Adapter\Sparql($options);

		$sparql = 'SELECT ?s ?p ?o WHERE {?s ?p ?o} LIMIT 10';
		$result = $adapter->sparqlQuery($sparql);

		$this->assertTrue(is_array($result));
		$this->assertEquals(10, count($result));
	}

}

?>