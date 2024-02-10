<?php
use Core\Authenticator;

(new Authenticator)->logout();
redirectAndExit('/');
