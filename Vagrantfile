Vagrant.configure("2") do |config|

    config.vm.define "ans" do |ans|
        ans.vm.box = "almalinux/8"
        ans.vm.hostname = "ans.project"
        ans.vm.network "private_network", ip: "192.168.10.50"
    end
   
    config.vm.define "web1" do |web1|
        web1.vm.box = "boxomatic/centos-stream-9"
        web1.vm.hostname = "web1.project"
        web1.vm.network "private_network", ip: "192.168.10.110"
    end

    config.vm.define "web2" do |web2|
        web2.vm.box = "boxomatic/centos-stream-9"
        web2.vm.hostname = "web2.project"
        web2.vm.network "private_network", ip: "192.168.10.120"
    end

end