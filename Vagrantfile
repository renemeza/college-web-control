# -*- mode: ruby -*-
# vi: set ft=ruby :

# vi: set ft=ruby :

Vagrant::configure("2") do |config|
    # Definir entorno para el servidor web
    config.vm.define :web do |www|
        www.vm.box = "precise_webServer"
        www.vm.box_url = ""
        www.vm.hostname = "web.botdemon.local"
        www.ssh.max_tries = 10
        www.vm.network :forwarded_port, guest: 80, host: 6045  # Apache port
        www.vm.network :private_network, ip: "192.168.33.10"
        www.vm.synced_folder ".", "/var/www", :extra => 'dmode=777,fmode=777'

        www.vm.provider :virtualbox do |vb|
            vb.customize ['setextradata', :id, 'VBoxInternal2/SharedFoldersEnableSymlinksCreate/v-root', '1' ]
            vb.customize ["modifyvm", :id, "--rtcuseutc", "on"]
            vb.customize ["modifyvm", :id, "--memory", "200"]
        end
    end

    # Definir entorno para el servidor de base de datos
    config.vm.define :db do |db|
        db.vm.box = "precise_dbServer"
        db.vm.box_url = ""
        db.vm.hostname = "db.botdemon"

        db.ssh.max_tries = 10
        db.vm.network :private_network, ip: "192.168.33.11"
        db.vm.network :forwarded_port, guest: 3306, host: 8889 # MySQL port
        db.vm.network :forwarded_port, guest: 5432, host: 5433 # Postgres port

        db.vm.provider :virtualbox do |vb|
            vb.customize ["modifyvm", :id, "--rtcuseutc", "on"]
            vb.customize ["modifyvm", :id, "--memory", "128"]
        end

    end

    config.vm.provision :puppet do |puppet|
        puppet.manifests_path = "puppet/manifests"
        puppet.manifest_file  = "site.pp"
        puppet.module_path = "puppet/modules"
        puppet.options = "--verbose --debug"
        puppet.options = "--verbose"
    end
end
