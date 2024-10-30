<?php
/*
Plugin Name: Comment Spamtrap
Plugin URI: http://wordpress.org/extend/plugins/comment-spamtrap/
Description: Adds 2 input fields hidden from browser by CSS to detect spam bots that autofill all text fields
Version: 1.0.2
Author: Rob Mills
Author URI: http://www.seengee.co.uk/comment-spamtrap

Copyright 2010  Rob Mills  (email : seengee@seengee.co.uk)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


class CommentSpamtrap
{
    var $sitevar;

    function CommentSpamtrap()
    {
        $this->sitevar = str_replace(" ","",get_bloginfo());
        add_action('comment_form', array($this,'addSpamTrap'));
        add_filter('pre_comment_approved', array($this, 'checkSpamTrap'));
    }

    function addSpamTrap($postid) {
        echo '
        <input type="text" name="'.$this->sitevar.'_var_thanks" value="thanks" style="display:none;" />
        <input type="text" name="'.$this->sitevar.'_var_sorry" value="" style="display:none;" />
        ';
    }

    function checkSpamTrap($isspam) {
        if (!empty($_POST[$this->sitevar.'_var_sorry']) || $_POST[$this->sitevar.'_var_thanks'] != 'thanks') {
            $isspam = 'spam';
        }
        return $isspam;
    }
}

$sp = new CommentSpamtrap();