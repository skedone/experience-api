<?php

/**
 * Copyright (c) 2014 Edoardo Biraghi
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 * 
 * @author   Edoardo Biraghi <edoardo.biraghi@gmail.com>
 */

namespace XApi\Model;

/**
 * A user account on an existing system.
 *
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class ContextActivities implements ContextActivitiesInterface
{
    /**
     * An Activity with a direct relation to the Activity which is the Object of the Statement.
     * @var Activity
     */
	protected $parent;

	protected $grouping;

	protected $category;

	protected $other;


	public function setParent(ActivityInterface $parent)
	{
		$this->parent = $parent;
		return $this;
	}

	public function getParent()
	{
		return $this->parent;
	}


}
