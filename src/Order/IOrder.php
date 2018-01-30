<?php

declare(strict_types = 1);

namespace Apploud\Paygate\Order;

use DateTime;

interface IOrder
{

	public function getCreated(): DateTime;

	public function getPriceWithVatInCents(): int;

	public function getOrderCurrency(): string;

	public function getOrderNumber(): string;

	/** @return IOrderItem[] */
	public function getOrderItems(): array;

	public function getTotalRevenueInCents(): int;

	public function getRevenueBaseInCents(int $vatRate): int;

	public function getRevenueVatInCents(int $vatRate): int;

	public function getRevenueForFutureDrawInCents(): int;

	public function getDrawingRevenueFromPastInCents(): int;

}
