SET location = "Central"

echo on
git pull -u origin master
git add *
git commit -m "Central"
git push -u origin master
pause