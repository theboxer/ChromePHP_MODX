<?php
/**
 * ChromePHP
 *
 * Copyright 2010 by Shaun McCormick <shaun+chromephp@modx.com>
 *
 * ChromePHP is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ChromePHP is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ChromePHP; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package chromephp
 */
/**
 * Properties for the ChromePHP snippet.
 *
 * @package chromephp
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'tpl',
        'desc' => 'prop_chromephp.tpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'Item',
        'lexicon' => 'chromephp:properties',
    ),
    array(
        'name' => 'sortBy',
        'desc' => 'prop_chromephp.sortby_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'name',
        'lexicon' => 'chromephp:properties',
    ),
    array(
        'name' => 'sortDir',
        'desc' => 'prop_chromephp.sortdir_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'ASC',
        'lexicon' => 'chromephp:properties',
    ),
    array(
        'name' => 'limit',
        'desc' => 'prop_chromephp.limit_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 5,
        'lexicon' => 'chromephp:properties',
    ),
    array(
        'name' => 'outputSeparator',
        'desc' => 'prop_chromephp.outputseparator_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'chromephp:properties',
    ),
    array(
        'name' => 'toPlaceholder',
        'desc' => 'prop_chromephp.toplaceholder_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => true,
        'lexicon' => 'chromephp:properties',
    ),
/*
    array(
        'name' => '',
        'desc' => 'prop_chromephp.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'chromephp:properties',
    ),
    */
);

return $properties;