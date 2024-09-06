#!/bin/bash
green='\033[1;32m'
NC='\033[0m' # No Color
while true; do
    read -p "Apakah anda yakin akan mendelpoy aplikasi ke server? pastikan branch master sudah paling up to date (y/n) : " yn
    case $yn in
        [Yy]* )
        if ! git config remote.serverProd.url > /dev/null; then
          git remote add serverProd ssh://dev@10.17.2.39/var/www/git_repo/dashboard-erat.git
        fi

        git push serverProd master;
        echo -e "${green}Sukses mendeploy ke 10.17.2.39${NC}\n"
        break;;
        [Nn]* )
        exit;;
        * ) echo "Please answer yes or no.";;
    esac
done
