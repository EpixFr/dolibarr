<?php
/* Copyright (C) 2024       Frédéric France             <frederic.france@free.fr>
 * Copyright (C) 2024		MDW							<mdeweerd@users.noreply.github.com>
 */
/*
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 * or see https://www.gnu.org/
 */

/**
 *  \file       htdocs/core/modules/syslog/logHandlerInterface.php
 *  \ingroup    syslog
 *  \brief      LogHandlerInterface
 */

/**
 * LogHandlerInterface
 */
interface LogHandlerInterface
{
	/**
	 * 	Return name of logger
	 *
	 * 	@return	string		Name of logger
	 */
	public function getName();


	/**
	 * 	Return version of logger
	 *
	 * 	@return	string		Version of logger
	 */
	public function getVersion();

	/**
	 * 	Return information on logger
	 *
	 * 	@return	string		Version of logger
	 */
	public function getInfo();

	/**
	 * 	Return warning if something is wrong with logger
	 *
	 * 	@return	string		Warning message
	 */
	public function getWarning();

	/**
	 * 	Return array of configuration data
	 *
	 * 	@return	array		Return array of configuration data
	 */
	public function configure();

	/**
	 * 	Return if configuration is valid
	 *
	 * 	@return	boolean		True if configuration ok
	 */
	public function checkConfiguration();

	/**
	 * 	Is the logger active ?
	 *
	 * 	@return int		1 if logger enabled
	 */
	public function isActive();

	/**
	 * Export the message
	 *
	 * @param   array   $content            Array containing the info about the message
	 * @param   string  $suffixinfilename   When output is a file, append this suffix into default log filename.
	 * @return  void
	 */
	public function export($content, $suffixinfilename = '');
}
