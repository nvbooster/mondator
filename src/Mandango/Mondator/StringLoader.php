<?php

namespace Mandango\Mondator;

	/*
	 * This file is part of Twig.
	 *
	 * (c) 2009 Fabien Potencier
	 *
	 * For the full copyright and license information, please view the LICENSE
	 * file that was distributed with this source code.
	 */

/**
 * Loads a template from a string.
 *
 * This loader should NEVER be used. It only exists for Twig internal purposes.
 *
 * When using this loader with a cache mechanism, you should know that a new cache
 * key is generated each time a template content "changes" (the cache key being the
 * source code of the template). If you don't want to see your cache grows out of
 * control, you need to take care of clearing the old cache file by yourself.
 *
 * @deprecated since 1.18.1 (to be removed in 2.0)
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class StringLoader implements \Twig_LoaderInterface
{
	/**
	 * {@inheritdoc}
	 */
	public function getSource($name)
	{
		return $name;
	}

	/**
	 * {@inheritdoc}
	 */
	public function exists($name)
	{
		return true;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getCacheKey($name)
	{
		return $name;
	}

	/**
	 * {@inheritdoc}
	 */
	public function isFresh($name, $time)
	{
		return true;
	}
}