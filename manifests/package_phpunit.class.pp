
class package_phpunit
{

  exec
  {
    'phpunit.prepare1':
      creates => '/usr/share/php/.channels/pear.phpunit.de.reg',
      path => '/bin:/usr/bin:/usr/sbin',
      command => 'pear channel-discover pear.phpunit.de'
  }

  exec
  {
    'phpunit.prepare2':
      creates => '/usr/share/php/.channels/pear.symfony-project.com.reg',
      path => '/bin:/usr/bin:/usr/sbin',
      command => 'pear channel-discover pear.symfony-project.com',
      require => Exec['phpunit.prepare1']
  }

  exec
  {
    'phpunit.prepare3':
      creates => '/usr/share/php/.channels/components.ez.no.reg',
      path => '/bin:/usr/bin:/usr/sbin',
      command => 'pear channel-discover components.ez.no',
      require => Exec['phpunit.prepare2']
  }

  exec
  {
    'phpunit.install':
      creates => '/usr/bin/phpunit',
      path => '/bin:/usr/bin:/usr/sbin',
      command => 'pear install phpunit/PHPUnit --alldeps',
      require => Exec['phpunit.prepare3']
  }


  exec
  {
    'mockery.prepare1':
      creates => '/usr/share/php/.channels/pear.survivethedeepend.com.reg',
      path => '/bin:/usr/bin:/usr/sbin',
      command => 'pear channel-discover pear.survivethedeepend.com',
      require => Exec['phpunit.install']
  }

  exec
  {
    'mockery.prepare2':
      creates => '/usr/share/php/.channels/hamcrest.googlecode.com_svn_pear.reg',
      path => '/bin:/usr/bin:/usr/sbin',
      command => 'pear channel-discover hamcrest.googlecode.com/svn/pear',
      require => Exec['mockery.prepare1']
  }

  exec
  {
    'mockery.install':
      creates => '/usr/share/php/Mockery.php',
      path => '/bin:/usr/bin:/usr/sbin',
      command => 'pear install --alldeps deepend/Mockery',
      require => Exec['mockery.prepare2']
  }
}
