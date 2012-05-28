<?php
/**
 * @version     $Id: html.php 3024 2011-10-09 01:44:30Z johanjanssens $
 * @category    Nooku
 * @package     Nooku_Server
 * @subpackage  Users
 * @copyright   Copyright (C) 2011 - 2012 Timble CVBA and Contributors. (http://www.timble.net).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.nooku.org
 */

/**
 * Users Module Html View Class
 *
 * @author      Johan Janssens <http://nooku.assembla.com/profile/johanjanssens>
 * @category    Nooku
 * @package     Nooku_Server
 * @subpackage  Users
 */
 
class ModLoggedHtml extends ModDefaultHtml
{
    public function display()
    { 
        $this->users = $this->getService('com://admin/users.model.users')->loggedin(1)->limit(10)->getList(); 
        return parent::display();
    }
} 