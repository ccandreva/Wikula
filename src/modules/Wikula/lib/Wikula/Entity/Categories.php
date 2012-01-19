<?php

/**
 * Copyright Wikula Team 2011
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license GNU/GPLv3 (or at your option, any later version).
 * @package Wikula
 * @link https://github.com/phaidon/Wikula
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

use Doctrine\ORM\Mapping as ORM;

/**
 * Wikula links entity class.
 *
 * Annotations define the entity mappings to database.
 *
 * @package Wikula
 * @ORM\Entity
 * @ORM\Table(name="wikula_categories")
 */
class Wikula_Entity_Categories extends Zikula_EntityAccess
{
    
      
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=75)
     */
    private $tag;
    
    /**
     * @ORM\Id
     * @ORM\Column(type="string", length=75)
     */
    private $category;
    
    /**
     * Get tag
     * 
     * @return string
     */
    public function gettag()
    {
        return $this->tag;
    }
    
    /**
     * Set tag
     * 
     * @param string
     */
    public function settag($tag)
    {
        $this->tag = $tag;
    }
    
    /**
     * Get category
     * 
     * @return string
     */
    public function getcategory()
    {
        return $this->category;
    }
    
    /**
     * Set category
     * 
     * @param string
     */
    public function setcategory($category)
    {
        $this->category = $category;
    }

}