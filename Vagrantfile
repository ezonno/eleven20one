
Vagrant::Config.run do |config|
  config.vm.box = "precise32"
  config.vm.network :hostonly, "33.33.33.78"
  # remove the next line when running on a windows host system (Windows does not have NFS support)
  config.vm.share_folder("v-root", "/vagrant", ".", :nfs => true)
  config.vm.customize ["modifyvm", :id, "--memory", 2048 ]
  config.vm.provision :puppet do |puppet|
    puppet.manifests_path = "manifests"
    puppet.manifest_file = "app.pp"
  end

end
