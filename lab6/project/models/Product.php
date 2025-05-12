<?php
	namespace Project\Models;
	use \Core\Model;
	
	class Product extends Model
	{
		public function getById($id)
		{
			return $this->findOne("SELECT * FROM products WHERE id=$id");
		}
		
		public function getAll()
		{
			return $this->findMany("SELECT id, name FROM products");
		}
	}