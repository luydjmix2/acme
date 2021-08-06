#
echo "Ingrese el nombre del juego Request:"
read nameR

php artisan make:request ${nameR}StoreRequest

php artisan make:request ${nameR}UpdateRequest
echo $'\e[0;31m'se ejecuto creacion de juego Request$'\e[0m'

read -p $'\e[33m'"Press [Enter] key to continue..."$'\e[0m' foo