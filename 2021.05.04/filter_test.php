<<?php
 if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL))
 {
 echo "E-Mail is not valid";
 }
 else
 {
 echo "E-Mail is valid";
 }
 ?> 