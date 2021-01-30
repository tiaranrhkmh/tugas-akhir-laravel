<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    //
	public const PAYMENT_CHANNELS = ['echannel'];

	public const EXPIRY_DURATION = 15;
	public const EXPIRY_UNIT = 'minutes';


	public const CHALLENGE = 'challenge';
	public const SUCCESS = 'success';
	public const SETTLEMENT = 'settlement';
	public const PENDING = 'pending';
	public const DENY = 'deny';
	public const EXPIRE = 'expire';
	public const CANCEL = 'cancel';


	public const PAYMENTCODE = 'PAY';
}
