<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Homepage of Niko Rosvall - Secure password generator</title>
        <style>

         #page {
             width: 1024px;
             margin: 0 auto;
             font-family: "DejaVu Sans Mono", "Liberation Mono", Monospace;
         }
        
         #passwords {
             padding: 20px;
             border: 1px solid black;
             background-color: #FFFFCC;
             font-size: 1.3em;
         }

         #one-password {
             padding: 6px;
         }

         pre {
             font-size: 1.1em;
         }
         
        </style>
    </head>
    <body>
        <div id="page">
          
            <h1>Secure passwords</h1>

            <?php
            require_once "random/random.php";

            function random_password($length) {

                $keys = '0123456789?)(/%#!?)=ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
                $keys_max = strlen($keys) - 1;
                $pass = '';
                
                for ($index = 0; $index < $length; $index++) {
                    $pass .= $keys[random_int(0, $keys_max)];
                }
                
                return $pass;
            }

            ?>

            <div id="passwords">
                <?php

                for ($index = 0; $index < 10; $index++)
                    echo '<div id="one-password">' . random_password(20) . "</div>";


                ?>
            </div>

            <p>
                <input type="button" value="Refresh" onClick="document.location.reload(true)">
            </p>

            <p>
                This page is created by <a href="https://www.byteptr.com/">Niko Rosvall</a>.
                Passwords are generated with PHP by using cryptographically secure pseudo-random
                integers (random_int). There's nothing special in the code, here it is (public domain):
            </p>
            <pre>
               function random_password($length) {

                $keys = '0123456789?)(/%#!?)=ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
                $keys_max = strlen($keys) - 1;
                $pass = '';
                
                for ($index = 0; $index < $length; $index++) {
                    $pass .= $keys[random_int(0, $keys_max)];
                }
                
                return $pass;
            }
            </pre>
            <p>
                If you're really interestedin hacking this page, it's also available on <a href="https://github.com/nrosvall/sp">Github</a>.
            </p>
            <hr>
            <p>
                Copyright &copy; 2018 Niko Rosvall
            </p>
        </div>
    </body>
</html>
