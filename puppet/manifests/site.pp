node 'web.botdemon.local' {

    exec { "update-composer":
        command => "composer selfupdate",
        path => "/usr/bin:/usr/sbin:/bin:/usr/local/bin",
    }

    package { "sass":
        ensure => installed,
        provider => 'gem',
    }

    package { "rb-inotify":
        ensure => installed,
        provider => 'gem',
    }

    exec { "update-bower":
        command => "npm update -g bower",
        path => "/usr/bin:/usr/sbin:/bin:/usr/local/bin",
    }
}