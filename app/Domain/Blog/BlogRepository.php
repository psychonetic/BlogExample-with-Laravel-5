<?php

namespace Blog\Domain\Blog;

interface BlogRepository {
	 
	public function all();
    
	public function find($id);

	public function create(array $attributes);
}