<?php
$signup = "<nav id=\"yo\">
                <ul>
                    <li id=\"register\">
                        <a id=\"register-trigger\">
                            Sign Up <span>&#x25BC;</span>
                        </a>
                        <div id=\"register-content\">
                            <form>
                                <fieldset id=\"inputs\">\
                                    <input id=\"username\" type=\"email\" name=\"Email\" placeholder=\"Your email address\" required>   
                                    <input id=\"password\" type=\"password\" name=\"Password\" placeholder=\"Password\" required>
                                    <input id=\"password\" type=\"password\" name=\"Password\" placeholder=\"Confirm Password\" required>
                                </fieldset>
                                <fieldset id=\"actions\">
                                    <input type=\"submit\" id=\"submit\" value=\"Sign Up\">
                                </fieldset>
                            </form>
                        </div>                     
                    </li>
                </ul>
            </nav>
            ";
            //echo $signup;

            $login = "<nav id=\"yo\">
                <ul>
                    <li id=\"login\">
                        <a id=\"login-trigger\">
                            Log in <span>&#x25BC;</span>
                        </a>
                        <div id=\"login-content\">
                            <form action=\"loginform.php\" method=\"post\">
                                <fieldset id=\"inputs\">
                                    <input id=\"username\" type=\"email\" name=\"Email\" placeholder=\"Your email address\" required>   
                                    <input id=\"password\" type=\"password\" name=\"Password\" placeholder=\"Password\" required>
                                </fieldset>
                                <fieldset id=\"actions\">
                                    <input type=\"submit\" id=\"submit\" value=\"Log in\" style=\"width:240px;align:center;\">
                                    <br/>
                                    <br/>
                                    <div id=\"social buttons\">
                                      <a id=\"fbbutton\" class=\"btn btn-block btn-social btn-facebook\" onclick=\"FB.login();\" style=\"background:#3b5998; border:none; color:#fff; text-shadow:2px 2px #000; vertical-align:middle; float:left;\">
                                      <i class=\"fa fa-facebook\"></i> Sign in with Facebook
                                      </a>
                                      <br/>
                                      <br/>
                                      <div id=\"gSignInWrapper\">
                                        <div id=\"customBtn\" class=\"customGPlusSignIn\">
                                          <a class=\"btn btn-block btn-social btn-google-plus\" style=\"background:#dd4b39;border:none; color:#fff; text-shadow:2px 2px #000; vertical-align:middle; float:left;\">
                                          <i class=\"fa fa-google-plus\"></i> Sign in with Google
                                          </a>
                                        </div>
                                      </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>                     
                    </li>
                </ul>
            </nav>
            ";
            echo $signup . $login;
?>