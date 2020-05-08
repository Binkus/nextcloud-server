<?php

declare(strict_types=1);

/**
 * @copyright 2020 Christoph Wurst <christoph@winzerhof-wurst.at>
 *
 * @author 2020 Christoph Wurst <christoph@winzerhof-wurst.at>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace OC\AppFramework\Bootstrap;

use OCP\AppFramework\Bootstrap\IRegistrationContext;

class RegistrationContext implements IRegistrationContext {

	private $eventListeners = [];

	/**
	 * @inheritDoc
	 */
	public function registerService(string $name, callable $factory, bool $shared = true): void {
		// TODO: Implement registerService() method.
	}

	/**
	 * @inheritDoc
	 */
	public function registerServiceAlias(string $alias, string $target): void {
		// TODO: Implement registerServiceAlias() method.
	}

	/**
	 * @inheritDoc
	 */
	public function registerParameter(string $name, $value): void {
		// TODO: Implement registerParameter() method.
	}

	/**
	 * @inheritDoc
	 */
	public function registerEventListener(string $event, string $listener, int $priority = 0): void {
		$this->eventListeners[] = [$event, $listener, $priority];
	}

	public function getEventListeners(): array {
		return $this->eventListeners;
	}

}
