<?php
declare(strict_types=1);

interface Enum extends BackedEnum
{
	/**
	 * @desc Replacing from method
	 * @param int|string $value
	 * @return static
	 * @throws ValueError
	 */
	public static function create(int|string $value): static;

	/**
	 * @desc Replacing tryFrom method
	 * @param int|string $value
	 * @return static|null
	 */
	public static function tryCreate(int|string $value): ?static;

	/**
	 * @param int|string $value
	 * @throws ValueError
	 */
	public static function validate(int|string $value): void;
}
