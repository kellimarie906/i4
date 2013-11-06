# all folders should not be globally accessible
chmod 700 ajax/
chmod 700 data/
chmod 700 server/

# html is publicly accessible, not readable
chmod 711 html/ 

# these files are globally readable
chmod 744 html/js/*
chmod 744 html/css/*
chmod 744 html/img/*
