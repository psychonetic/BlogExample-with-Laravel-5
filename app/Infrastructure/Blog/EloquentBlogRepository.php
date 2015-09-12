<?php

namespace Blog\Infrastructure\Blog;
use Blog\Core\Repository;
use Blog\Domain\Blog\BlogRepository;


class EloquentBlogRepository extends Repository implements BlogRepository {

	/**
	 * Specify the Model
	 */

	public function model() {
		return '\Blog\Domain\Blog\EloquentBlog';
	}

}