<?php declare(strict_types = 1);

namespace AsisTeam\CSOBBC\Entity\Report;

use DateTimeImmutable;
use Money\Money;

interface IReport
{

	public function getSerialNo(): string;
	public function getAccountNo(): string;
	public function getAccountOwner(): string;
	public function getFrequency(): string;

	public function getDateStart(): ?DateTimeImmutable;
	public function getAmountStart(): float;
	public function getDateEnd(): DateTimeImmutable;
	public function getAmountEnd(): float;

	/** @return IReportEntry[] */
	public function getEntries(): array;

}
