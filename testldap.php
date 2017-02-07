<html>

  <head>

    <title>LDAP Test</title>

  </head>

  <body>

    <?php

 

// connect to ldap server

$ldapconn = ldap_connect("localhost")

    or die("Could not connect to LDAP server.");

 

// use ldap version V3 protocol 

if (ldap_set_option($ldapconn,LDAP_OPT_PROTOCOL_VERSION,3))

{

    echo "Using LDAP v3";

}else{

    echo "Failed to set version to protocol 3";

}

 

// using ldap bind

$ldaprdn  = "cn=manager,dc=designstudio1,dc=com";

$ldappass = "my*password";  // associated password

 

if ($ldapconn) {

 

    // binding to ldap server

    $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

 

    // verify binding

    if ($ldapbind) {

        echo "LDAP bind successful...</br>";
		print(date("m.d.y"));
		echo "</br> Brandon Ellis";

    } else {

        echo "LDAP bind failed...";

    }

}

?>

  </body>

</html>