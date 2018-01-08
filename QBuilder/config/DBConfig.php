<?php 
class DBConfig {

  private $default = 'default';

  private $connections = [
    'default' => [
      'host' => 'localhost',
      'user' => 'root',
      'pass' => '200306',
      'dbname' => 'usuariosp'
    ],
    'another_one' => [
      'host' => 'host',
      'user' => 'user',
      'pass' => 'pass',
      'dbname' => 'dbname'
    ]
  ];

  function __construct($connectionName = 'default') {
    foreach($this->connections[$connectionName] AS $key => $val) {
      $this->{$key} = $val;
    }
  }
}