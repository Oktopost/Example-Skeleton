<?php
namespace Example;


use Skeleton\ConfigLoader\DirectoryConfigLoader;
use Skeleton\Skeleton;


class Common
{
	/** @var Skeleton */
	private static $skeleton = null;
	
	
	private static function configureSkeleton()
	{
		self::$skeleton = new Skeleton();
		
		// This will enable the dependencies auto loading feature.
		self::$skeleton->enableKnot();
		
		// This will enable the config auto loading.
		self::$skeleton
			->setConfigLoader(
				new DirectoryConfigLoader(realpath(__DIR__ . '/../../skeleton'))
			);
	}
	
	
	/**
	 * @param string|null $interface
	 * @return mixed|Skeleton
	 */
	public static function skeleton($interface = null)
	{
		if (!self::$skeleton)
		{
			self::configureSkeleton();
		}
		
		if ($interface)
		{
			return self::$skeleton->get($interface);
		}
		
		return self::$skeleton;
	}
}