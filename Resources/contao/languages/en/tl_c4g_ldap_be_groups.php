<?php
/**
 * This file is part of con4gis,
 * the gis-kit for Contao CMS.
 *
 * @package     con4gis
 * @version     7
 * @author      con4gis contributors (see "authors.txt")
 * @license     LGPL-3.0-or-later
 * @copyright   Küstenschmiede GmbH Software & Design
 * @link        https://www.con4gis.org
 *
 */
/** Field Labels */
$GLOBALS['TL_LANG']['tl_c4g_ldap_be_groups']['ldap'] = 'LDAP settings';
$GLOBALS['TL_LANG']['tl_c4g_ldap_be_groups']['filter'] = array('Filter', 'This can be used to filter which groups should be available for import. (example: (&(objectClass=group)) )');
$GLOBALS['TL_LANG']['tl_c4g_ldap_be_groups']['groups'] = array('Available groups');
$GLOBALS['TL_LANG']['tl_c4g_ldap_be_groups']['adminGroup'] = array('Admin group', 'Select the group for which an admin access is to be created. This group does NOT need to be imported.');

$GLOBALS['TL_LANG']['tl_c4g_ldap_be_groups']['infotext'] = 'The groups are updated each time these settings are saved. The groups are assigned to the users at each login. If the filter is changed, groups that no longer exist are automatically deleted.';

/** Error Messages */
$GLOBALS['TL_LANG']['tl_c4g_ldap_be_groups']['bindError'] = 'No connection to the LDAP server could be established.';