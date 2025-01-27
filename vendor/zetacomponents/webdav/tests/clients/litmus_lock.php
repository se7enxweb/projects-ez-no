<?php

return array (
  2 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE, Keep-Alive',
        'HTTP_TE' => 'trailers',
        'HTTP_X_LITMUS' => 'basic: 1 (begin)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Authorization failed.',
      'headers' => 
      array (
        'WWW-Authenticate' => 
        array (
          'basic' => 'Basic realm="eZ Components WebDAV"',
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  3 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE, Keep-Alive',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/", response="72647a5023de69d15696fa2a0cb401ed", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'basic: 1 (begin)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/", response="72647a5023de69d15696fa2a0cb401ed", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  4 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/", response="0ce2d32bfa2b4c5103c5b1943526747c", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'basic: 1 (begin)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/", response="0ce2d32bfa2b4c5103c5b1943526747c", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  5 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'OPTIONS',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/", response="3ba56e1d79650748b72c9aa9ca5d068e", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'basic: 2 (options)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/", response="3ba56e1d79650748b72c9aa9ca5d068e", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'DAV' => '1, 2',
        'Allow' => 'GET, HEAD, PROPFIND, PROPPATCH, OPTIONS, DELETE, COPY, MOVE, MKCOL, PUT, LOCK, UNLOCK',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  6 => 
  array (
    'request' => 
    array (
      'body' => 'This is
a test file.
for litmus
testing.
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '41',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/res',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/res',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/res',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/res',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '41',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/res", response="ef0f9dbb2668ba977bafa7f857a898cf", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'basic: 3 (put_get)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/res',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/res", response="ef0f9dbb2668ba977bafa7f857a898cf", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '44175eb61c5d59d37803ff7826e91b7a',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  7 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/res',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/res',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/res',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/res',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/res", response="ff4b51ef94ed38e728d363c3252e0d32", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'basic: 3 (put_get)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/res',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/res", response="ff4b51ef94ed38e728d363c3252e0d32", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'This is
a test file.
for litmus
testing.
',
      'headers' => 
      array (
        'ETag' => '44175eb61c5d59d37803ff7826e91b7a',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  8 => 
  array (
    'request' => 
    array (
      'body' => 'This is
a test file.
for litmus
testing.
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '41',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/res-€',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/res-€',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/res-%e2%82%ac',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/res-%e2%82%ac',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '41',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/res-%e2%82%ac", response="87a207c12fb30abc45443b358bd1187c", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'basic: 4 (put_get_utf8_segment)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/res-€',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/res-%e2%82%ac", response="87a207c12fb30abc45443b358bd1187c", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '06e933a87b6c93205dce44415d9735c9',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  9 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/res-€',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/res-€',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/res-%e2%82%ac',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/res-%e2%82%ac',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'GET',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/res-%e2%82%ac", response="32e2c76997f136622a0117c013f3d72d", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'basic: 4 (put_get_utf8_segment)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/res-€',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/res-%e2%82%ac", response="32e2c76997f136622a0117c013f3d72d", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'This is
a test file.
for litmus
testing.
',
      'headers' => 
      array (
        'ETag' => '06e933a87b6c93205dce44415d9735c9',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  10 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/409me/noparent.txt/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/409me/noparent.txt/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/409me/noparent.txt/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/409me/noparent.txt/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/409me/noparent.txt/", response="e988d3864c6ae10ecf5b9ba4a393474d", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'basic: 5 (put_no_parent)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/409me/noparent.txt/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/409me/noparent.txt/", response="e988d3864c6ae10ecf5b9ba4a393474d", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 409 Conflict',
    ),
  ),
  11 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/res-€/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/res-€/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/res-%e2%82%ac/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/res-%e2%82%ac/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/res-%e2%82%ac/", response="3c7a2761a33a55678e7781c03c34f2d5", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'basic: 6 (mkcol_over_plain)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/res-€/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/res-%e2%82%ac/", response="3c7a2761a33a55678e7781c03c34f2d5", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 405 Method Not Allowed',
    ),
  ),
  12 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/res-€',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/res-€',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/res-%e2%82%ac',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/res-%e2%82%ac',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/res-%e2%82%ac", response="b7cbe93922bee67b34f3f6377710e5bc", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'basic: 7 (delete)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/res-€',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/res-%e2%82%ac", response="b7cbe93922bee67b34f3f6377710e5bc", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  13 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/404me',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/404me',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/404me',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/404me',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/404me", response="c9b57450d28d4dec46cb96b659a94cb1", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'basic: 8 (delete_null)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/404me',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/404me", response="c9b57450d28d4dec46cb96b659a94cb1", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  14 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/frag/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/frag/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/frag/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/frag/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/frag/", response="ebf9ad65fe026e4d475bd69aa3031cef", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'basic: 9 (delete_fragment)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/frag/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/frag/", response="ebf9ad65fe026e4d475bd69aa3031cef", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  15 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/frag/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/frag/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/frag/#ment',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/frag/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/frag/#ment", response="9ee6c883ea14e0ab8deb16a9e6103292", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'basic: 9 (delete_fragment)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/frag/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/frag/#ment", response="9ee6c883ea14e0ab8deb16a9e6103292", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  16 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/frag/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/frag/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/frag/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/frag/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/frag/", response="c39539a7660cbf17af4489a2d2db78e1", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'basic: 9 (delete_fragment)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/frag/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/frag/", response="c39539a7660cbf17af4489a2d2db78e1", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  17 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/coll/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/coll/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/coll/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/coll/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/coll/", response="8ddb1805693af2b7954a10cfa333f77b", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'basic: 10 (mkcol)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/coll/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/coll/", response="8ddb1805693af2b7954a10cfa333f77b", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  18 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/coll/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/coll/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/coll/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/coll/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/coll/", response="8ddb1805693af2b7954a10cfa333f77b", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'basic: 11 (mkcol_again)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/coll/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/coll/", response="8ddb1805693af2b7954a10cfa333f77b", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 405 Method Not Allowed',
    ),
  ),
  19 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/coll/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/coll/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/coll/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/coll/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/coll/", response="fea5f2229003f3dbb3249fc2f4f863de", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'basic: 12 (delete_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/coll/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/coll/", response="fea5f2229003f3dbb3249fc2f4f863de", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  20 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/409me/noparent/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/409me/noparent/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/409me/noparent/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/409me/noparent/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/409me/noparent/", response="22f5b8fed8c8e39c6608c86b8a9bad89", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'basic: 13 (mkcol_no_parent)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/409me/noparent/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/409me/noparent/", response="22f5b8fed8c8e39c6608c86b8a9bad89", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 409 Conflict',
    ),
  ),
  21 => 
  array (
    'request' => 
    array (
      'body' => 'afafafaf',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '8',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mkcolbody',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mkcolbody',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mkcolbody',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mkcolbody',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'CONTENT_TYPE' => 'xzy-foo/bar-512',
        'HTTP_CONTENT_LENGTH' => '8',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/mkcolbody", response="484371bf2186720be9af27c672d8f34c", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'basic: 14 (mkcol_with_body)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mkcolbody',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="79a113da34220ff95510e02e398a9415", uri="/secure_collection/litmus/mkcolbody", response="484371bf2186720be9af27c672d8f34c", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 415 Unsupported Media Type',
    ),
  ),
  22 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE, Keep-Alive',
        'HTTP_TE' => 'trailers',
        'HTTP_X_LITMUS' => 'copymove: 1 (begin)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Authorization failed.',
      'headers' => 
      array (
        'WWW-Authenticate' => 
        array (
          'basic' => 'Basic realm="eZ Components WebDAV"',
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  23 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE, Keep-Alive',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/", response="cf2300482c9a575169b684195593b488", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 1 (begin)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/", response="cf2300482c9a575169b684195593b488", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  24 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/", response="1f6455bb9693ba9b668e8c68880ec96c", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 1 (begin)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/", response="1f6455bb9693ba9b668e8c68880ec96c", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  25 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/copysrc',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/copysrc',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/copysrc',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/copysrc',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/copysrc", response="9f51217b4019645847d14b37b5b01f11", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 2 (copy_init)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/copysrc',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/copysrc", response="9f51217b4019645847d14b37b5b01f11", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '4d1325c64e5cf462a33309b65a38c868',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  26 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/copycoll/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/copycoll/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/copycoll/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/copycoll/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/copycoll/", response="c2c9f80b45ed25936670d4c85a4039bb", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 2 (copy_init)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/copycoll/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/copycoll/", response="c2c9f80b45ed25936670d4c85a4039bb", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  27 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/copysrc',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/copysrc',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/copysrc',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/copysrc',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/copydest',
        'HTTP_OVERWRITE' => 'F',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/copysrc", response="e76991bc142f2955bc9b8b1a0aebe69b", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 3 (copy_simple)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/copysrc',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/copysrc", response="e76991bc142f2955bc9b8b1a0aebe69b", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  28 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/copysrc',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/copysrc',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/copysrc',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/copysrc',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/copydest',
        'HTTP_OVERWRITE' => 'F',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/copysrc", response="e76991bc142f2955bc9b8b1a0aebe69b", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 4 (copy_overwrite)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/copysrc',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/copysrc", response="e76991bc142f2955bc9b8b1a0aebe69b", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 412 Precondition Failed',
    ),
  ),
  29 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/copysrc',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/copysrc',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/copysrc',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/copysrc',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/copydest',
        'HTTP_OVERWRITE' => 'T',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/copysrc", response="e76991bc142f2955bc9b8b1a0aebe69b", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 4 (copy_overwrite)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/copysrc',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/copysrc", response="e76991bc142f2955bc9b8b1a0aebe69b", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  30 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/copysrc',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/copysrc',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/copysrc',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/copysrc',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/copycoll/',
        'HTTP_OVERWRITE' => 'T',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/copysrc", response="e76991bc142f2955bc9b8b1a0aebe69b", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 4 (copy_overwrite)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/copysrc',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/copysrc", response="e76991bc142f2955bc9b8b1a0aebe69b", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  31 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/copysrc',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/copysrc',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/copysrc',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/copysrc',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/nonesuch/foo',
        'HTTP_OVERWRITE' => 'F',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/copysrc", response="e76991bc142f2955bc9b8b1a0aebe69b", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 5 (copy_nodestcoll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/copysrc',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/copysrc", response="e76991bc142f2955bc9b8b1a0aebe69b", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 409 Conflict',
    ),
  ),
  32 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/copysrc',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/copysrc',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/copysrc',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/copysrc',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/copysrc", response="056ac936fde9f8404bd8e603ef1056da", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 6 (copy_cleanup)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/copysrc',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/copysrc", response="056ac936fde9f8404bd8e603ef1056da", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  33 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/copydest',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/copydest',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/copydest',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/copydest',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/copydest", response="4a76ec1902b84e811b0f93ab84d4c625", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 6 (copy_cleanup)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/copydest',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/copydest", response="4a76ec1902b84e811b0f93ab84d4c625", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  34 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/copycoll',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/copycoll',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/copycoll',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/copycoll',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/copycoll", response="e3bbfa58916b2756bee2de2f95bd7166", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 6 (copy_cleanup)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/copycoll',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/copycoll", response="e3bbfa58916b2756bee2de2f95bd7166", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  35 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/copycoll/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/copycoll/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/copycoll/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/copycoll/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/copycoll/", response="0d42d20cba9cd04b13a2797b6ac45acc", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 6 (copy_cleanup)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/copycoll/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/copycoll/", response="0d42d20cba9cd04b13a2797b6ac45acc", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  36 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccsrc/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccsrc/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccsrc/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccsrc/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/", response="6edd4ee03a06d70b8e7e332cc62704cd", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccsrc/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/", response="6edd4ee03a06d70b8e7e332cc62704cd", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  37 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccsrc/foo.0',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccsrc/foo.0',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccsrc/foo.0',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccsrc/foo.0',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/foo.0", response="9976716a5e46ad8e8f17db2ccc9a45ea", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccsrc/foo.0',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/foo.0", response="9976716a5e46ad8e8f17db2ccc9a45ea", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'b13013f87db0ab9a14d28a3a5026715c',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  38 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccsrc/foo.1',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccsrc/foo.1',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccsrc/foo.1',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccsrc/foo.1',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/foo.1", response="50b66d1a694b0cee270578ee56515dd2", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccsrc/foo.1',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/foo.1", response="50b66d1a694b0cee270578ee56515dd2", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'cf36789987f452120fcd5b9db3c2dd86',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  39 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccsrc/foo.2',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccsrc/foo.2',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccsrc/foo.2',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccsrc/foo.2',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/foo.2", response="459c0a3a1874ef073daf3a3a34499bb7", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccsrc/foo.2',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/foo.2", response="459c0a3a1874ef073daf3a3a34499bb7", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '4369f5a48521d3826ec3d7436b2ac8f5',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  40 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccsrc/foo.3',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccsrc/foo.3',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccsrc/foo.3',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccsrc/foo.3',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/foo.3", response="30a669729b040633ea19ef2d43ac655c", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccsrc/foo.3',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/foo.3", response="30a669729b040633ea19ef2d43ac655c", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '66ca212bee3d00de66d8270778ae5d95',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  41 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccsrc/foo.4',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccsrc/foo.4',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccsrc/foo.4',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccsrc/foo.4',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/foo.4", response="2b2b046b13624b36e9c229f45425b4cd", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccsrc/foo.4',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/foo.4", response="2b2b046b13624b36e9c229f45425b4cd", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '7106c952281b335a81d72b7cea237d8d',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  42 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccsrc/foo.5',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccsrc/foo.5',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccsrc/foo.5',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccsrc/foo.5',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/foo.5", response="ca49503eb93a16ce2d8c91ac75f0dd8a", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccsrc/foo.5',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/foo.5", response="ca49503eb93a16ce2d8c91ac75f0dd8a", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '991398d90f4221a97f60104c4e816831',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  43 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccsrc/foo.6',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccsrc/foo.6',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccsrc/foo.6',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccsrc/foo.6',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/foo.6", response="e3ca737a9340295f39f0aab2e96b7953", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccsrc/foo.6',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/foo.6", response="e3ca737a9340295f39f0aab2e96b7953", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '1535a94ec67bb1499c692316aa73cbba',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  44 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccsrc/foo.7',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccsrc/foo.7',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccsrc/foo.7',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccsrc/foo.7',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/foo.7", response="7b8915f391c0cbd0701d8cae4a81ccaf", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccsrc/foo.7',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/foo.7", response="7b8915f391c0cbd0701d8cae4a81ccaf", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '3ed93079551387c94413a3f8ce128efb',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  45 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccsrc/foo.8',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccsrc/foo.8',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccsrc/foo.8',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccsrc/foo.8',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/foo.8", response="2a1ccec41188e01460d26a3ca8e947a1", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccsrc/foo.8',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/foo.8", response="2a1ccec41188e01460d26a3ca8e947a1", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '9c128b9dd4522b09dd81374e8b59b3cf',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  46 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccsrc/foo.9',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccsrc/foo.9',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccsrc/foo.9',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccsrc/foo.9',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/foo.9", response="e7ab44c70c1b1e4e7fdbf03a36b8c049", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccsrc/foo.9',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/foo.9", response="e7ab44c70c1b1e4e7fdbf03a36b8c049", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '9f3c6d9f9a6351ad4908f7cfc45a113a',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  47 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccsrc/subcoll/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccsrc/subcoll/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccsrc/subcoll/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccsrc/subcoll/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/subcoll/", response="a41b4471b25506abe3718a2c9fbf8847", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccsrc/subcoll/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/subcoll/", response="a41b4471b25506abe3718a2c9fbf8847", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  48 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccdest/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccdest/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccdest/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccdest/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/", response="a1896f329013135a04e921a2f22df499", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccdest/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/", response="a1896f329013135a04e921a2f22df499", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  49 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccdest2/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccdest2/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccdest2/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccdest2/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest2/", response="98b998a795a485887129e8f2a7827189", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccdest2/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest2/", response="98b998a795a485887129e8f2a7827189", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  50 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccsrc/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccsrc/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccsrc/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccsrc/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/ccdest/',
        'HTTP_OVERWRITE' => 'F',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/", response="3c5adf6ecdea9bbfbc3abbb79f9171f2", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccsrc/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/", response="3c5adf6ecdea9bbfbc3abbb79f9171f2", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  51 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccsrc/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccsrc/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccsrc/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccsrc/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/ccdest2/',
        'HTTP_OVERWRITE' => 'F',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/", response="3c5adf6ecdea9bbfbc3abbb79f9171f2", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccsrc/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/", response="3c5adf6ecdea9bbfbc3abbb79f9171f2", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  52 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccdest/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccdest/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccdest/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccdest/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/ccdest2/',
        'HTTP_OVERWRITE' => 'F',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/", response="5754472d7ffa121058905ec760becdcc", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccdest/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/", response="5754472d7ffa121058905ec760becdcc", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 412 Precondition Failed',
    ),
  ),
  53 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccdest2/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccdest2/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccdest2/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccdest2/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/ccdest/',
        'HTTP_OVERWRITE' => 'T',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest2/", response="a7df3a54300e6d6b142df13f6301dac9", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccdest2/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest2/", response="a7df3a54300e6d6b142df13f6301dac9", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  54 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccsrc/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccsrc/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccsrc/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccsrc/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/", response="1189c88a89d47e67abdb0980f119f92a", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccsrc/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/", response="1189c88a89d47e67abdb0980f119f92a", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  55 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccdest/foo.0',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccdest/foo.0',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccdest/foo.0',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccdest/foo.0',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/foo.0", response="e1f42b9f6c7917691c0e499e4cf2c4f1", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccdest/foo.0',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/foo.0", response="e1f42b9f6c7917691c0e499e4cf2c4f1", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  56 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccdest/foo.1',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccdest/foo.1',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccdest/foo.1',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccdest/foo.1',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/foo.1", response="caeb6da25b1464d083ad1a4a1d7fdf78", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccdest/foo.1',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/foo.1", response="caeb6da25b1464d083ad1a4a1d7fdf78", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  57 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccdest/foo.2',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccdest/foo.2',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccdest/foo.2',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccdest/foo.2',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/foo.2", response="1e740e0c1c0de2c341534bb014c8afb1", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccdest/foo.2',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/foo.2", response="1e740e0c1c0de2c341534bb014c8afb1", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  58 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccdest/foo.3',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccdest/foo.3',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccdest/foo.3',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccdest/foo.3',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/foo.3", response="f65e2f1e2e167e08588631997112813c", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccdest/foo.3',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/foo.3", response="f65e2f1e2e167e08588631997112813c", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  59 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccdest/foo.4',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccdest/foo.4',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccdest/foo.4',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccdest/foo.4',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/foo.4", response="67e490208afe6d5808a79342823cb412", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccdest/foo.4',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/foo.4", response="67e490208afe6d5808a79342823cb412", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  60 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccdest/foo.5',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccdest/foo.5',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccdest/foo.5',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccdest/foo.5',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/foo.5", response="90019fde39bfe04ae3a46a4c20acb6eb", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccdest/foo.5',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/foo.5", response="90019fde39bfe04ae3a46a4c20acb6eb", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  61 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccdest/foo.6',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccdest/foo.6',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccdest/foo.6',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccdest/foo.6',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/foo.6", response="db3a7f9a74164f1c5eee52d17883f4bb", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccdest/foo.6',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/foo.6", response="db3a7f9a74164f1c5eee52d17883f4bb", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  62 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccdest/foo.7',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccdest/foo.7',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccdest/foo.7',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccdest/foo.7',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/foo.7", response="72b7edc6be43141be74c29317a8d74ea", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccdest/foo.7',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/foo.7", response="72b7edc6be43141be74c29317a8d74ea", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  63 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccdest/foo.8',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccdest/foo.8',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccdest/foo.8',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccdest/foo.8',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/foo.8", response="4a35e53f97bcee9f23381c147435fc42", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccdest/foo.8',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/foo.8", response="4a35e53f97bcee9f23381c147435fc42", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  64 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccdest/foo.9',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccdest/foo.9',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccdest/foo.9',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccdest/foo.9',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/foo.9", response="a02d50e7368e61e3fd8d86cf37e34a82", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccdest/foo.9',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/foo.9", response="a02d50e7368e61e3fd8d86cf37e34a82", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  65 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccdest/subcoll/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccdest/subcoll/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccdest/subcoll/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccdest/subcoll/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/subcoll/", response="ee5d17e29b21b2e9388da31936279768", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccdest/subcoll/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/subcoll/", response="ee5d17e29b21b2e9388da31936279768", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  66 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccdest2/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccdest2/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccdest2/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccdest2/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest2/", response="98b998a795a485887129e8f2a7827189", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccdest2/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest2/", response="98b998a795a485887129e8f2a7827189", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  67 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccdest/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccdest/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccdest/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccdest/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/", response="a1896f329013135a04e921a2f22df499", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 7 (copy_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccdest/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/", response="a1896f329013135a04e921a2f22df499", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  68 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccsrc/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccsrc/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccsrc/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccsrc/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/", response="6edd4ee03a06d70b8e7e332cc62704cd", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 8 (copy_shallow)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccsrc/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/", response="6edd4ee03a06d70b8e7e332cc62704cd", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  69 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccsrc/foo',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccsrc/foo',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccsrc/foo',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccsrc/foo',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/foo", response="1c3c093f61cad7e5d1233a22a9c739a2", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 8 (copy_shallow)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccsrc/foo',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/foo", response="1c3c093f61cad7e5d1233a22a9c739a2", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'ffba400ab448987e283d7f7171dc7abd',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  70 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccdest/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccdest/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccdest/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccdest/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/", response="a1896f329013135a04e921a2f22df499", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 8 (copy_shallow)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccdest/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/", response="a1896f329013135a04e921a2f22df499", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  71 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccsrc/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccsrc/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccsrc/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccsrc/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/ccdest/',
        'HTTP_OVERWRITE' => 'F',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/", response="3c5adf6ecdea9bbfbc3abbb79f9171f2", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 8 (copy_shallow)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccsrc/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/", response="3c5adf6ecdea9bbfbc3abbb79f9171f2", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  72 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccsrc/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccsrc/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccsrc/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccsrc/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/", response="1189c88a89d47e67abdb0980f119f92a", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 8 (copy_shallow)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccsrc/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccsrc/", response="1189c88a89d47e67abdb0980f119f92a", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  73 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/foo',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/foo',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/foo',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/foo',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/foo", response="d54dfef965a280a877549671ba3141bd", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 8 (copy_shallow)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/foo',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/foo", response="d54dfef965a280a877549671ba3141bd", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  74 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/ccdest/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/ccdest/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/ccdest/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/ccdest/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/", response="a1896f329013135a04e921a2f22df499", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 8 (copy_shallow)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/ccdest/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/ccdest/", response="a1896f329013135a04e921a2f22df499", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  75 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/move',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/move',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/move',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/move',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/move", response="f0f2199ece89c67159edb351a485ae14", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 9 (move)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/move',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/move", response="f0f2199ece89c67159edb351a485ae14", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '857cfc6ed91de32ea0efaf80e4d9ec3e',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  76 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/move2',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/move2',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/move2',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/move2',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/move2", response="670049986781774929b0e4637e019621", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 9 (move)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/move2',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/move2", response="670049986781774929b0e4637e019621", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '537dcae574f03b5cbbffbc4410bc97c0',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  77 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/movecoll/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/movecoll/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/movecoll/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/movecoll/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/movecoll/", response="3950a4464671aa4277de7e034ad08e1e", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 9 (move)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/movecoll/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/movecoll/", response="3950a4464671aa4277de7e034ad08e1e", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  78 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/move',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/move',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/move',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/move',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/movedest',
        'HTTP_OVERWRITE' => 'F',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/move", response="53427dfc2e5ae21a634d4f7067ac2f0c", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 9 (move)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/move',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/move", response="53427dfc2e5ae21a634d4f7067ac2f0c", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  79 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/move2',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/move2',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/move2',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/move2',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/movedest',
        'HTTP_OVERWRITE' => 'F',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/move2", response="049ea097d68463dafeac0ef9bd5c42f6", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 9 (move)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/move2',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/move2", response="049ea097d68463dafeac0ef9bd5c42f6", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 412 Precondition Failed',
    ),
  ),
  80 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/move2',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/move2',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/move2',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/move2',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/movedest',
        'HTTP_OVERWRITE' => 'T',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/move2", response="049ea097d68463dafeac0ef9bd5c42f6", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 9 (move)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/move2',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/move2", response="049ea097d68463dafeac0ef9bd5c42f6", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  81 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/movedest',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/movedest',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/movedest',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/movedest',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/movecoll/',
        'HTTP_OVERWRITE' => 'T',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/movedest", response="09fedd71ea55c640825ff27b1f2558a7", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 9 (move)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/movedest',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/movedest", response="09fedd71ea55c640825ff27b1f2558a7", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  82 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/movecoll',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/movecoll',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/movecoll',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/movecoll',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/movecoll", response="8b0025c38d7a53a053f1485a26d13809", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 9 (move)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/movecoll',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/movecoll", response="8b0025c38d7a53a053f1485a26d13809", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  83 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvsrc/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvsrc/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvsrc/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvsrc/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/", response="0b8e7538b3b592ebbc8d6725592a3e8d", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvsrc/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/", response="0b8e7538b3b592ebbc8d6725592a3e8d", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  84 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvsrc/foo.0',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvsrc/foo.0',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvsrc/foo.0',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvsrc/foo.0',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/foo.0", response="ce617c06b705e3eac3a2605742bc8c50", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvsrc/foo.0',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/foo.0", response="ce617c06b705e3eac3a2605742bc8c50", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '8fb8fe36390000586d641212924f9159',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  85 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvsrc/foo.1',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvsrc/foo.1',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvsrc/foo.1',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvsrc/foo.1',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/foo.1", response="30e0390bbdb882bfa8944f7d4aa94072", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvsrc/foo.1',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/foo.1", response="30e0390bbdb882bfa8944f7d4aa94072", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'a43c886c9b8b8a52fa9d9ae9d4e33f70',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  86 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvsrc/foo.2',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvsrc/foo.2',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvsrc/foo.2',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvsrc/foo.2',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/foo.2", response="a81b26155ccd22f4cb03a376bc6a7889", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvsrc/foo.2',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/foo.2", response="a81b26155ccd22f4cb03a376bc6a7889", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'a5d6796e685ce2cc313e16d3286ce9ec',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  87 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvsrc/foo.3',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvsrc/foo.3',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvsrc/foo.3',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvsrc/foo.3',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/foo.3", response="10e6a575644701cb9c8a46a9537c66a2", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvsrc/foo.3',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/foo.3", response="10e6a575644701cb9c8a46a9537c66a2", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '32e73a199b082894e522b06d3fb678cb',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  88 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvsrc/foo.4',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvsrc/foo.4',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvsrc/foo.4',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvsrc/foo.4',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/foo.4", response="071fe8584b70a3e6224fb20e44859551", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvsrc/foo.4',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/foo.4", response="071fe8584b70a3e6224fb20e44859551", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'dfa64616f97896969e04aa0a6015040d',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  89 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvsrc/foo.5',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvsrc/foo.5',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvsrc/foo.5',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvsrc/foo.5',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/foo.5", response="6a5efcd14e6dba3412bde2af6d3301f2", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvsrc/foo.5',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/foo.5", response="6a5efcd14e6dba3412bde2af6d3301f2", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '675dcfdcbffae9a7c3c63854530000d6',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  90 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvsrc/foo.6',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvsrc/foo.6',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvsrc/foo.6',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvsrc/foo.6',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/foo.6", response="f06537204f61f0b0bdcf02d11650ad2f", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvsrc/foo.6',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/foo.6", response="f06537204f61f0b0bdcf02d11650ad2f", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'a60570ca8210953a8c3438d81d8b3bf2',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  91 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvsrc/foo.7',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvsrc/foo.7',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvsrc/foo.7',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvsrc/foo.7',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/foo.7", response="018cc8baac5e9f667ea7876275b78e42", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvsrc/foo.7',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/foo.7", response="018cc8baac5e9f667ea7876275b78e42", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'e1d4346a9f79afa2363d8a9a1168855e',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  92 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvsrc/foo.8',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvsrc/foo.8',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvsrc/foo.8',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvsrc/foo.8',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/foo.8", response="273ada140974abc53977ac706eebdbd2", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvsrc/foo.8',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/foo.8", response="273ada140974abc53977ac706eebdbd2", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'ee2139ed51a145edeac1eb8fb5847451',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  93 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvsrc/foo.9',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvsrc/foo.9',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvsrc/foo.9',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvsrc/foo.9',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/foo.9", response="5bd7a5289a16f0c62f78a9397222dd5d", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvsrc/foo.9',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/foo.9", response="5bd7a5289a16f0c62f78a9397222dd5d", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '76a1b7d253e6487b4af20b10208482ad',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  94 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvnoncoll',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvnoncoll',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvnoncoll',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvnoncoll',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvnoncoll", response="1cc9a666b4ddbdb53ee864cab4dd7635", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvnoncoll',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvnoncoll", response="1cc9a666b4ddbdb53ee864cab4dd7635", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'a16dbefbbfff804fcd1975f937c67def',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  95 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvsrc/subcoll/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvsrc/subcoll/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvsrc/subcoll/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvsrc/subcoll/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/subcoll/", response="69b249938ec4f48470cf0b9dff260e17", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvsrc/subcoll/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/subcoll/", response="69b249938ec4f48470cf0b9dff260e17", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  96 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvsrc/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvsrc/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvsrc/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvsrc/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/mvdest2/',
        'HTTP_OVERWRITE' => 'F',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/", response="a75f661368ef7e3fcef834b32f09d151", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvsrc/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/", response="a75f661368ef7e3fcef834b32f09d151", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  97 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvsrc/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvsrc/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvsrc/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvsrc/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/mvdest/',
        'HTTP_OVERWRITE' => 'F',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/", response="5a733fcda8abed16ef04f6df6759a71f", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvsrc/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvsrc/", response="5a733fcda8abed16ef04f6df6759a71f", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  98 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvdest/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvdest/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvdest/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvdest/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/mvdest2/',
        'HTTP_OVERWRITE' => 'F',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/", response="8d42e4d51d09ce7225ea3f206e847cc4", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvdest/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/", response="8d42e4d51d09ce7225ea3f206e847cc4", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 412 Precondition Failed',
    ),
  ),
  99 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvdest2/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvdest2/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvdest2/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvdest2/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/mvdest/',
        'HTTP_OVERWRITE' => 'T',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest2/", response="f4f2b4fe62b84abf47f24f866afed076", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvdest2/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest2/", response="f4f2b4fe62b84abf47f24f866afed076", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  100 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvdest/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvdest/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvdest/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvdest/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/mvdest2/',
        'HTTP_OVERWRITE' => 'F',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/", response="37a62ed07f5e9eb504c94e025d24b92a", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvdest/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/", response="37a62ed07f5e9eb504c94e025d24b92a", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  101 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvdest/foo.0',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvdest/foo.0',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvdest/foo.0',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvdest/foo.0',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/foo.0", response="5f6e59c9037b569bc74e3808e51550b1", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvdest/foo.0',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/foo.0", response="5f6e59c9037b569bc74e3808e51550b1", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  102 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvdest/foo.1',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvdest/foo.1',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvdest/foo.1',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvdest/foo.1',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/foo.1", response="197fb19bfb370032451d1538d2e0922c", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvdest/foo.1',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/foo.1", response="197fb19bfb370032451d1538d2e0922c", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  103 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvdest/foo.2',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvdest/foo.2',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvdest/foo.2',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvdest/foo.2',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/foo.2", response="db1728eeac9e326ddd5ed94007fdeb4d", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvdest/foo.2',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/foo.2", response="db1728eeac9e326ddd5ed94007fdeb4d", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  104 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvdest/foo.3',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvdest/foo.3',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvdest/foo.3',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvdest/foo.3',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/foo.3", response="def0a6e1ad7c215e39c3184c6a00bcf6", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvdest/foo.3',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/foo.3", response="def0a6e1ad7c215e39c3184c6a00bcf6", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  105 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvdest/foo.4',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvdest/foo.4',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvdest/foo.4',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvdest/foo.4',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/foo.4", response="b9922ecc80af499b9dea7441131343b6", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvdest/foo.4',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/foo.4", response="b9922ecc80af499b9dea7441131343b6", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  106 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvdest/foo.5',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvdest/foo.5',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvdest/foo.5',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvdest/foo.5',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/foo.5", response="04795f1539fc5aa5eaf5af3ac08ba235", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvdest/foo.5',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/foo.5", response="04795f1539fc5aa5eaf5af3ac08ba235", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  107 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvdest/foo.6',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvdest/foo.6',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvdest/foo.6',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvdest/foo.6',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/foo.6", response="cd02ae0f4232864f4c0e7d73b5267448", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvdest/foo.6',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/foo.6", response="cd02ae0f4232864f4c0e7d73b5267448", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  108 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvdest/foo.7',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvdest/foo.7',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvdest/foo.7',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvdest/foo.7',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/foo.7", response="f4f5339f9708f9f190d15fc7dad2849e", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvdest/foo.7',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/foo.7", response="f4f5339f9708f9f190d15fc7dad2849e", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  109 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvdest/foo.8',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvdest/foo.8',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvdest/foo.8',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvdest/foo.8',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/foo.8", response="fe466706912d7fcf11cdba809b7f82fb", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvdest/foo.8',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/foo.8", response="fe466706912d7fcf11cdba809b7f82fb", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  110 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvdest/foo.9',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvdest/foo.9',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvdest/foo.9',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvdest/foo.9',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/foo.9", response="a164c457c479feac286ab612d6d2e192", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvdest/foo.9',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/foo.9", response="a164c457c479feac286ab612d6d2e192", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  111 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvdest/subcoll/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvdest/subcoll/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvdest/subcoll/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvdest/subcoll/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/subcoll/", response="7043ade59f305b50de5b14e999c491fc", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvdest/subcoll/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/subcoll/", response="7043ade59f305b50de5b14e999c491fc", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  112 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvdest2/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvdest2/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvdest2/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvdest2/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/mvnoncoll',
        'HTTP_OVERWRITE' => 'T',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest2/", response="f4f2b4fe62b84abf47f24f866afed076", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 10 (move_coll)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvdest2/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest2/", response="f4f2b4fe62b84abf47f24f866afed076", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  113 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvdest/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvdest/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvdest/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvdest/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/", response="2c936c3326e02baba233e89b5bd086a1", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 11 (move_cleanup)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvdest/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest/", response="2c936c3326e02baba233e89b5bd086a1", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  114 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvdest2/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvdest2/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvdest2/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvdest2/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest2/", response="e06c936be64ef701f17a723e19141316", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 11 (move_cleanup)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvdest2/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvdest2/", response="e06c936be64ef701f17a723e19141316", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  115 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/mvnoncoll',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/mvnoncoll',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/mvnoncoll',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/mvnoncoll',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvnoncoll", response="1fed37f2ac8ae8f86016d008f8147a88", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'copymove: 11 (move_cleanup)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/mvnoncoll',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="0dca0963da34f6d2648eb5b68f535c40", uri="/secure_collection/litmus/mvnoncoll", response="1fed37f2ac8ae8f86016d008f8147a88", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  116 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE, Keep-Alive',
        'HTTP_TE' => 'trailers',
        'HTTP_X_LITMUS' => 'props: 1 (begin)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Authorization failed.',
      'headers' => 
      array (
        'WWW-Authenticate' => 
        array (
          'basic' => 'Basic realm="eZ Components WebDAV"',
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  117 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE, Keep-Alive',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/", response="3a02ce9f6bf5eeedf751765bf1af3b5c", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 1 (begin)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/", response="3a02ce9f6bf5eeedf751765bf1af3b5c", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  118 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/", response="75bd36ccc1245d30e4d62a5dd78ff4c4", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 1 (begin)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/", response="75bd36ccc1245d30e4d62a5dd78ff4c4", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  119 => 
  array (
    'request' => 
    array (
      'body' => '<foo>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '5',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '5',
        'HTTP_DEPTH' => '0',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/", response="7b9af09372c96b820b82baaf33ff1794", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 2 (propfind_invalid)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/", response="7b9af09372c96b820b82baaf33ff1794", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'The HTTP request body received for HTTP method \'PROPFIND\' was invalid. Reason: Invalid XML. Libxml error.\'',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '106',
      ),
      'status' => 'HTTP/1.1 400 Bad Request',
    ),
  ),
  120 => 
  array (
    'request' => 
    array (
      'body' => '<D:propfind xmlns:D="DAV:"><D:prop><bar:foo xmlns:bar=""/></D:prop></D:propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '80',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '80',
        'HTTP_DEPTH' => '0',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/", response="7b9af09372c96b820b82baaf33ff1794", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 3 (propfind_invalid2)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/", response="7b9af09372c96b820b82baaf33ff1794", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/litmus/</D:href>
    <D:propstat>
      <D:prop>
        <foo/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  121 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<getcontentlength xmlns="DAV:"/>
<getlastmodified xmlns="DAV:"/>
<displayname xmlns="DAV:"/>
<resourcetype xmlns="DAV:"/>
<foo xmlns="http://example.com/neon/litmus/"/>
<bar xmlns="http://example.com/neon/litmus/"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '304',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '304',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/", response="7b9af09372c96b820b82baaf33ff1794", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 4 (propfind_d0)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/", response="7b9af09372c96b820b82baaf33ff1794", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://example.com/neon/litmus/">
    <D:href>http://webdav/secure_collection/litmus/</D:href>
    <D:propstat>
      <D:prop>
        <D:displayname>litmus</D:displayname>
        <D:getlastmodified>Mon, 15 Aug 2005 15:13:00 +0000</D:getlastmodified>
        <D:getcontentlength>4096</D:getcontentlength>
        <D:resourcetype>
          <D:collection/>
        </D:resourcetype>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://example.com/neon/litmus/">
      <D:prop>
        <default:foo xmlns="http://example.com/neon/litmus/"/>
        <default:bar xmlns="http://example.com/neon/litmus/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  122 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop", response="619ae425270729e1f3988e7f13300f75", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 5 (propinit)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop", response="619ae425270729e1f3988e7f13300f75", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  123 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop", response="f03d046df407d25ae9c8daba33500903", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 5 (propinit)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop", response="f03d046df407d25ae9c8daba33500903", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'a9122f1cbaca7df5bce4e997d84bdc74',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  124 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?>
<D:propertyupdate xmlns:D="DAV:"><D:set><D:prop><prop0 xmlns="http://example.com/neon/litmus/">value0</prop0></D:prop></D:set>
<D:set><D:prop><prop1 xmlns="http://example.com/neon/litmus/">value1</prop1></D:prop></D:set>
<D:set><D:prop><prop2 xmlns="http://example.com/neon/litmus/">value2</prop2></D:prop></D:set>
<D:set><D:prop><prop3 xmlns="http://example.com/neon/litmus/">value3</prop3></D:prop></D:set>
<D:set><D:prop><prop4 xmlns="http://example.com/neon/litmus/">value4</prop4></D:prop></D:set>
<D:set><D:prop><prop5 xmlns="http://example.com/neon/litmus/">value5</prop5></D:prop></D:set>
<D:set><D:prop><prop6 xmlns="http://example.com/neon/litmus/">value6</prop6></D:prop></D:set>
<D:set><D:prop><prop7 xmlns="http://example.com/neon/litmus/">value7</prop7></D:prop></D:set>
<D:set><D:prop><prop8 xmlns="http://example.com/neon/litmus/">value8</prop8></D:prop></D:set>
<D:set><D:prop><prop9 xmlns="http://example.com/neon/litmus/">value9</prop9></D:prop></D:set>
</D:propertyupdate>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '1033',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPPATCH',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '1033',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop", response="aef4b6ca90427840b731ee6deaf47e07", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 6 (propset)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop", response="aef4b6ca90427840b731ee6deaf47e07", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:response xmlns:D="DAV:">
  <D:href>http://webdav/secure_collection/litmus/prop</D:href>
  <D:propstat xmlns:ezc00000="http://example.com/neon/litmus/">
    <D:prop>
      <ezc00000:prop0 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop1 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop2 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop3 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop4 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop5 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop6 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop7 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop8 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop9 xmlns:ezc00000="http://example.com/neon/litmus/"/>
    </D:prop>
    <D:status>HTTP/1.1 200 OK</D:status>
  </D:propstat>
</D:response>
',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/xml; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  125 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<prop0 xmlns="http://example.com/neon/litmus/"/>
<prop1 xmlns="http://example.com/neon/litmus/"/>
<prop2 xmlns="http://example.com/neon/litmus/"/>
<prop3 xmlns="http://example.com/neon/litmus/"/>
<prop4 xmlns="http://example.com/neon/litmus/"/>
<prop5 xmlns="http://example.com/neon/litmus/"/>
<prop6 xmlns="http://example.com/neon/litmus/"/>
<prop7 xmlns="http://example.com/neon/litmus/"/>
<prop8 xmlns="http://example.com/neon/litmus/"/>
<prop9 xmlns="http://example.com/neon/litmus/"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '578',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '578',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop", response="1ee8474c9f620b980cb98f4953104ff3", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 7 (propget)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop", response="1ee8474c9f620b980cb98f4953104ff3", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://example.com/neon/litmus/">
    <D:href>http://webdav/secure_collection/litmus/prop</D:href>
    <D:propstat xmlns:default="http://example.com/neon/litmus/">
      <D:prop>
        <default:prop0 xmlns="http://example.com/neon/litmus/">value0</default:prop0>
        <default:prop1 xmlns="http://example.com/neon/litmus/">value1</default:prop1>
        <default:prop2 xmlns="http://example.com/neon/litmus/">value2</default:prop2>
        <default:prop3 xmlns="http://example.com/neon/litmus/">value3</default:prop3>
        <default:prop4 xmlns="http://example.com/neon/litmus/">value4</default:prop4>
        <default:prop5 xmlns="http://example.com/neon/litmus/">value5</default:prop5>
        <default:prop6 xmlns="http://example.com/neon/litmus/">value6</default:prop6>
        <default:prop7 xmlns="http://example.com/neon/litmus/">value7</default:prop7>
        <default:prop8 xmlns="http://example.com/neon/litmus/">value8</default:prop8>
        <default:prop9 xmlns="http://example.com/neon/litmus/">value9</default:prop9>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  126 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><propfind xmlns="DAV:"><foobar/><allprop/></propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '92',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '92',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop", response="1ee8474c9f620b980cb98f4953104ff3", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 8 (propextended)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop", response="1ee8474c9f620b980cb98f4953104ff3", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'The HTTP request body received for HTTP method \'PROPFIND\' was invalid. Reason: XML element <foobar /> is not a valid child element for <propfind />.',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '148',
      ),
      'status' => 'HTTP/1.1 400 Bad Request',
    ),
  ),
  127 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop2',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop2',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop2',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop2',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="5b54d60428d9079145b6ea0f15c8ed25", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 9 (propmove)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop2',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="5b54d60428d9079145b6ea0f15c8ed25", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  128 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/prop2',
        'HTTP_OVERWRITE' => 'F',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop", response="4b4223264ffdcd12713b273fabf60e82", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 9 (propmove)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop", response="4b4223264ffdcd12713b273fabf60e82", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  129 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<prop0 xmlns="http://example.com/neon/litmus/"/>
<prop1 xmlns="http://example.com/neon/litmus/"/>
<prop2 xmlns="http://example.com/neon/litmus/"/>
<prop3 xmlns="http://example.com/neon/litmus/"/>
<prop4 xmlns="http://example.com/neon/litmus/"/>
<prop5 xmlns="http://example.com/neon/litmus/"/>
<prop6 xmlns="http://example.com/neon/litmus/"/>
<prop7 xmlns="http://example.com/neon/litmus/"/>
<prop8 xmlns="http://example.com/neon/litmus/"/>
<prop9 xmlns="http://example.com/neon/litmus/"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '578',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop2',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop2',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop2',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop2',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '578',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="fb6c534b015d2fd50db23d3027f0c810", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 10 (propget)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop2',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="fb6c534b015d2fd50db23d3027f0c810", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://example.com/neon/litmus/">
    <D:href>http://webdav/secure_collection/litmus/prop2</D:href>
    <D:propstat xmlns:default="http://example.com/neon/litmus/">
      <D:prop>
        <default:prop0 xmlns="http://example.com/neon/litmus/">value0</default:prop0>
        <default:prop1 xmlns="http://example.com/neon/litmus/">value1</default:prop1>
        <default:prop2 xmlns="http://example.com/neon/litmus/">value2</default:prop2>
        <default:prop3 xmlns="http://example.com/neon/litmus/">value3</default:prop3>
        <default:prop4 xmlns="http://example.com/neon/litmus/">value4</default:prop4>
        <default:prop5 xmlns="http://example.com/neon/litmus/">value5</default:prop5>
        <default:prop6 xmlns="http://example.com/neon/litmus/">value6</default:prop6>
        <default:prop7 xmlns="http://example.com/neon/litmus/">value7</default:prop7>
        <default:prop8 xmlns="http://example.com/neon/litmus/">value8</default:prop8>
        <default:prop9 xmlns="http://example.com/neon/litmus/">value9</default:prop9>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  130 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?>
<D:propertyupdate xmlns:D="DAV:"><D:remove><D:prop><prop0 xmlns="http://example.com/neon/litmus/"></prop0></D:prop></D:remove>
<D:remove><D:prop><prop1 xmlns="http://example.com/neon/litmus/"></prop1></D:prop></D:remove>
<D:remove><D:prop><prop2 xmlns="http://example.com/neon/litmus/"></prop2></D:prop></D:remove>
<D:remove><D:prop><prop3 xmlns="http://example.com/neon/litmus/"></prop3></D:prop></D:remove>
<D:remove><D:prop><prop4 xmlns="http://example.com/neon/litmus/"></prop4></D:prop></D:remove>
<D:set><D:prop><prop5 xmlns="http://example.com/neon/litmus/">value5</prop5></D:prop></D:set>
<D:set><D:prop><prop6 xmlns="http://example.com/neon/litmus/">value6</prop6></D:prop></D:set>
<D:set><D:prop><prop7 xmlns="http://example.com/neon/litmus/">value7</prop7></D:prop></D:set>
<D:set><D:prop><prop8 xmlns="http://example.com/neon/litmus/">value8</prop8></D:prop></D:set>
<D:set><D:prop><prop9 xmlns="http://example.com/neon/litmus/">value9</prop9></D:prop></D:set>
</D:propertyupdate>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '1033',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop2',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop2',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop2',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop2',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPPATCH',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '1033',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="d6e5897fa2538223c313eae7991637bc", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 11 (propdeletes)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop2',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="d6e5897fa2538223c313eae7991637bc", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:response xmlns:D="DAV:">
  <D:href>http://webdav/secure_collection/litmus/prop2</D:href>
  <D:propstat xmlns:ezc00000="http://example.com/neon/litmus/">
    <D:prop>
      <ezc00000:prop0 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop1 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop2 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop3 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop4 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop5 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop6 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop7 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop8 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop9 xmlns:ezc00000="http://example.com/neon/litmus/"/>
    </D:prop>
    <D:status>HTTP/1.1 200 OK</D:status>
  </D:propstat>
</D:response>
',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/xml; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  131 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<prop0 xmlns="http://example.com/neon/litmus/"/>
<prop1 xmlns="http://example.com/neon/litmus/"/>
<prop2 xmlns="http://example.com/neon/litmus/"/>
<prop3 xmlns="http://example.com/neon/litmus/"/>
<prop4 xmlns="http://example.com/neon/litmus/"/>
<prop5 xmlns="http://example.com/neon/litmus/"/>
<prop6 xmlns="http://example.com/neon/litmus/"/>
<prop7 xmlns="http://example.com/neon/litmus/"/>
<prop8 xmlns="http://example.com/neon/litmus/"/>
<prop9 xmlns="http://example.com/neon/litmus/"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '578',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop2',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop2',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop2',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop2',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '578',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="fb6c534b015d2fd50db23d3027f0c810", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 12 (propget)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop2',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="fb6c534b015d2fd50db23d3027f0c810", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://example.com/neon/litmus/">
    <D:href>http://webdav/secure_collection/litmus/prop2</D:href>
    <D:propstat xmlns:default="http://example.com/neon/litmus/">
      <D:prop>
        <default:prop5 xmlns="http://example.com/neon/litmus/">value5</default:prop5>
        <default:prop6 xmlns="http://example.com/neon/litmus/">value6</default:prop6>
        <default:prop7 xmlns="http://example.com/neon/litmus/">value7</default:prop7>
        <default:prop8 xmlns="http://example.com/neon/litmus/">value8</default:prop8>
        <default:prop9 xmlns="http://example.com/neon/litmus/">value9</default:prop9>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://example.com/neon/litmus/">
      <D:prop>
        <default:prop0 xmlns="http://example.com/neon/litmus/"/>
        <default:prop1 xmlns="http://example.com/neon/litmus/"/>
        <default:prop2 xmlns="http://example.com/neon/litmus/"/>
        <default:prop3 xmlns="http://example.com/neon/litmus/"/>
        <default:prop4 xmlns="http://example.com/neon/litmus/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  132 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?>
<D:propertyupdate xmlns:D="DAV:"><D:remove><D:prop><prop0 xmlns="http://example.com/neon/litmus/"></prop0></D:prop></D:remove>
<D:remove><D:prop><prop1 xmlns="http://example.com/neon/litmus/"></prop1></D:prop></D:remove>
<D:remove><D:prop><prop2 xmlns="http://example.com/neon/litmus/"></prop2></D:prop></D:remove>
<D:remove><D:prop><prop3 xmlns="http://example.com/neon/litmus/"></prop3></D:prop></D:remove>
<D:remove><D:prop><prop4 xmlns="http://example.com/neon/litmus/"></prop4></D:prop></D:remove>
<D:set><D:prop><prop5 xmlns="http://example.com/neon/litmus/">newvalue5</prop5></D:prop></D:set>
<D:set><D:prop><prop6 xmlns="http://example.com/neon/litmus/">newvalue6</prop6></D:prop></D:set>
<D:set><D:prop><prop7 xmlns="http://example.com/neon/litmus/">newvalue7</prop7></D:prop></D:set>
<D:set><D:prop><prop8 xmlns="http://example.com/neon/litmus/">newvalue8</prop8></D:prop></D:set>
<D:set><D:prop><prop9 xmlns="http://example.com/neon/litmus/">newvalue9</prop9></D:prop></D:set>
</D:propertyupdate>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '1048',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop2',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop2',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop2',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop2',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPPATCH',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '1048',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="d6e5897fa2538223c313eae7991637bc", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 13 (propreplace)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop2',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="d6e5897fa2538223c313eae7991637bc", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:response xmlns:D="DAV:">
  <D:href>http://webdav/secure_collection/litmus/prop2</D:href>
  <D:propstat xmlns:ezc00000="http://example.com/neon/litmus/">
    <D:prop>
      <ezc00000:prop0 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop1 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop2 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop3 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop4 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop5 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop6 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop7 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop8 xmlns:ezc00000="http://example.com/neon/litmus/"/>
      <ezc00000:prop9 xmlns:ezc00000="http://example.com/neon/litmus/"/>
    </D:prop>
    <D:status>HTTP/1.1 200 OK</D:status>
  </D:propstat>
</D:response>
',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/xml; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  133 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<prop0 xmlns="http://example.com/neon/litmus/"/>
<prop1 xmlns="http://example.com/neon/litmus/"/>
<prop2 xmlns="http://example.com/neon/litmus/"/>
<prop3 xmlns="http://example.com/neon/litmus/"/>
<prop4 xmlns="http://example.com/neon/litmus/"/>
<prop5 xmlns="http://example.com/neon/litmus/"/>
<prop6 xmlns="http://example.com/neon/litmus/"/>
<prop7 xmlns="http://example.com/neon/litmus/"/>
<prop8 xmlns="http://example.com/neon/litmus/"/>
<prop9 xmlns="http://example.com/neon/litmus/"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '578',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop2',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop2',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop2',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop2',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '578',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="fb6c534b015d2fd50db23d3027f0c810", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 14 (propget)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop2',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="fb6c534b015d2fd50db23d3027f0c810", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://example.com/neon/litmus/">
    <D:href>http://webdav/secure_collection/litmus/prop2</D:href>
    <D:propstat xmlns:default="http://example.com/neon/litmus/">
      <D:prop>
        <default:prop5 xmlns="http://example.com/neon/litmus/">newvalue5</default:prop5>
        <default:prop6 xmlns="http://example.com/neon/litmus/">newvalue6</default:prop6>
        <default:prop7 xmlns="http://example.com/neon/litmus/">newvalue7</default:prop7>
        <default:prop8 xmlns="http://example.com/neon/litmus/">newvalue8</default:prop8>
        <default:prop9 xmlns="http://example.com/neon/litmus/">newvalue9</default:prop9>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
    <D:propstat xmlns:default="http://example.com/neon/litmus/">
      <D:prop>
        <default:prop0 xmlns="http://example.com/neon/litmus/"/>
        <default:prop1 xmlns="http://example.com/neon/litmus/"/>
        <default:prop2 xmlns="http://example.com/neon/litmus/"/>
        <default:prop3 xmlns="http://example.com/neon/litmus/"/>
        <default:prop4 xmlns="http://example.com/neon/litmus/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  136 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><propertyupdate xmlns=\'DAV:\'><set><prop><high-unicode xmlns=\'http://example.com/neon/litmus/\'>&#65536;</high-unicode></prop></set></propertyupdate>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '186',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop2',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop2',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop2',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop2',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPPATCH',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '186',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="d6e5897fa2538223c313eae7991637bc", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 17 (prophighunicode)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop2',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="d6e5897fa2538223c313eae7991637bc", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:response xmlns:D="DAV:">
  <D:href>http://webdav/secure_collection/litmus/prop2</D:href>
  <D:propstat xmlns:ezc00000="http://example.com/neon/litmus/">
    <D:prop>
      <ezc00000:high-unicode xmlns:ezc00000="http://example.com/neon/litmus/"/>
    </D:prop>
    <D:status>HTTP/1.1 200 OK</D:status>
  </D:propstat>
</D:response>
',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/xml; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  137 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<high-unicode xmlns="http://example.com/neon/litmus/"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '144',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop2',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop2',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop2',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop2',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '144',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="fb6c534b015d2fd50db23d3027f0c810", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 18 (propget)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop2',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="fb6c534b015d2fd50db23d3027f0c810", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://example.com/neon/litmus/">
    <D:href>http://webdav/secure_collection/litmus/prop2</D:href>
    <D:propstat xmlns:default="http://example.com/neon/litmus/">
      <D:prop>
        <default:high-unicode xmlns="http://example.com/neon/litmus/">𐀀</default:high-unicode>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  138 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><propertyupdate xmlns=\'DAV:\'><remove><prop><removeset xmlns=\'http://example.com/neon/litmus/\'/></prop></remove><set><prop><removeset xmlns=\'http://example.com/neon/litmus/\'>x</removeset></prop></set><set><prop><removeset xmlns=\'http://example.com/neon/litmus/\'>y</removeset></prop></set></propertyupdate>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '343',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop2',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop2',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop2',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop2',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPPATCH',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '343',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="d6e5897fa2538223c313eae7991637bc", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 19 (propremoveset)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop2',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="d6e5897fa2538223c313eae7991637bc", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:response xmlns:D="DAV:">
  <D:href>http://webdav/secure_collection/litmus/prop2</D:href>
  <D:propstat xmlns:ezc00000="http://example.com/neon/litmus/">
    <D:prop>
      <ezc00000:removeset xmlns:ezc00000="http://example.com/neon/litmus/"/>
    </D:prop>
    <D:status>HTTP/1.1 200 OK</D:status>
  </D:propstat>
</D:response>
',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/xml; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  139 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<removeset xmlns="http://example.com/neon/litmus/"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '141',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop2',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop2',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop2',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop2',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '141',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="fb6c534b015d2fd50db23d3027f0c810", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 20 (propget)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop2',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="fb6c534b015d2fd50db23d3027f0c810", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://example.com/neon/litmus/">
    <D:href>http://webdav/secure_collection/litmus/prop2</D:href>
    <D:propstat xmlns:default="http://example.com/neon/litmus/">
      <D:prop>
        <default:removeset xmlns="http://example.com/neon/litmus/">y</default:removeset>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  140 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><propertyupdate xmlns=\'DAV:\'><set><prop><removeset xmlns=\'http://example.com/neon/litmus/\'>x</removeset></prop></set><remove><prop><removeset xmlns=\'http://example.com/neon/litmus/\'/></prop></remove></propertyupdate>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '255',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop2',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop2',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop2',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop2',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPPATCH',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '255',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="d6e5897fa2538223c313eae7991637bc", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 21 (propsetremove)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop2',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="d6e5897fa2538223c313eae7991637bc", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:response xmlns:D="DAV:">
  <D:href>http://webdav/secure_collection/litmus/prop2</D:href>
  <D:propstat xmlns:ezc00000="http://example.com/neon/litmus/">
    <D:prop>
      <ezc00000:removeset xmlns:ezc00000="http://example.com/neon/litmus/"/>
    </D:prop>
    <D:status>HTTP/1.1 200 OK</D:status>
  </D:propstat>
</D:response>
',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/xml; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  141 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<removeset xmlns="http://example.com/neon/litmus/"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '141',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop2',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop2',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop2',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop2',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '141',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="fb6c534b015d2fd50db23d3027f0c810", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 22 (propget)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop2',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="fb6c534b015d2fd50db23d3027f0c810", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://example.com/neon/litmus/">
    <D:href>http://webdav/secure_collection/litmus/prop2</D:href>
    <D:propstat xmlns:default="http://example.com/neon/litmus/">
      <D:prop>
        <default:removeset xmlns="http://example.com/neon/litmus/"/>
      </D:prop>
      <D:status>HTTP/1.1 404 Not Found</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  142 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><propertyupdate xmlns=\'DAV:\'><set><prop><t:valnspace xmlns:t=\'http://example.com/neon/litmus/\'><foo xmlns=\'http://bar\'/></t:valnspace></prop></set></propertyupdate>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '203',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop2',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop2',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop2',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop2',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPPATCH',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '203',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="d6e5897fa2538223c313eae7991637bc", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 23 (propvalnspace)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop2',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="d6e5897fa2538223c313eae7991637bc", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:response xmlns:D="DAV:">
  <D:href>http://webdav/secure_collection/litmus/prop2</D:href>
  <D:propstat xmlns:ezc00000="http://example.com/neon/litmus/">
    <D:prop>
      <ezc00000:valnspace xmlns:ezc00000="http://example.com/neon/litmus/"/>
    </D:prop>
    <D:status>HTTP/1.1 200 OK</D:status>
  </D:propstat>
</D:response>
',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/xml; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  143 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?><propfind xmlns=\'DAV:\'><prop><valnspace xmlns=\'http://example.com/neon/litmus/\'/></prop></propfind>',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '138',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop2',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop2',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop2',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop2',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '138',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="fb6c534b015d2fd50db23d3027f0c810", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 24 (propwformed)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop2',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop2", response="fb6c534b015d2fd50db23d3027f0c810", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:t="http://example.com/neon/litmus/" xmlns:default="http://bar">
    <D:href>http://webdav/secure_collection/litmus/prop2</D:href>
    <D:propstat xmlns:t="http://example.com/neon/litmus/" xmlns:default="http://bar">
      <D:prop>
        <t:valnspace xmlns:t="http://example.com/neon/litmus/" xmlns:default="http://bar">
          <default:foo xmlns="http://bar"/>
        </t:valnspace>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  144 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop", response="619ae425270729e1f3988e7f13300f75", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 25 (propinit)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop", response="619ae425270729e1f3988e7f13300f75", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  145 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop", response="f03d046df407d25ae9c8daba33500903", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 25 (propinit)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop", response="f03d046df407d25ae9c8daba33500903", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'a9122f1cbaca7df5bce4e997d84bdc74',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  146 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?>
<D:propertyupdate xmlns:D="DAV:"><D:set><D:prop><somename xmlns="http://example.com/alpha">manynsvalue</somename></D:prop></D:set>
<D:set><D:prop><somename xmlns="http://example.com/beta">manynsvalue</somename></D:prop></D:set>
<D:set><D:prop><somename xmlns="http://example.com/gamma">manynsvalue</somename></D:prop></D:set>
<D:set><D:prop><somename xmlns="http://example.com/delta">manynsvalue</somename></D:prop></D:set>
<D:set><D:prop><somename xmlns="http://example.com/epsilon">manynsvalue</somename></D:prop></D:set>
<D:set><D:prop><somename xmlns="http://example.com/zeta">manynsvalue</somename></D:prop></D:set>
<D:set><D:prop><somename xmlns="http://example.com/eta">manynsvalue</somename></D:prop></D:set>
<D:set><D:prop><somename xmlns="http://example.com/theta">manynsvalue</somename></D:prop></D:set>
<D:set><D:prop><somename xmlns="http://example.com/iota">manynsvalue</somename></D:prop></D:set>
<D:set><D:prop><somename xmlns="http://example.com/kappa">manynsvalue</somename></D:prop></D:set>
</D:propertyupdate>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '1070',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPPATCH',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '1070',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop", response="aef4b6ca90427840b731ee6deaf47e07", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 26 (propmanyns)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop", response="aef4b6ca90427840b731ee6deaf47e07", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:response xmlns:D="DAV:">
  <D:href>http://webdav/secure_collection/litmus/prop</D:href>
  <D:propstat xmlns:ezc00000="http://example.com/alpha" xmlns:ezc00001="http://example.com/beta" xmlns:ezc00002="http://example.com/gamma" xmlns:ezc00003="http://example.com/delta" xmlns:ezc00004="http://example.com/epsilon" xmlns:ezc00005="http://example.com/zeta" xmlns:ezc00006="http://example.com/eta" xmlns:ezc00007="http://example.com/theta" xmlns:ezc00008="http://example.com/iota" xmlns:ezc00009="http://example.com/kappa">
    <D:prop>
      <ezc00000:somename xmlns:ezc00000="http://example.com/alpha"/>
      <ezc00001:somename xmlns:ezc00001="http://example.com/beta"/>
      <ezc00002:somename xmlns:ezc00002="http://example.com/gamma"/>
      <ezc00003:somename xmlns:ezc00003="http://example.com/delta"/>
      <ezc00004:somename xmlns:ezc00004="http://example.com/epsilon"/>
      <ezc00005:somename xmlns:ezc00005="http://example.com/zeta"/>
      <ezc00006:somename xmlns:ezc00006="http://example.com/eta"/>
      <ezc00007:somename xmlns:ezc00007="http://example.com/theta"/>
      <ezc00008:somename xmlns:ezc00008="http://example.com/iota"/>
      <ezc00009:somename xmlns:ezc00009="http://example.com/kappa"/>
    </D:prop>
    <D:status>HTTP/1.1 200 OK</D:status>
  </D:propstat>
</D:response>
',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/xml; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  147 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<somename xmlns="http://example.com/alpha"/>
<somename xmlns="http://example.com/beta"/>
<somename xmlns="http://example.com/gamma"/>
<somename xmlns="http://example.com/delta"/>
<somename xmlns="http://example.com/epsilon"/>
<somename xmlns="http://example.com/zeta"/>
<somename xmlns="http://example.com/eta"/>
<somename xmlns="http://example.com/theta"/>
<somename xmlns="http://example.com/iota"/>
<somename xmlns="http://example.com/kappa"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '535',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '535',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop", response="1ee8474c9f620b980cb98f4953104ff3", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 27 (propget)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop", response="1ee8474c9f620b980cb98f4953104ff3", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:default="http://example.com/alpha" xmlns:default1="http://example.com/beta" xmlns:default2="http://example.com/gamma" xmlns:default3="http://example.com/delta" xmlns:default4="http://example.com/epsilon" xmlns:default5="http://example.com/zeta" xmlns:default6="http://example.com/eta" xmlns:default7="http://example.com/theta" xmlns:default8="http://example.com/iota" xmlns:default9="http://example.com/kappa">
    <D:href>http://webdav/secure_collection/litmus/prop</D:href>
    <D:propstat xmlns:default="http://example.com/alpha" xmlns:default1="http://example.com/beta" xmlns:default2="http://example.com/gamma" xmlns:default3="http://example.com/delta" xmlns:default4="http://example.com/epsilon" xmlns:default5="http://example.com/zeta" xmlns:default6="http://example.com/eta" xmlns:default7="http://example.com/theta" xmlns:default8="http://example.com/iota" xmlns:default9="http://example.com/kappa">
      <D:prop>
        <default:somename xmlns="http://example.com/alpha">manynsvalue</default:somename>
        <default1:somename xmlns="http://example.com/beta">manynsvalue</default1:somename>
        <default2:somename xmlns="http://example.com/gamma">manynsvalue</default2:somename>
        <default3:somename xmlns="http://example.com/delta">manynsvalue</default3:somename>
        <default4:somename xmlns="http://example.com/epsilon">manynsvalue</default4:somename>
        <default5:somename xmlns="http://example.com/zeta">manynsvalue</default5:somename>
        <default6:somename xmlns="http://example.com/eta">manynsvalue</default6:somename>
        <default7:somename xmlns="http://example.com/theta">manynsvalue</default7:somename>
        <default8:somename xmlns="http://example.com/iota">manynsvalue</default8:somename>
        <default9:somename xmlns="http://example.com/kappa">manynsvalue</default9:somename>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  148 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/prop',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/prop',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/prop',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/prop',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop", response="619ae425270729e1f3988e7f13300f75", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'props: 28 (propcleanup)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/prop',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="1e3072bf71b90ad37a56ebbe7f5806ce", uri="/secure_collection/litmus/prop", response="619ae425270729e1f3988e7f13300f75", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  149 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE, Keep-Alive',
        'HTTP_TE' => 'trailers',
        'HTTP_X_LITMUS' => 'locks: 1 (begin)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Authorization failed.',
      'headers' => 
      array (
        'WWW-Authenticate' => 
        array (
          'basic' => 'Basic realm="eZ Components WebDAV"',
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  150 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE, Keep-Alive',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/", response="04da4d485ab262f3574336776c8244d5", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 1 (begin)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/", response="04da4d485ab262f3574336776c8244d5", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  151 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/", response="1445cfcafab6d5081422458e0bda7495", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 1 (begin)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/", response="1445cfcafab6d5081422458e0bda7495", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  152 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'OPTIONS',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/", response="e98b7a7c774cf303ccdf082b0ef15426", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 2 (options)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/", response="e98b7a7c774cf303ccdf082b0ef15426", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'DAV' => '1, 2',
        'Allow' => 'GET, HEAD, PROPFIND, PROPPATCH, OPTIONS, DELETE, COPY, MOVE, MKCOL, PUT, LOCK, UNLOCK',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  153 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="925056ba9423e063ee1840c43e86eb9c", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 5 (put)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="925056ba9423e063ee1840c43e86eb9c", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '97d24b068864526eda737927f9910618',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  154 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/notlocked',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/notlocked',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/notlocked',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/notlocked',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/notlocked", response="ca642c2f2ecf8baee05bd902136d61e9", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 5 (put)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/notlocked',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/notlocked", response="ca642c2f2ecf8baee05bd902136d61e9", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '6bf84aac44485ddfc27ee8acae94637b',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  155 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<lockinfo xmlns=\'DAV:\'>
 <lockscope><exclusive/></lockscope>
<locktype><write/></locktype><owner>litmus test suite</owner>
</lockinfo>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '174',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'LOCK',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '174',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_DEPTH' => '0',
        'HTTP_TIMEOUT' => 'Second-3600',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="8ae901167e3d05b4abd908aec61a636e", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 6 (lock_excl)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="8ae901167e3d05b4abd908aec61a636e", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:prop xmlns:D="DAV:">
  <D:lockdiscovery>
    <D:activelock xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">
      <D:locktype>
        <D:write/>
      </D:locktype>
      <D:lockscope>
        <D:exclusive/>
      </D:lockscope>
      <D:depth>0</D:depth>
      <D:owner>litmus test suite</D:owner>
      <D:timeout>Second-900</D:timeout>
      <D:locktoken>
        <D:href>opaquelocktoken:df10bd64-5784-6275-303e-fc68a28da90a</D:href>
      </D:locktoken>
      <ezclock:lastaccess xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">2010-03-20T11:22:40+01:00</ezclock:lastaccess>
    </D:activelock>
  </D:lockdiscovery>
</D:prop>
',
      'headers' => 
      array (
        'Lock-Token' => 'opaquelocktoken:df10bd64-5784-6275-303e-fc68a28da90a',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/xml; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  156 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<lockdiscovery xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '118',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '118',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="d4cc4f90fdb73aaf855215fe7937b44b", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 7 (discover)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="d4cc4f90fdb73aaf855215fe7937b44b", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">
    <D:href>http://webdav/secure_collection/litmus/lockme</D:href>
    <D:propstat xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">
      <D:prop>
        <D:lockdiscovery xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">
          <D:activelock xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">
            <D:locktype>
              <D:write/>
            </D:locktype>
            <D:lockscope>
              <D:exclusive/>
            </D:lockscope>
            <D:depth>0</D:depth>
            <D:owner>litmus test suite</D:owner>
            <D:timeout>Second-900</D:timeout>
            <D:locktoken>
              <D:href>opaquelocktoken:df10bd64-5784-6275-303e-fc68a28da90a</D:href>
            </D:locktoken>
            <ezclock:lastaccess xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">2010-03-20T11:22:40+01:00</ezclock:lastaccess>
          </D:activelock>
        </D:lockdiscovery>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  157 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'LOCK',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_IF' => '(<opaquelocktoken:df10bd64-5784-6275-303e-fc68a28da90a>)',
        'HTTP_TIMEOUT' => 'Second-900',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="8ae901167e3d05b4abd908aec61a636e", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 8 (refresh)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="8ae901167e3d05b4abd908aec61a636e", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:prop xmlns:D="DAV:">
  <D:lockdiscovery>
    <D:activelock xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">
      <D:locktype>
        <D:write/>
      </D:locktype>
      <D:lockscope>
        <D:exclusive/>
      </D:lockscope>
      <D:depth>0</D:depth>
      <D:owner>litmus test suite</D:owner>
      <D:timeout>Second-900</D:timeout>
      <D:locktoken>
        <D:href>opaquelocktoken:df10bd64-5784-6275-303e-fc68a28da90a</D:href>
      </D:locktoken>
      <ezclock:lastaccess xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">2010-03-20T11:22:40+01:00</ezclock:lastaccess>
    </D:activelock>
  </D:lockdiscovery>
</D:prop>
',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/xml; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  158 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE, Keep-Alive',
        'HTTP_TE' => 'trailers',
        'HTTP_X_LITMUS_SECOND' => 'locks: 9 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Authorization failed.',
      'headers' => 
      array (
        'WWW-Authenticate' => 
        array (
          'basic' => 'Basic realm="eZ Components WebDAV"',
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  159 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE, Keep-Alive',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="df0ebe7b7a5e7e39010ad54c206761d1", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 9 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="df0ebe7b7a5e7e39010ad54c206761d1", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  160 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/whocares',
        'HTTP_OVERWRITE' => 'F',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="d340391599fc772f5c52e8f1dccbb0c1", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 9 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="d340391599fc772f5c52e8f1dccbb0c1", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  161 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/notlocked',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/notlocked',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/notlocked',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/notlocked',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/lockme',
        'HTTP_OVERWRITE' => 'T',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/notlocked", response="b5fb248d5105f952362404478c73a142", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 9 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/notlocked',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/notlocked", response="b5fb248d5105f952362404478c73a142", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  162 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?>
<D:propertyupdate xmlns:D="DAV:"><D:set><D:prop><random xmlns="http://webdav.org/neon/litmus/">foobar</random></D:prop></D:set>
</D:propertyupdate>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '188',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPPATCH',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '188',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="d1b090582e522c9ecb292f85def3a557", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 9 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="d1b090582e522c9ecb292f85def3a557", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  163 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="e82d8723756f2064f4aba03737e0c4be", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 9 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="e82d8723756f2064f4aba03737e0c4be", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  164 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'UNLOCK',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_LOCK_TOKEN' => '<opaquelocktoken:foobar>',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="adaf2c1b094cec4a08b48487cbe70ec3", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 10 (notowner_lock)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="adaf2c1b094cec4a08b48487cbe70ec3", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Authorization failed.',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 403 Forbidden',
    ),
  ),
  165 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<lockinfo xmlns=\'DAV:\'>
 <lockscope><exclusive/></lockscope>
<locktype><write/></locktype><owner>notowner lock</owner>
</lockinfo>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '170',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'LOCK',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '170',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_DEPTH' => '0',
        'HTTP_TIMEOUT' => 'Second-900',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="aaaaab198c5c3aa0a73f58266b3f77a9", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 10 (notowner_lock)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="aaaaab198c5c3aa0a73f58266b3f77a9", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  166 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="925056ba9423e063ee1840c43e86eb9c", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 11 (owner_modify)',
        'HTTP_IF' => '<http://webdav/secure_collection/litmus/lockme> (<opaquelocktoken:df10bd64-5784-6275-303e-fc68a28da90a>)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="925056ba9423e063ee1840c43e86eb9c", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '97d24b068864526eda737927f9910618',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  167 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="df0ebe7b7a5e7e39010ad54c206761d1", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 12 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="df0ebe7b7a5e7e39010ad54c206761d1", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  168 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/whocares',
        'HTTP_OVERWRITE' => 'F',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="d340391599fc772f5c52e8f1dccbb0c1", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 12 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="d340391599fc772f5c52e8f1dccbb0c1", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  169 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/notlocked',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/notlocked',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/notlocked',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/notlocked',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/lockme',
        'HTTP_OVERWRITE' => 'T',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/notlocked", response="b5fb248d5105f952362404478c73a142", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 12 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/notlocked',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/notlocked", response="b5fb248d5105f952362404478c73a142", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  170 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?>
<D:propertyupdate xmlns:D="DAV:"><D:set><D:prop><random xmlns="http://webdav.org/neon/litmus/">foobar</random></D:prop></D:set>
</D:propertyupdate>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '188',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPPATCH',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '188',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="d1b090582e522c9ecb292f85def3a557", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 12 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="d1b090582e522c9ecb292f85def3a557", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  171 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="e82d8723756f2064f4aba03737e0c4be", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 12 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="e82d8723756f2064f4aba03737e0c4be", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  172 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'UNLOCK',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_LOCK_TOKEN' => '<opaquelocktoken:foobar>',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="adaf2c1b094cec4a08b48487cbe70ec3", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 13 (notowner_lock)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="adaf2c1b094cec4a08b48487cbe70ec3", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Authorization failed.',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 403 Forbidden',
    ),
  ),
  173 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<lockinfo xmlns=\'DAV:\'>
 <lockscope><exclusive/></lockscope>
<locktype><write/></locktype><owner>notowner lock</owner>
</lockinfo>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '170',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'LOCK',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '170',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_DEPTH' => '0',
        'HTTP_TIMEOUT' => 'Second-900',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="aaaaab198c5c3aa0a73f58266b3f77a9", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 13 (notowner_lock)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="aaaaab198c5c3aa0a73f58266b3f77a9", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  174 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme-copydest',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme-copydest',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme-copydest',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme-copydest',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme-copydest", response="0fefd746297cd0a9dcd9ae469cf2d865", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 14 (copy)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme-copydest',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme-copydest", response="0fefd746297cd0a9dcd9ae469cf2d865", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 404 Not Found',
    ),
  ),
  175 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/lockme-copydest',
        'HTTP_OVERWRITE' => 'T',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="21e0279f03b162c27cd92ec003d1a21d", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 14 (copy)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="21e0279f03b162c27cd92ec003d1a21d", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  176 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<propfind xmlns="DAV:"><prop>
<lockdiscovery xmlns="DAV:"/>
</prop></propfind>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '118',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme-copydest',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme-copydest',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme-copydest',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme-copydest',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPFIND',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_CONTENT_LENGTH' => '118',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme-copydest", response="47b50ef87e8f33d78e1896ba6cee3233", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 14 (copy)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme-copydest',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme-copydest", response="47b50ef87e8f33d78e1896ba6cee3233", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:multistatus xmlns:D="DAV:">
  <D:response>
    <D:href>http://webdav/secure_collection/litmus/lockme-copydest</D:href>
    <D:propstat>
      <D:prop>
        <D:lockdiscovery/>
      </D:prop>
      <D:status>HTTP/1.1 200 OK</D:status>
    </D:propstat>
  </D:response>
</D:multistatus>
',
      'headers' => 
      array (
        'Content-Type' => 'text/xml; charset="utf-8"',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
      ),
      'status' => 'HTTP/1.1 207 Multi-Status',
    ),
  ),
  177 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme-copydest',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme-copydest',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme-copydest',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme-copydest',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme-copydest", response="0fefd746297cd0a9dcd9ae469cf2d865", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 14 (copy)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme-copydest',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme-copydest", response="0fefd746297cd0a9dcd9ae469cf2d865", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  178 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'HEAD',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="c94f47449913a99fa05f074dd9fc357b", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 15 (cond_put)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="c94f47449913a99fa05f074dd9fc357b", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '97d24b068864526eda737927f9910618',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  179 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_IF' => '(<opaquelocktoken:df10bd64-5784-6275-303e-fc68a28da90a> [97d24b068864526eda737927f9910618])',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="925056ba9423e063ee1840c43e86eb9c", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 15 (cond_put)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="925056ba9423e063ee1840c43e86eb9c", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '97d24b068864526eda737927f9910618',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  180 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'HEAD',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="c94f47449913a99fa05f074dd9fc357b", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 16 (fail_cond_put)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="c94f47449913a99fa05f074dd9fc357b", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '97d24b068864526eda737927f9910618',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  181 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_IF' => '(<DAV:no-lock> [97d24b068864526eda737927f9910618])',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="925056ba9423e063ee1840c43e86eb9c", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 16 (fail_cond_put)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="925056ba9423e063ee1840c43e86eb9c", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 412 Precondition Failed',
    ),
  ),
  182 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_IF' => '(<opaquelocktoken:df10bd64-5784-6275-303e-fc68a28da90a>) (Not <DAV:no-lock>)',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="925056ba9423e063ee1840c43e86eb9c", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 17 (cond_put_with_not)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="925056ba9423e063ee1840c43e86eb9c", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '97d24b068864526eda737927f9910618',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  183 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_IF' => '(<opaquelocktoken:df10bd64-5784-6275-303e-fc68a28da90ax>) (Not <DAV:no-lock>)',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="925056ba9423e063ee1840c43e86eb9c", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 18 (cond_put_corrupt_token)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="925056ba9423e063ee1840c43e86eb9c", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  184 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'HEAD',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="c94f47449913a99fa05f074dd9fc357b", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 19 (complex_cond_put)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="c94f47449913a99fa05f074dd9fc357b", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '97d24b068864526eda737927f9910618',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  185 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_IF' => '(<opaquelocktoken:df10bd64-5784-6275-303e-fc68a28da90a> [97d24b068864526eda737927f9910618]) (Not <DAV:no-lock> [97d24b068864526eda737927f9910618])',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="925056ba9423e063ee1840c43e86eb9c", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 19 (complex_cond_put)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="925056ba9423e063ee1840c43e86eb9c", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '97d24b068864526eda737927f9910618',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  186 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'HEAD',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="c94f47449913a99fa05f074dd9fc357b", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 20 (fail_complex_cond_put)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="c94f47449913a99fa05f074dd9fc357b", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '97d24b068864526eda737927f9910618',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'application/octet-stream; charset="utf-8"',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  187 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_IF' => '(<opaquelocktoken:df10bd64-5784-6275-303e-fc68a28da90a> [97d24b068864526eda737927f9910718]) (Not <DAV:no-lock> [97d24b068864526eda737927f9910718])',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="925056ba9423e063ee1840c43e86eb9c", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 20 (fail_complex_cond_put)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="925056ba9423e063ee1840c43e86eb9c", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 412 Precondition Failed',
    ),
  ),
  188 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'UNLOCK',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_LOCK_TOKEN' => '<opaquelocktoken:df10bd64-5784-6275-303e-fc68a28da90a>',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="653dca464ce7968fe6acf1c6a0bdf7a8", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 21 (unlock)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="653dca464ce7968fe6acf1c6a0bdf7a8", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  189 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_IF' => '(<DAV:no-lock>)',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="925056ba9423e063ee1840c43e86eb9c", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 22 (fail_cond_put_unlocked)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="925056ba9423e063ee1840c43e86eb9c", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 412 Precondition Failed',
    ),
  ),
  190 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<lockinfo xmlns=\'DAV:\'>
 <lockscope><shared/></lockscope>
<locktype><write/></locktype><owner>litmus test suite</owner>
</lockinfo>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '171',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'LOCK',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '171',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_DEPTH' => '0',
        'HTTP_TIMEOUT' => 'Second-3600',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="8ae901167e3d05b4abd908aec61a636e", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 23 (lock_shared)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="8ae901167e3d05b4abd908aec61a636e", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:prop xmlns:D="DAV:">
  <D:lockdiscovery>
    <D:activelock xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">
      <D:locktype>
        <D:write/>
      </D:locktype>
      <D:lockscope>
        <D:shared/>
      </D:lockscope>
      <D:depth>0</D:depth>
      <D:owner>litmus test suite</D:owner>
      <D:timeout>Second-900</D:timeout>
      <D:locktoken>
        <D:href>opaquelocktoken:ab2680b0-c65d-f6de-4084-c68cc631d766</D:href>
      </D:locktoken>
      <ezclock:lastaccess xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">2010-03-20T11:22:42+01:00</ezclock:lastaccess>
    </D:activelock>
  </D:lockdiscovery>
</D:prop>
',
      'headers' => 
      array (
        'Lock-Token' => 'opaquelocktoken:ab2680b0-c65d-f6de-4084-c68cc631d766',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/xml; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  191 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="df0ebe7b7a5e7e39010ad54c206761d1", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 24 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="df0ebe7b7a5e7e39010ad54c206761d1", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  192 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/whocares',
        'HTTP_OVERWRITE' => 'F',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="d340391599fc772f5c52e8f1dccbb0c1", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 24 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="d340391599fc772f5c52e8f1dccbb0c1", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  193 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/notlocked',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/notlocked',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/notlocked',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/notlocked',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/lockme',
        'HTTP_OVERWRITE' => 'T',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/notlocked", response="b5fb248d5105f952362404478c73a142", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 24 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/notlocked',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/notlocked", response="b5fb248d5105f952362404478c73a142", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  194 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?>
<D:propertyupdate xmlns:D="DAV:"><D:set><D:prop><random xmlns="http://webdav.org/neon/litmus/">foobar</random></D:prop></D:set>
</D:propertyupdate>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '188',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPPATCH',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '188',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="d1b090582e522c9ecb292f85def3a557", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 24 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="d1b090582e522c9ecb292f85def3a557", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  195 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="e82d8723756f2064f4aba03737e0c4be", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 24 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="e82d8723756f2064f4aba03737e0c4be", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  196 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'UNLOCK',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_LOCK_TOKEN' => '<opaquelocktoken:foobar>',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="adaf2c1b094cec4a08b48487cbe70ec3", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 25 (notowner_lock)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="adaf2c1b094cec4a08b48487cbe70ec3", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Authorization failed.',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 403 Forbidden',
    ),
  ),
  197 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<lockinfo xmlns=\'DAV:\'>
 <lockscope><exclusive/></lockscope>
<locktype><write/></locktype><owner>notowner lock</owner>
</lockinfo>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '170',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'LOCK',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '170',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_DEPTH' => '0',
        'HTTP_TIMEOUT' => 'Second-900',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="aaaaab198c5c3aa0a73f58266b3f77a9", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 25 (notowner_lock)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="aaaaab198c5c3aa0a73f58266b3f77a9", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  198 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="925056ba9423e063ee1840c43e86eb9c", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 26 (owner_modify)',
        'HTTP_IF' => '<http://webdav/secure_collection/litmus/lockme> (<opaquelocktoken:ab2680b0-c65d-f6de-4084-c68cc631d766>)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="925056ba9423e063ee1840c43e86eb9c", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => '97d24b068864526eda737927f9910618',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  199 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<lockinfo xmlns=\'DAV:\'>
 <lockscope><shared/></lockscope>
<locktype><write/></locktype><owner>litmus: notowner_sharedlock</owner>
</lockinfo>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '181',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'LOCK',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '181',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_DEPTH' => '0',
        'HTTP_TIMEOUT' => 'Second-900',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="aaaaab198c5c3aa0a73f58266b3f77a9", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 27 (double_sharedlock)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="aaaaab198c5c3aa0a73f58266b3f77a9", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:prop xmlns:D="DAV:">
  <D:lockdiscovery>
    <D:activelock xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">
      <D:locktype>
        <D:write/>
      </D:locktype>
      <D:lockscope>
        <D:shared/>
      </D:lockscope>
      <D:depth>0</D:depth>
      <D:owner>litmus test suite</D:owner>
      <D:timeout>Second-900</D:timeout>
      <D:locktoken>
        <D:href>opaquelocktoken:ab2680b0-c65d-f6de-4084-c68cc631d766</D:href>
      </D:locktoken>
      <ezclock:lastaccess xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">2010-03-20T11:22:42+01:00</ezclock:lastaccess>
    </D:activelock>
    <D:activelock xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">
      <D:locktype>
        <D:write/>
      </D:locktype>
      <D:lockscope>
        <D:shared/>
      </D:lockscope>
      <D:depth>0</D:depth>
      <D:owner>litmus: notowner_sharedlock</D:owner>
      <D:timeout>Second-900</D:timeout>
      <D:locktoken>
        <D:href>opaquelocktoken:12fb6c8b-3043-0fd4-92c3-bb8abf930487</D:href>
      </D:locktoken>
      <ezclock:lastaccess xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">2010-03-20T11:22:42+01:00</ezclock:lastaccess>
    </D:activelock>
  </D:lockdiscovery>
</D:prop>
',
      'headers' => 
      array (
        'Lock-Token' => 'opaquelocktoken:12fb6c8b-3043-0fd4-92c3-bb8abf930487',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/xml; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  200 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'UNLOCK',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_LOCK_TOKEN' => '<opaquelocktoken:12fb6c8b-3043-0fd4-92c3-bb8abf930487>',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="adaf2c1b094cec4a08b48487cbe70ec3", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 27 (double_sharedlock)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="adaf2c1b094cec4a08b48487cbe70ec3", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  201 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="df0ebe7b7a5e7e39010ad54c206761d1", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 28 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="df0ebe7b7a5e7e39010ad54c206761d1", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  202 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/whocares',
        'HTTP_OVERWRITE' => 'F',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="d340391599fc772f5c52e8f1dccbb0c1", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 28 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="d340391599fc772f5c52e8f1dccbb0c1", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  203 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/notlocked',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/notlocked',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/notlocked',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/notlocked',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/lockme',
        'HTTP_OVERWRITE' => 'T',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/notlocked", response="b5fb248d5105f952362404478c73a142", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 28 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/notlocked',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/notlocked", response="b5fb248d5105f952362404478c73a142", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  204 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?>
<D:propertyupdate xmlns:D="DAV:"><D:set><D:prop><random xmlns="http://webdav.org/neon/litmus/">foobar</random></D:prop></D:set>
</D:propertyupdate>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '188',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPPATCH',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '188',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="d1b090582e522c9ecb292f85def3a557", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 28 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="d1b090582e522c9ecb292f85def3a557", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  205 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="e82d8723756f2064f4aba03737e0c4be", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 28 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="e82d8723756f2064f4aba03737e0c4be", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  206 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'UNLOCK',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_LOCK_TOKEN' => '<opaquelocktoken:foobar>',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="adaf2c1b094cec4a08b48487cbe70ec3", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 29 (notowner_lock)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="adaf2c1b094cec4a08b48487cbe70ec3", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Authorization failed.',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 403 Forbidden',
    ),
  ),
  207 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<lockinfo xmlns=\'DAV:\'>
 <lockscope><exclusive/></lockscope>
<locktype><write/></locktype><owner>notowner lock</owner>
</lockinfo>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '170',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'LOCK',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '170',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_DEPTH' => '0',
        'HTTP_TIMEOUT' => 'Second-900',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="aaaaab198c5c3aa0a73f58266b3f77a9", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 29 (notowner_lock)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockme", response="aaaaab198c5c3aa0a73f58266b3f77a9", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  208 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockme',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockme',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockme',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockme',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'UNLOCK',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_LOCK_TOKEN' => '<opaquelocktoken:ab2680b0-c65d-f6de-4084-c68cc631d766>',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="653dca464ce7968fe6acf1c6a0bdf7a8", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 30 (unlock)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockme',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockme", response="653dca464ce7968fe6acf1c6a0bdf7a8", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  209 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockcoll/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockcoll/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockcoll/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockcoll/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockcoll/", response="56d0730baca7220a4ff7750b00407892", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 31 (prep_collection)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockcoll/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockcoll/", response="56d0730baca7220a4ff7750b00407892", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  210 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<lockinfo xmlns=\'DAV:\'>
 <lockscope><exclusive/></lockscope>
<locktype><write/></locktype><owner>litmus test suite</owner>
</lockinfo>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '174',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockcoll/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockcoll/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockcoll/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockcoll/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'LOCK',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '174',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_DEPTH' => 'infinity',
        'HTTP_TIMEOUT' => 'Second-3600',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockcoll/", response="5115d6f09dc3308a13fc7de1fed03747", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 32 (lock_collection)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockcoll/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockcoll/", response="5115d6f09dc3308a13fc7de1fed03747", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:prop xmlns:D="DAV:">
  <D:lockdiscovery>
    <D:activelock xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">
      <D:locktype>
        <D:write/>
      </D:locktype>
      <D:lockscope>
        <D:exclusive/>
      </D:lockscope>
      <D:depth>Infinity</D:depth>
      <D:owner>litmus test suite</D:owner>
      <D:timeout>Second-900</D:timeout>
      <D:locktoken>
        <D:href>opaquelocktoken:631a3a8c-cacf-d971-471c-1beaea765950</D:href>
      </D:locktoken>
      <ezclock:lastaccess xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">2010-03-20T11:22:42+01:00</ezclock:lastaccess>
    </D:activelock>
  </D:lockdiscovery>
</D:prop>
',
      'headers' => 
      array (
        'Lock-Token' => 'opaquelocktoken:631a3a8c-cacf-d971-471c-1beaea765950',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/xml; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  211 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockcoll/lockme.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockcoll/lockme.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockcoll/lockme.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockcoll/lockme.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockcoll/lockme.txt", response="5c48f65710e5e17ccc56f276140cffa6", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 32 (lock_collection)',
        'HTTP_IF' => '<http://webdav/secure_collection/litmus/lockcoll/> (<opaquelocktoken:631a3a8c-cacf-d971-471c-1beaea765950>)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockcoll/lockme.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockcoll/lockme.txt", response="5c48f65710e5e17ccc56f276140cffa6", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'c09a883cd9e3f31bb1ddc9a0e2ffa3f6',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  212 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockcoll/lockme.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockcoll/lockme.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockcoll/lockme.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockcoll/lockme.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockcoll/lockme.txt", response="5c48f65710e5e17ccc56f276140cffa6", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 33 (owner_modify)',
        'HTTP_IF' => '<http://webdav/secure_collection/litmus/lockcoll/> (<opaquelocktoken:631a3a8c-cacf-d971-471c-1beaea765950>)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockcoll/lockme.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockcoll/lockme.txt", response="5c48f65710e5e17ccc56f276140cffa6", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'ETag' => 'c09a883cd9e3f31bb1ddc9a0e2ffa3f6',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  213 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockcoll/lockme.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockcoll/lockme.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockcoll/lockme.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockcoll/lockme.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockcoll/lockme.txt", response="e48232880ad63885dcc65e10454b5db6", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 34 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockcoll/lockme.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockcoll/lockme.txt", response="e48232880ad63885dcc65e10454b5db6", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  214 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockcoll/lockme.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockcoll/lockme.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockcoll/lockme.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockcoll/lockme.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MOVE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/whocares',
        'HTTP_OVERWRITE' => 'F',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockcoll/lockme.txt", response="07ea341a2482c5a6c9396b080ac5f372", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 34 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockcoll/lockme.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockcoll/lockme.txt", response="07ea341a2482c5a6c9396b080ac5f372", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  215 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/notlocked',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/notlocked',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/notlocked',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/notlocked',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'COPY',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_DEPTH' => '0',
        'HTTP_DESTINATION' => 'http://webdav/secure_collection/litmus/lockcoll/lockme.txt',
        'HTTP_OVERWRITE' => 'T',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/notlocked", response="b5fb248d5105f952362404478c73a142", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 34 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/notlocked',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/notlocked", response="b5fb248d5105f952362404478c73a142", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  216 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8" ?>
<D:propertyupdate xmlns:D="DAV:"><D:set><D:prop><random xmlns="http://webdav.org/neon/litmus/">foobar</random></D:prop></D:set>
</D:propertyupdate>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '188',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockcoll/lockme.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockcoll/lockme.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockcoll/lockme.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockcoll/lockme.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PROPPATCH',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '188',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockcoll/lockme.txt", response="5449f1fe1883f83d15ab755cf2942e07", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 34 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockcoll/lockme.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockcoll/lockme.txt", response="5449f1fe1883f83d15ab755cf2942e07", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  217 => 
  array (
    'request' => 
    array (
      'body' => 'This
is
a
test
file
called
foo

',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '32',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockcoll/lockme.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockcoll/lockme.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockcoll/lockme.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockcoll/lockme.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'PUT',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '32',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockcoll/lockme.txt", response="37b09ae5dc99c9bb38f262b6dd347ab9", algorithm="MD5"',
        'HTTP_X_LITMUS_SECOND' => 'locks: 34 (notowner_modify)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockcoll/lockme.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c9c2a7b8300af698fe899f14857407be", uri="/secure_collection/litmus/lockcoll/lockme.txt", response="37b09ae5dc99c9bb38f262b6dd347ab9", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 423 Locked',
    ),
  ),
  218 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockcoll/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockcoll/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockcoll/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockcoll/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'LOCK',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_IF' => '(<opaquelocktoken:631a3a8c-cacf-d971-471c-1beaea765950>)',
        'HTTP_TIMEOUT' => 'Second-900',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockcoll/", response="5115d6f09dc3308a13fc7de1fed03747", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 35 (refresh)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockcoll/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockcoll/", response="5115d6f09dc3308a13fc7de1fed03747", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:prop xmlns:D="DAV:">
  <D:lockdiscovery>
    <D:activelock xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">
      <D:locktype>
        <D:write/>
      </D:locktype>
      <D:lockscope>
        <D:exclusive/>
      </D:lockscope>
      <D:depth>Infinity</D:depth>
      <D:owner>litmus test suite</D:owner>
      <D:timeout>Second-900</D:timeout>
      <D:locktoken>
        <D:href>opaquelocktoken:631a3a8c-cacf-d971-471c-1beaea765950</D:href>
      </D:locktoken>
      <ezclock:lastaccess xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">2010-03-20T11:22:43+01:00</ezclock:lastaccess>
    </D:activelock>
  </D:lockdiscovery>
</D:prop>
',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/xml; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  219 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockcoll/lockme.txt',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockcoll/lockme.txt',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockcoll/lockme.txt',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockcoll/lockme.txt',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'LOCK',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_IF' => '(<opaquelocktoken:631a3a8c-cacf-d971-471c-1beaea765950>)',
        'HTTP_TIMEOUT' => 'Second-900',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockcoll/lockme.txt", response="c57100759dfa6fcf10ccd1c65c0e293c", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 36 (indirect_refresh)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockcoll/lockme.txt',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockcoll/lockme.txt", response="c57100759dfa6fcf10ccd1c65c0e293c", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:prop xmlns:D="DAV:">
  <D:lockdiscovery>
    <D:activelock xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">
      <D:locktype>
        <D:write/>
      </D:locktype>
      <D:lockscope>
        <D:exclusive/>
      </D:lockscope>
      <D:depth>Infinity</D:depth>
      <D:owner>litmus test suite</D:owner>
      <D:timeout>Second-900</D:timeout>
      <D:locktoken>
        <D:href>opaquelocktoken:631a3a8c-cacf-d971-471c-1beaea765950</D:href>
      </D:locktoken>
      <ezclock:baseuri xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">/secure_collection/litmus/lockcoll</ezclock:baseuri>
    </D:activelock>
  </D:lockdiscovery>
</D:prop>
',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/xml; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 200 OK',
    ),
  ),
  220 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/lockcoll/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/lockcoll/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/lockcoll/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/lockcoll/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'UNLOCK',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_LOCK_TOKEN' => '<opaquelocktoken:631a3a8c-cacf-d971-471c-1beaea765950>',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockcoll/", response="5910e45f6f147767ca951e8a52cc6a9a", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 37 (unlock)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/lockcoll/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/lockcoll/", response="5910e45f6f147767ca951e8a52cc6a9a", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  221 => 
  array (
    'request' => 
    array (
      'body' => '<?xml version="1.0" encoding="utf-8"?>
<lockinfo xmlns=\'DAV:\'>
 <lockscope><exclusive/></lockscope>
<locktype><write/></locktype><owner>litmus test suite</owner>
</lockinfo>
',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'CONTENT_LENGTH' => '174',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/unmapped_url',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/unmapped_url',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/unmapped_url',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/unmapped_url',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'LOCK',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_CONTENT_LENGTH' => '174',
        'CONTENT_TYPE' => 'application/xml',
        'HTTP_DEPTH' => '0',
        'HTTP_TIMEOUT' => 'Second-3600',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/unmapped_url", response="0f5715c6d3939bfc43d92c820d4da2fd", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 38 (unmapped_lock)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/unmapped_url',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/unmapped_url", response="0f5715c6d3939bfc43d92c820d4da2fd", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '<?xml version="1.0" encoding="UTF-8"?>
<D:prop xmlns:D="DAV:">
  <D:lockdiscovery>
    <D:activelock xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">
      <D:locktype>
        <D:write/>
      </D:locktype>
      <D:lockscope>
        <D:exclusive/>
      </D:lockscope>
      <D:depth>0</D:depth>
      <D:owner>litmus test suite</D:owner>
      <D:timeout>Second-900</D:timeout>
      <D:locktoken>
        <D:href>opaquelocktoken:a6a9816b-cffc-97ad-d496-9a23a5cb474e</D:href>
      </D:locktoken>
      <ezclock:lastaccess xmlns:ezclock="http://ezcomponents.org/s/Webdav#lock">2010-03-20T11:22:43+01:00</ezclock:lastaccess>
    </D:activelock>
  </D:lockdiscovery>
</D:prop>
',
      'headers' => 
      array (
        'Lock-Token' => 'opaquelocktoken:a6a9816b-cffc-97ad-d496-9a23a5cb474e',
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/xml; charset="utf-8"',
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
  222 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/unmapped_url',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/unmapped_url',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/unmapped_url',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/unmapped_url',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'UNLOCK',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_LOCK_TOKEN' => '<opaquelocktoken:a6a9816b-cffc-97ad-d496-9a23a5cb474e>',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/unmapped_url", response="3dd3a5745c1d6e3d5623ebefd173ddee", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'locks: 39 (unlock)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/unmapped_url',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="c3883c5e94d6531fdc67c9bbc3c6190c", uri="/secure_collection/litmus/unmapped_url", response="3dd3a5745c1d6e3d5623ebefd173ddee", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  223 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE, Keep-Alive',
        'HTTP_TE' => 'trailers',
        'HTTP_X_LITMUS' => 'http: 1 (begin)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => 'Authorization failed.',
      'headers' => 
      array (
        'WWW-Authenticate' => 
        array (
          'basic' => 'Basic realm="eZ Components WebDAV"',
          'digest' => 'Digest realm="eZ Components WebDAV", nonce="054f113e44d011b4bda4138e8615583b", algorithm="MD5"',
        ),
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Type' => 'text/plain; charset="utf-8"',
        'Content-Length' => '21',
      ),
      'status' => 'HTTP/1.1 401 Unauthorized',
    ),
  ),
  224 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'DELETE',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE, Keep-Alive',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="054f113e44d011b4bda4138e8615583b", uri="/secure_collection/litmus/", response="cf0a04d5b11c9d7ee5a9b82cb516a4a0", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'http: 1 (begin)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="054f113e44d011b4bda4138e8615583b", uri="/secure_collection/litmus/", response="cf0a04d5b11c9d7ee5a9b82cb516a4a0", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 204 No Content',
    ),
  ),
  225 => 
  array (
    'request' => 
    array (
      'body' => '',
      'server' => 
      array (
        'SERVER_SOFTWARE' => 'lighttpd/1.4.22',
        'SERVER_NAME' => 'webdav',
        'GATEWAY_INTERFACE' => 'CGI/1.1',
        'SERVER_PORT' => '80',
        'SERVER_ADDR' => '::ffff:127.0.1.1',
        'REMOTE_PORT' => '33458',
        'REMOTE_ADDR' => '::ffff:127.0.1.1',
        'SCRIPT_NAME' => '/index.php',
        'PATH_INFO' => '/secure_collection/litmus/',
        'PATH_TRANSLATED' => '/home/dotxp/web/webdav/htdocs/secure_collection/litmus/',
        'SCRIPT_FILENAME' => '/home/dotxp/web/webdav/htdocs/index.php',
        'DOCUMENT_ROOT' => '/home/dotxp/web/webdav/htdocs/',
        'REQUEST_URI' => '/secure_collection/litmus/',
        'REDIRECT_URI' => '/index.php/secure_collection/litmus/',
        'QUERY_STRING' => '',
        'REQUEST_METHOD' => 'MKCOL',
        'REDIRECT_STATUS' => '200',
        'SERVER_PROTOCOL' => 'HTTP/1.1',
        'HTTP_HOST' => 'webdav',
        'HTTP_USER_AGENT' => 'litmus/0.12.1 neon/0.28.4',
        'HTTP_CONNECTION' => 'TE',
        'HTTP_TE' => 'trailers',
        'HTTP_AUTHORIZATION' => 'Digest username="some", realm="eZ Components WebDAV", nonce="054f113e44d011b4bda4138e8615583b", uri="/secure_collection/litmus/", response="0941aae51e8ddb2f674da680f9e01d07", algorithm="MD5"',
        'HTTP_X_LITMUS' => 'http: 1 (begin)',
        'PHP_SELF' => '/index.php/secure_collection/litmus/',
        'PHP_AUTH_DIGEST' => 'username="some", realm="eZ Components WebDAV", nonce="054f113e44d011b4bda4138e8615583b", uri="/secure_collection/litmus/", response="0941aae51e8ddb2f674da680f9e01d07", algorithm="MD5"',
        'REQUEST_TIME' => 1220431173,
      ),
    ),
    'response' => 
    array (
      'body' => '',
      'headers' => 
      array (
        'Server' => 'lighttpd/1.4.22/eZComponents/dev/ezcWebdavTransportMock',
        'Content-Length' => 0,
      ),
      'status' => 'HTTP/1.1 201 Created',
    ),
  ),
);

?>
