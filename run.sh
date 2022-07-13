printf "Setting local variables...\n"
read -p 'DB username: ' USERNAME;
read -p 'DB password: ' PASSWORD;

export USERNAME;
export PASSWORD;


[ -z "$1" ] && printf "Setting PHP server\n" && php -S localhost:3000 -t ./public;

if [ "$1" = "dev" ]; then
    printf "Setting PHP server alongside Sass compiler\n"
    php -S localhost:3000 -t ./public &
    sass --watch ./src/scss:./public/css;
fi