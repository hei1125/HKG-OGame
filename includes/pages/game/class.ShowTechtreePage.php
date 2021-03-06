<?php

/**
 *  2Moons
 *  Copyright (C) 2012 Jan Kröpke
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package 2Moons
 * @author Jan Kröpke <info@2moons.cc>
 * @copyright 2012 Jan Kröpke <info@2moons.cc>
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 1.7.3 (2013-05-19)
 * @info $Id: class.ShowTechtreePage.php 2632 2013-03-18 19:05:14Z slaver7 $
 * @link http://2moons.cc/
 */


class ShowTechtreePage extends AbstractPage
{
	public static $requireModule = MODULE_TECHTREE;

	function __construct()
	{
		parent::__construct();
	}

	function show()
	{
		global $resource, $requeriments, $LNG, $reslist, $USER, $PLANET;

		$RequeriList	= array();

		$elementID		= array_merge(array(0), $reslist['build'], array(100), $reslist['tech'], array(200), $reslist['fleet'], array(400), $reslist['defense'], array(500), $reslist['missile'], array(600), $reslist['officier'], array(800), $reslist['race']);

		foreach($elementID as $Element)
		{
			if(!isset($resource[$Element])) {
				$TechTreeList[$Element]	= $Element;

			} else {
				$RequeriList	= array();
				if(isset($requeriments[$Element]))
				{
					foreach($requeriments[$Element] as $requireID => $RedCount)
					{
						$RequeriList[$requireID]	= array('count' => $RedCount, 'own' => (isset($PLANET[$resource[$requireID]])) ? $PLANET[$resource[$requireID]] : $USER[$resource[$requireID]]);
					}
				}

				$TechTreeList[$Element]	= $RequeriList;
			}
		}

		$this->tplObj->assign_vars(array(
			'TechTreeList'		=> $TechTreeList,
		));

		$this->display('page.techtree.default.tpl');
	}

	function build()
	{
		global $resource, $requeriments, $LNG, $reslist, $USER, $PLANET;

		$RequeriList	= array();

		$elementID		= array_merge(array(0), $reslist['build']);

		foreach($elementID as $Element)
		{
			if(!isset($resource[$Element])) {
				$TechTreeList[$Element]	= $Element;

			} else {
				$RequeriList	= array();
				if(isset($requeriments[$Element]))
				{
					foreach($requeriments[$Element] as $requireID => $RedCount)
					{
						$RequeriList[$requireID]	= array('count' => $RedCount, 'own' => (isset($PLANET[$resource[$requireID]])) ? $PLANET[$resource[$requireID]] : $USER[$resource[$requireID]]);
					}
				}

				$TechTreeList[$Element]	= $RequeriList;
			}
		}

		$this->tplObj->assign_vars(array(
			'TechTreeList'		=> $TechTreeList,
		));

		$this->display('page.techtreebuild.default.tpl');
	}

	function tech()
	{
		global $resource, $requeriments, $LNG, $reslist, $USER, $PLANET;

		$RequeriList	= array();

		$elementID		= array_merge(array(100), $reslist['tech']);

		foreach($elementID as $Element)
		{
			if(!isset($resource[$Element])) {
				$TechTreeList[$Element]	= $Element;

			} else {
				$RequeriList	= array();
				if(isset($requeriments[$Element]))
				{
					foreach($requeriments[$Element] as $requireID => $RedCount)
					{
						$RequeriList[$requireID]	= array('count' => $RedCount, 'own' => (isset($PLANET[$resource[$requireID]])) ? $PLANET[$resource[$requireID]] : $USER[$resource[$requireID]]);
					}
				}

				$TechTreeList[$Element]	= $RequeriList;
			}
		}

		$this->tplObj->assign_vars(array(
			'TechTreeList'		=> $TechTreeList,
		));

		$this->display('page.techtreetech.default.tpl');
	}

	function officier()
	{
		global $resource, $requeriments, $LNG, $reslist, $USER, $PLANET;

		$RequeriList	= array();

		$elementID		= array_merge(array(600), $reslist['officier']);

		foreach($elementID as $Element)
		{
			if(!isset($resource[$Element])) {
				$TechTreeList[$Element]	= $Element;

			} else {
				$RequeriList	= array();
				if(isset($requeriments[$Element]))
				{
					foreach($requeriments[$Element] as $requireID => $RedCount)
					{
						$RequeriList[$requireID]	= array('count' => $RedCount, 'own' => (isset($PLANET[$resource[$requireID]])) ? $PLANET[$resource[$requireID]] : $USER[$resource[$requireID]]);
					}
				}

				$TechTreeList[$Element]	= $RequeriList;
			}
		}

		$this->tplObj->assign_vars(array(
			'TechTreeList'		=> $TechTreeList,
		));

		$this->display('page.techtreeofficier.default.tpl');
	}

	function fleet()
	{
		global $resource, $requeriments, $LNG, $reslist, $USER, $PLANET;

		$RequeriList	= array();

		$elementID		= array_merge(array(200), $reslist['fleet']);

		foreach($elementID as $Element)
		{
			if(!isset($resource[$Element])) {
				$TechTreeList[$Element]	= $Element;

			} else {
				$RequeriList	= array();
				if(isset($requeriments[$Element]))
				{
					foreach($requeriments[$Element] as $requireID => $RedCount)
					{
						$RequeriList[$requireID]	= array('count' => $RedCount, 'own' => (isset($PLANET[$resource[$requireID]])) ? $PLANET[$resource[$requireID]] : $USER[$resource[$requireID]]);
					}
				}

				$TechTreeList[$Element]	= $RequeriList;
			}
		}

		$this->tplObj->assign_vars(array(
			'TechTreeList'		=> $TechTreeList,
		));

		$this->display('page.techtreefleet.default.tpl');
	}

	function defense()
	{
		global $resource, $requeriments, $LNG, $reslist, $USER, $PLANET;

		$RequeriList	= array();

		$elementID		= array_merge(array(400), $reslist['defense'], array(500), $reslist['missile']);

		foreach($elementID as $Element)
		{
			if(!isset($resource[$Element])) {
				$TechTreeList[$Element]	= $Element;

			} else {
				$RequeriList	= array();
				if(isset($requeriments[$Element]))
				{
					foreach($requeriments[$Element] as $requireID => $RedCount)
					{
						$RequeriList[$requireID]	= array('count' => $RedCount, 'own' => (isset($PLANET[$resource[$requireID]])) ? $PLANET[$resource[$requireID]] : $USER[$resource[$requireID]]);
					}
				}

				$TechTreeList[$Element]	= $RequeriList;
			}
		}

		$this->tplObj->assign_vars(array(
			'TechTreeList'		=> $TechTreeList,
		));

		$this->display('page.techtreedefense.default.tpl');
	}
	function race()
	{
		global $resource, $requeriments, $LNG, $reslist, $USER, $PLANET;

		$RequeriList	= array();

		$elementID		= array_merge(array(800), $reslist['race']);

		foreach($elementID as $Element)
		{
			if(!isset($resource[$Element])) {
				$TechTreeList[$Element]	= $Element;

			} else {
				$RequeriList	= array();
				if(isset($requeriments[$Element]))
				{
					foreach($requeriments[$Element] as $requireID => $RedCount)
					{
						$RequeriList[$requireID]	= array('count' => $RedCount, 'own' => (isset($PLANET[$resource[$requireID]])) ? $PLANET[$resource[$requireID]] : $USER[$resource[$requireID]]);
					}
				}

				$TechTreeList[$Element]	= $RequeriList;
			}
		}

		$this->tplObj->assign_vars(array(
			'TechTreeList'		=> $TechTreeList,
		));
	}
}
