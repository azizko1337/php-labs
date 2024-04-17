<?php
require_once 'init.php';

getRouter()->setDefaultRoute('loanShow'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

getRouter()->addRoute('loanShow',    'LoanCtrl',  ['user','admin']);
getRouter()->addRoute('loanCompute', 'LoanCtrl',  ['user','admin']);
getRouter()->addRoute('login',       'LoginCtrl');
getRouter()->addRoute('logout',      'LoginCtrl', ['user','admin']);

getRouter()->go();