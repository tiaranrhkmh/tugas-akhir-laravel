<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    //
	public const PAYMENT_CHANNELS = ["credit_card", "mandiri_clickpay", "cimb_clicks",
    "bca_klikbca", "bca_klikpay", "bri_epay", "telkomsel_cash", "echannel",
    "indosat_dompetku", "mandiri_ecash", "permata_va", "bca_va",
    "bni_va", "other_va", "kioson", "indomaret", "gci", "danamon_online"];

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
