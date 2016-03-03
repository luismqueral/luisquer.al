# variables
RED='\033[0;31m'
bold=$(tput bold)
normal=$(tput sgr0)
NC='\033[0m' # No Color

# update
# echo "${RED}-->${NC} ${bold}Pulling Changes...${normal}"

# start sass compiler
echo "\n ${RED}-->${NC} ${bold}Starting Sass Compiler...${normal}"
cd _css && sass --watch main.scss:main.css &

# start local server
echo "\n ${RED}-->${NC} ${bold}Starting Server${normal}"
python -m SimpleHTTPServer 8000 &
open http://localhost:8000 &

# enable php
echo "\n ${RED}-->${NC} ${bold}Initiating PHP...${normal}"
php -S localhost:8000 &

# open atom
atom /Users/luis/Dropbox/public/projects/luisquer.al
