# Laravel Core

## Requirements
- VirtualBox: Windows 10 use version 5.1.38, MacOS Catalina use version 5.2.38
- Vagrant 2.1.2

## Install
- Setup:

``` bash
    $ cd {path/to/projectroot}
    $ vagrant plugin install vagrant-vbguest
    $ vagrant up
    $ vagrant ssh
    [vagrant@localhost ~]$ sudo yum -y update kernel*
    [vagrant@localhost ~]$ exit
    $ vagrant reload
```
- Update web config:

``` bash
    $ vagrant ssh
    [vagrant@localhost ~]$ cd /vagrant/web
    [vagrant@localhost ~]$ ./composer.phar install
    [vagrant@localhost ~]$ ./composer.phar dump-autoload
```

- Redirect: Open hosts file and add below line

``` bash
    192.168.33.15   local-blab.betech-vn.com
```

## Run
- Start Virtual machine:

``` bash
    $ cd {path/to/projectroot}
    $ vagrant up
```
- Access:

```
    http://local-blab.betech-vn.com
```
- Close Virtual machine:

``` bash
    $ cd {path/to/projectroot}
    $ vagrant halt
```
- Reload Virtual machine:

``` bash
    $ cd {path/to/projectroot}
    $ vagrant reload
```
- Destroy Virtual machine:

``` bash
    $ cd {path/to/projectroot}
    $ vagrant destroy
```

- Reflect Virtual machine:

``` bash
    $ cd {path/to/projectroot}
    $ vagrant up --provision
```

# Cheat sheets

## Form
``` php
    {{ Form::open(['url' => 'foo/bar', 'method' => 'put']) }}
    // Point to url
    {{ Form::close() }}

    {{ Form::open(['route' => ['route.name', $user->id]]) }}
    // Point to named routes
    {{ Form::close() }}

    {{ Form::open(['action' => ['Controller@method', $user->id]]) }}
    // Point to action
    {{ Form::close() }}

    {{ Form::open(['url' => 'foo/bar', 'files' => true]) }}
    // Accept file uploads
    {{ Form::close() }}
```

## If statement
``` php
    @if (condition)
    @else
    @endif
```