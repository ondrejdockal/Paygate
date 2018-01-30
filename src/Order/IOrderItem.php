<?php

declare(strict_types = 1);

namespace Apploud\Paygate\Order;

interface IOrderItem
{

	public function getType(): string;

	public function getProductUrl(): ?string;

	public function getName(): string;

	public function getCount(): int;

	public function getPriceWithVatInCents(): int;

	public function getVatRate(): int;

}
