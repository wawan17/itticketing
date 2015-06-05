<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LDAP
 *
 * @author wawan.setiawan
 */
class Ldap {

    protected $_ci;

    public function __construct() {
        $this->_ci = & get_instance();
        $this->_ci->load->config('ldap');
    }

    public function get_entries() {
        $ldap_connection = ldap_connect($this->_ci->config->item('ldap_server'));
        if (FALSE === $ldap_connection) {
            die("<p>Failed to connect to the LDAP server: " . $this->config->item('ldap_server') . "</p>");
        }

        ldap_set_option($ldap_connection, LDAP_OPT_PROTOCOL_VERSION, 3) or die('Unable to set LDAP protocol version');
        ldap_set_option($ldap_connection, LDAP_OPT_REFERRALS, 0); // We need this for doing an LDAP search.

        if (TRUE !== ldap_bind($ldap_connection, $this->_ci->config->item('ldapus'), $this->_ci->config->item('ldapp'))) {
            die('<p>Failed to bind to LDAP server.</p>');
        }

        $ldap_base_dn = $this->_ci->config->item('ldap_base_dn');
        $search_filter = "(&(objectCategory=person))";
        $result = ldap_search($ldap_connection, $ldap_base_dn, $search_filter);
        if (FALSE !== $result) {
            $entries = ldap_get_entries($ldap_connection, $result);
            return $entries;
        }
        ldap_unbind($ldap_connection); // Clean up after ourselves.  
    }
    
    public function auth($username, $password) {
        $server = $this->_ci->config->item('ldap_server');
        $port = $this->_ci->config->item('ldap_port');
        $user_prefix = $this->_ci->config->item('user_prefix');
        $user_suffix = $this->_ci->config->item('user_suffix');
        $dc = $this->_ci->config->item('dc');

        $conn = ldap_connect($server, $port) or die('Can\'t connect to ' . $server);

        if ($conn) {
            $bind = ldap_bind($conn, $user_prefix . $username . $user_suffix . '@' . $dc, $password);
            if ($bind) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }

    // search ldap for given user
    // if found return entries (as array), else return null
    public function info($username) {
        $ds = $this->_ci->config->item('ds');
        //$server = $this->_ci->config->item('ldap_server'); //using domain, If the DC is down DNS will route to another DC.
        //$user_prefix = $this->_ci->config->item('user_prefix'); //checking for domain.
        //$user_suffix = $this->_ci->config->item('user_suffix');
        $dc = $this->_ci->config->item('dc');
        $sr = ldap_search($ds, $dc, "(&(objectCategory=user)(samAccountName=$username))");
        $info = null;
        if ($sr) {
            $info = ldap_get_entries($ds, $sr);
        }
        return $info;
    }

    //END info
    public function user_info ($username) {
        $ldap_connection = ldap_connect($this->_ci->config->item('ldap_server'));
        if (FALSE === $ldap_connection) {
            die("<p>Failed to connect to the LDAP server: " . $this->config->item('ldap_server') . "</p>");
        }

        ldap_set_option($ldap_connection, LDAP_OPT_PROTOCOL_VERSION, 3) or die('Unable to set LDAP protocol version');
        ldap_set_option($ldap_connection, LDAP_OPT_REFERRALS, 0); // We need this for doing an LDAP search.

        if (TRUE !== ldap_bind($ldap_connection, $this->_ci->config->item('ldapus'), $this->_ci->config->item('ldapp'))) {
            die('<p>Failed to bind to LDAP server.</p>');
        }

        $ldap_base_dn = $this->_ci->config->item('ldap_base_dn');
        $search_filter = "(&(objectCategory=person)(samAccountName=$username))";
        $result = ldap_search($ldap_connection, $ldap_base_dn, $search_filter);
        if (FALSE !== $result) {
            $entries = ldap_get_entries($ldap_connection, $result);
            return $entries;
        }
        ldap_unbind($ldap_connection); // Clean up after ourselves.  
    }
}
