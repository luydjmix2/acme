#
echo "Ingrese el nombre de la tabla en singular:"
read nameTabla
echo "desea crear controlador en esta misma accion? y(Si) o n(No)"
read contollerVal
echo "desea crear resource para el controlador? y(Si) o n(No)"
read resourceVal

namePriUper=$(echo -n ${nameTabla:0:1} | tr '[:lower:]' '[:upper:]'; echo ${nameTabla:1} | tr '[:upper:]' '[:lower:]')
# echo $namePriUper
if test $contollerVal == "y";then
	echo "si controlador"
	if test $resourceVal == "y";then
			php artisan make:controller ${namePriUper}Controller --resource
		else
			php artisan make:controller ${namePriUper}Controller
	fi
fi

php artisan make:migratio create_${nameTabla}s_table

php artisan make:model ${namePriUper}

php artisan make:seeder ${namePriUper}Seeder

read -p $'\e[33m'"Press [Enter] key to continue..."$'\e[0m' foo
