<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class Payment extends Model
{
	protected $fillable = [
		'order_id',
		'number',
		'transaction_id',
		'amount',
		'method',
		'status',
		'token',
		'payloads',
		'payment_type',
		'va_number',
		'vendor_name',
		'biller_code',
		'bill_key',
	];

	public const PAYMENT_CHANNELS = ['credit_card', 'mandiri_clickpay', 'cimb_clicks',
	'bca_klikbca', 'bca_klikpay', 'bri_epay', 'echannel', 'permata_va',
	'bca_va', 'bni_va', 'other_va', 'gopay', 'indomaret',
	'danamon_online', 'akulaku'];

	public const EXPIRY_DURATION = 3;
	public const EXPIRY_UNIT = 'hours';


	public const CHALLENGE = 'challenge';
	public const SUCCESS = 'success';
	public const SETTLEMENT = 'settlement';
	public const PENDING = 'pending';
	public const DENY = 'deny';
	public const EXPIRE = 'expire';
	public const CANCEL = 'cancel';


	public const PAYMENTCODE = 'PAY';

    public static function generateCode(){
        $order= book_return::all();

        $transaction_details = array(
            'order_id' => rand(),
            'gross_amount' =>$order->Jumlah_Denda, // no decimal allowed for creditcard
        );
        $token = this->['order_id'];

    }
}
