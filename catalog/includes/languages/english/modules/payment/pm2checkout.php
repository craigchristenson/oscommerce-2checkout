<?php
/*
  $Id: pm2checkout.php,v 1.3 2002/11/18 14:45:23 project3000 Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_2CHECKOUT_TEXT_TITLE', '2Checkout');
  define('MODULE_PAYMENT_2CHECKOUT_CC_TEXT', "&nbsp;%s%s%s%s%s%s");
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_DESCRIPTION', 'Use a random 15 or 16-digit CC# number in test mode');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_TYPE', 'Type:');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_CREDIT_CARD_OWNER', 'Credit Card Owner:');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_CREDIT_CARD_OWNER_FIRST_NAME', 'Credit Card Owner First Name:');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_CREDIT_CARD_OWNER_LAST_NAME', 'Credit Card Owner Last Name:');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_CREDIT_CARD_NUMBER', 'Credit Card Number:');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_CREDIT_CARD_EXPIRES', 'Credit Card Expiry Date:');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_CREDIT_CARD_CHECKNUMBER', 'Credit Card Checknumber:');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(located at the back of the credit card)');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_JS_CC_NUMBER', '* The credit card number must be at least ' . CC_NUMBER_MIN_LENGTH . ' characters.\n');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_ERROR_MESSAGE', 'There has been an error processing your credit card. Please try again.');
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_ERROR_HASH_MESSAGE', 'Your payment seems to come from other site then 2CheckOut . Please do not continue the checkout procedure AND contact us!');  
  define('MODULE_PAYMENT_2CHECKOUT_TEXT_ERROR', 'Credit Card Error!');

  define('MODULE_PAYMENT_2CHECKOUT_CURRENCY_CONVERSITION', ' - Prices will be converted to US Dollars on confirmation.');
?>