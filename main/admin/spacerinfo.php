<?php
/**
 * @package Plugin Geo Deals for Joomla! 3.8
 * @version 1.0.0
 * @author HikeOrders
 * @copyright (C) 2019 - HikeOrders.
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html; see LICENSE.txt
 * @website https://hikeorders.com/geodeals/home
 **/

// No direct access.
defined('_JEXEC') or die('Direct access to this location is not allowed.');

jimport('joomla.form.formfield');

class JFormFieldSpacerinfo extends JFormField 
{
    protected $type = 'Spacerinfo';

    public function getLabel()
    {
        $output = "";
        $output .= '
              <br /><br /><br />
             <hr />
             <div style="text-align: center">
                 <img src="../plugins/system/geodeals/main/images/icon.png" style="display: block; width: 70px; margin: auto;" /> <br /><br />
                 <a target="_blank" class="btn btn-small button-apply btn-success" href="https://geodeals.hikeorders.com/user/login?utm_source=joomla-plugin&utm_medium=open-dashboard&utm_campaign=joomla-app-setup">Open Dashboard</a>
             </div>
        ';
        return $output;
    }

    public function getInput()
    {
        $output = "";
        $output .= '<style type="text/css"> .steps li{ line-height: 25px !important;  }</style>';

        $output .= '
            <br /><br /><br />
            <hr style="    margin-top: 23px;" />
             <h4>Step by step guide to get this app working </h4>
               <ol class="steps" >
                <li>
                Create an Geo Deals account :  <a target="_blank" href="https://geodeals.hikeorders.com/user/register?utm_source=joomla-plugin&utm_medium=create-account&utm_campaign=joomla-app-setup">Get Started </a>
                </li>

                <li>
                Go through the on-boarding process. It\'s Just 4 step process
                </li>

                <li>
                The on-boarding process gives you an widget Id. Copy-Paste in above text box and save it. 
                </li>

                <li>
                Go back to on-boarding process and verify your installation.
          
                </li>

                <li>
                That\'s it done. Go to your site front-end and you will see Geo Deals widget.
                </li>

               </ol>

               <div style="margin-top: 10px; line-height: 30px;">
                    <strong>Pricing and Free Trial </strong>: <a href="https://hikeorders.com/geodeals/pricing?utm_source=joomla-plugin&utm_medium=about-plugin&utm_campaign=joomla-app-setup" target="_blank">https://hikeorders.com/geodeals/pricing/</a> <br />
                    <strong>Website</strong>: <a href="https://hikeorders.com/geodeals/home/?utm_source=joomla-plugin&utm_medium=about-plugin&utm_campaign=joomla-app-setup" target="_blank">https://hikeorders.com/geodeals/home/</a> <br />
                    <strong>Support</strong>: <a href="mailto:team@hikeorders.com">team@hikeorders.com</a> <br />
               </div>
        
        
        ';
		
		

        return $output;
    }
}


