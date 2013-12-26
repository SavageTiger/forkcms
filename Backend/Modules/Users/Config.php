<?php

namespace Backend\Modules\Users;

/*
 * This file is part of Fork CMS.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

/**
 * This is the configuration-object for the users module
 *
 * @author Tijs Verkoyen <tijs@sumocoders.be>
 */
class BackendUsersConfig extends BackendBaseConfig
{
    /**
     * The default action
     *
     * @var	string
     */
    protected $defaultAction = 'index';

    /**
     * The disabled actions
     *
     * @var	array
     */
    protected $disabledActions = array();

    /**
     * The disabled AJAX-actions
     *
     * @var	array
     */
    protected $disabledAJAXActions = array();

    /**
     * The linked actions
     *
     * @var	array
     */
    protected $linkedAjaxActions = array();
}
