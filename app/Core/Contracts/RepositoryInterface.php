<?php

namespace Blog\Core\Contracts;

interface RepositoryInterface {

	
	
	public function all($columns = array('*'));

	public function find($id, $columns = ['*']);

	public function create(array $attributes);

	public function update(array $attributes, $id);

	public function delete($id);

}