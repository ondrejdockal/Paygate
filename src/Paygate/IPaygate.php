<?php

declare(strict_types = 1);

namespace Apploud\Paygate\Paygate;

use Apploud\Paygate\Order\IOrder;

interface IPaygate
{

	public function createPayment(IOrder $order, string $returnUrl, string $notificationUrl): IPaymentInfo;

	public function getPaymentInfo(int $paymentId): IPaymentInfo;

	public function refundPayment(int $paymentId, IOrder $order): string;

}
