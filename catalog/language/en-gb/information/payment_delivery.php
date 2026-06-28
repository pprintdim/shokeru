<?php
$_['heading_title'] = 'Payment and delivery';
$_['meta_description'] = 'Payment and delivery information for Shokeru orders.';
$_['text_payment'] = 'Payment';
$_['text_delivery'] = 'Delivery';
$_['text_intro'] = 'Orders from 500 UAH are delivered for free. During checkout, the cart will show payment and delivery methods available for your city.';

$_['payment_methods'] = array(
	array(
		'title' => 'Online payment',
		'text'  => 'Pay by card right after placing the order. The payment is processed through a protected service.',
		'icon'  => 'online'
	),
	array(
		'title' => 'Payment on receipt',
		'text'  => 'You can pay at the branch or to the courier after checking the parcel.',
		'icon'  => 'card'
	),
	array(
		'title' => 'Invoice payment',
		'text'  => 'For business or wholesale orders, we prepare an invoice after confirmation.',
		'icon'  => 'invoice'
	)
);

$_['delivery_methods'] = array(
	array(
		'title' => 'Pickup',
		'text'  => 'After confirmation, the manager will tell you when the order is ready for pickup.',
		'icon'  => 'pickup'
	),
	array(
		'title' => 'Nova Poshta',
		'text'  => 'We ship to a branch, parcel locker, or by courier to the customer address.',
		'icon'  => 'nova_poshta'
	),
	array(
		'title' => 'Address delivery',
		'text'  => 'For available cities, you can choose delivery straight to your door during checkout.',
		'icon'  => 'courier'
	)
);
