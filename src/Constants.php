<?php

namespace FernleafSystems\ApiWrappers\StatusCake;

class Constants {

	public const TEST_TYPE_DNS = 'DNS';
	public const TEST_TYPE_HEAD = 'HEAD';
	public const TEST_TYPE_HTTP = 'HTTP';
	public const TEST_TYPE_PING = 'PING';
	public const TEST_TYPE_SMTP = 'SMTP';
	public const TEST_TYPE_SSH = 'SSH';
	public const TEST_TYPE_TCP = 'TCP';
	public const UPTIME_CHECK_RATE_0 = 0;
	public const UPTIME_CHECK_RATE_30S = 30;
	public const UPTIME_CHECK_RATE_60S = 60;
	public const UPTIME_CHECK_RATE_5M = 300;
	public const UPTIME_CHECK_RATE_15M = 900;
	public const UPTIME_CHECK_RATE_30M = 1800;
	public const UPTIME_CHECK_RATE_1H = 3600;
	public const UPTIME_CHECK_RATE_24H = 86400;
	public const UPTIME_STATUS_UP = 'up';
	public const UPTIME_STATUS_DOWN = 'down';
}
