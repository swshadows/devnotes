printf "Setting local variables...\n"
read -p 'DB username: ' USERNAME;
read -p 'DB password: ' PASSWORD;

export USERNAME;
export PASSWORD;

printf "Setting PHP server"
php -S localhost:3000;