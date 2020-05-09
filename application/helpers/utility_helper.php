<?php 

/**
 * Return the path url of the assets file
 * @param string 
 * @return string
 */
function asset_url(){
	return base_url().'assets/';
}

/**
 * Redirect back
 * @param string
 * @return string
 */
function redirect_back()
{

    if(isset($_SERVER['HTTP_REFERER'])) {
        redirect($_SERVER['HTTP_REFERER']);
    }

    redirect(base_url());
}

/**
 * Select helper
 * @param string
 * @param string
 * @return string
 */
function select_helper($a, $b){
    return ($a == $b) ? 'selected' : false;
}