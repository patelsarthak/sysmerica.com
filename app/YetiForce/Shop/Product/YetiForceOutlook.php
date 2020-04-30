<?php
/**
 * YetiForce shop YetiForceOutlook file.
 *
 * @package   App
 *
 * @copyright YetiForce Sp. z o.o
 * @license   YetiForce Public License 3.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */

namespace App\YetiForce\Shop\Product;

/**
 * YetiForce shop YetiForceOutlook class.
 */
class YetiForceOutlook extends \App\YetiForce\Shop\AbstractBaseProduct
{
	/**
	 * {@inheritdoc}
	 */
	public $label = 'YetiForce Outlook Integration Panel (Beta)';
	/**
	 * {@inheritdoc}
	 */
	public $prices = [
		'Micro' => 20,
		'Small' => 50,
		'Medium' => 100,
		'Large' => 250,
		'Corporation' => 500,
	];

	/**
	 * {@inheritdoc}
	 */
	public $featured = true;

	/**
	 * {@inheritdoc}
	 */
	public function verify($cache = true): bool
	{
		return true;
	}
}
