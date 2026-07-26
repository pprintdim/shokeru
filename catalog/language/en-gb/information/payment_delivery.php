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

// New design — extra sections
$_['text_free_badge']   = 'Free delivery from 500 UAH';
$_['text_payment_sub']  = 'Choose a convenient option — everything works right after checkout';
$_['text_delivery_sub'] = 'We work with all popular carriers across Ukraine';
$_['text_steps_title']  = 'How it works';
$_['text_steps_sub']    = 'From cart to delivery — four simple steps';
$_['steps'] = array(
  array('title' => 'Order',        'text' => 'Add the item to the cart and fill in the form'),
  array('title' => 'Confirmation', 'text' => 'A manager will contact you within 15 minutes'),
  array('title' => 'Shipping',     'text' => 'We pack and hand it over to the courier'),
  array('title' => 'Delivery',     'text' => 'Check the parcel and pay if needed'),
);
$_['text_info_title'] = 'Processing times';
$_['text_info_text']  = 'Orders placed before 3 PM are shipped the same day. Later orders go the next business day.';
$_['text_faq_title']  = 'FAQ';
$_['faqs'] = array(
  array('question' => 'Can I return an item?',        'answer' => 'Yes, within 14 days per consumer protection law — provided the item and packaging are intact.'),
  array('question' => 'How much is delivery?',        'answer' => 'Orders from 500 UAH ship free. Under 500 UAH — at the carrier rates.'),
  array('question' => 'Do you ship same day?',        'answer' => 'Yes, if the order is confirmed before 3 PM. Later orders ship the next business day.'),
  array('question' => 'Do you offer wholesale prices?','answer' => 'Yes. Wholesale orders get an individual discount — contact a manager.'),
);
$_['text_cta_title'] = 'Still have questions?';
$_['text_cta_text']  = 'Our managers are here to help with choice and checkout';
