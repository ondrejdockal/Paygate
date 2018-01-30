<?php

declare(strict_types = 1);

namespace Apploud\Paygate\Paygate;

interface IPaymentInfo
{

	public function getId(): string;

	public function getStatus(): string;

	public function getGatewayUrl(): ?string;

	public function getInstrument(): ?string;

	public function getFik(): ?string;

	public function getBkp(): ?string;

	public function getPkp(): ?string;

}
