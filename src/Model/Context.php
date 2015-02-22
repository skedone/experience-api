<?php

/**
 * Copyright (c) 2014 Shareworks Solutions B.V.
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

class Context implements ContextInterface
{
    /**
     * Instructor that the Statement relates to, if not included as the Actor of the Statement.
     * @var AgentInterface
     */
    protected $instructor;

    /**
     * A map of the types of learning activity context that this Statement is related to. 
     * Valid context types are: "parent", "grouping", "category" and "other".
     * @var Object
     */
    protected $contextActivities;

    /**
     * @var Object
     */
    protected $extensions;

    public function setInstructor(AgentInterface $instructor)
    {
    	$this->instructor = $instructor;
    	return $this;
    }

    public function getInstructor()
    {
    	return $this->instructor;
    }

    public function setContextActivities($contextActivities)
    {
    	$this->contextActivities = $contextActivities;
    	return $this;
    }

    public function getContextActivities()
    {
    	return $this->contextActivities;
    }

    public function setExtensions($extensions)
    {
        $this->extensions = $extensions;
        return $this;
    }

    public function getExtensions()
    {
        return $this->extensions;
    }

}