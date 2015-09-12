<?php

namespace Blog\Domain\Blog;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider {

	/**
	 *	Bind the Repository and its interface to the IOC from Laravel.
	 * 
	 */


	public function register() 
	{
		$this->app->bind(
			'Blog\Domain\Blog\BlogRepository', 
			'Blog\Infrastructure\Blog\EloquentBlogRepository'
		);
	}
}