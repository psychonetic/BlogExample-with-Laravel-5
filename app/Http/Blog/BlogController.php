<?php

namespace Blog\Http\Blog;
use Blog\Core\Controller;
use Blog\Domain\Blog\BlogRepository;
use Blog\Domain\Blog\BlogRequest;


class BlogController extends Controller {

	
	/**
	 * The BlogRepository instance.
	 *
	 * @var Blog\Infrastructure\Blog\EloquentBlogRepository
	 * 
	 */
	private $repository;

	/**
	 * Creates a new controller instance and injects the repository.
	 * 
	 * @return  void
	 */

	public function __construct(BlogRepository $repo) 
	{	
		$this->repository = $repo;
	}
	

	/**
	 * Get all blog entries.
	 *	
	 * 
	 * @return 	Response [description]
	 */
	
	public function getIndex() 
	{
		return view('blog.index')->with('entries', $this->repository->all());
	}

	/**
	 *	Gets a specific blog entry.
	 *
	 * @param  	int $id 
	 * @return  Response
	 */

	public function getShow($id)
	{
		return view('blog.show')->with('entry', $this->repository->find($id));
	}


	/**
	 * Creates new entry.
	 *
	 * @return Response
	 * 
	 */

	public function getCreate() 
	{
		return view('blog.create');
	}

	/**
	 * Stores an entry.
	 *
	 * @param 	Blogrequest $request
	 * @return  Response 
	 * 
	 */

	public function postStore(BlogRequest $request) 
	{
		$repo->create($request->all());
		return \Redirect::route('blog.index');
	}
}