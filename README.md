# Steam Ladder PHP Wrapper ![Steam logo](https://i.imgur.com/lePy0C2.png)
**https://steamladder.com/ API wrapper written in PHP**

# Features

* Get profile data
* Update profile data
* Get ladder list based on xp, playtime etc. and filtered by country or region

Current API call limit is 1000 per hour. To increase this value you will need to ask staff [here](https://steamladder.com/support/contact).

**API Codes**
* 200 Success
* 429 Rate limited
* 401 Unauthorized
* 404 Not found
Note: currently I didnt implement header code check,but I plan to do that in future.

For ladder type info API owner provides us info on parameters that can be used in retriving specific data from API.<br>
Available types: **xp, games, playtime, badges, steam_age, vac, game_ban** <br>
Available country codes: [alpha-2 country codes](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2)<br>
Available regions: **europe, north_america, south_america, asia, africa, oceania, antarctica**<br>

This page is not automated for update check so it can be outdated, so if something new is out there and you need this - make a new issue.

Also you can see our [example page](https://github.com/kallefrombosnia/steam-ladder-php/blob/master/example/example.php).
