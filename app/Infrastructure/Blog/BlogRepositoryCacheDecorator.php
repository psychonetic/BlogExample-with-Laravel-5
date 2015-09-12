<?php

namespace Blog\Infrastructure\Blog;
use Blog\Domain\BlogRepository;

class BlogRepositoryCacheDecorator  implements BlogRepository {

	/**
	 * The cache
	 */
	
	protected $cache;

	public function __construct()

}