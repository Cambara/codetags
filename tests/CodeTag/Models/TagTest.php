<?php

namespace Cambara\CodeTag\Tests\Models;

use Cambara\CodeTag\Models\Tag;
use Cambara\CodeTag\Tests\AbstractTestCase;

class TagTest extends AbstractTestCase
{
	
	public function setUp()
	{
		parent::setUp();
		$this->migrate();
	}

	public function test_check_if_a_tag_persisted_and_find()
	{
		$tag = Tag::create(['name' => 'cars']);
		$this->assertEquals('cars', $tag->name);
		
		$tag = Tag::all()->first();
		$this->assertEquals('cars', $tag->name);
	}
}