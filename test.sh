DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"

source "$DIR/./.env"

"$DIR/./vendor/bin/phpunit" \
  --bootstrap "$DIR/vendor/autoload.php" \
  --colors \
  "$DIR/tests/"